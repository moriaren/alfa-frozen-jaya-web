<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Attendance;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;
use App\Exports\AttendanceExport;
use Maatwebsite\Excel\Facades\Excel;

class AdminController extends Controller
{
    // ==========================================
    // 1. DASHBOARD & RINGKASAN
    // ==========================================

    public function dashboard()
    {
        $recentProducts = Product::latest()->take(5)->get();
        $recentAttendances = Attendance::with('user')->latest()->take(5)->get();

        return view('pages.admin', compact('recentProducts', 'recentAttendances'));
    }

    public function employeeDashboard()
    {
        $attendance = Attendance::where('user_id', Auth::id())
            ->whereDate('date', Carbon::today())
            ->first();

        $myLogs = Attendance::where('user_id', Auth::id())
            ->latest()
            ->take(5)
            ->get();

        return view('pages.employee', compact('attendance', 'myLogs'));
    }

    // ==========================================
    // 2. MANAJEMEN PRODUK (CRUD)
    // ==========================================

    public function productIndex(Request $request)
    {
        $query = Product::query();
        if ($request->filled('search')) {
            $query->where('name', 'like', '%' . $request->search . '%');
        }
        if ($request->filled('category')) {
            $query->where('category', $request->category);
        }
        $products = $query->latest()->paginate(10)->withQueryString();
        return view('pages.catalog-admin', compact('products'));
    }

    public function productCreate() { return view('pages.product-create'); }

    public function productStore(Request $request)
    {
        $request->validate([
            'name'     => 'required|string|max:255',
            'category' => 'required|string',
            'price'    => 'required|numeric|min:0',
            'image'    => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $imagePath = $request->file('image')->store('products', 'public');
        Product::create([
            'name' => $request->name,
            'category' => $request->category,
            'price' => $request->price,
            'image' => $imagePath,
        ]);
        return redirect()->route('admin.product.index')->with('success', 'Produk berhasil ditambahkan.');
    }

    public function productEdit($id)
    {
        $product = Product::findOrFail($id);
        return view('pages.product-edit', compact('product'));
    }

    public function productUpdate(Request $request, $id)
    {
        $product = Product::findOrFail($id);
        $request->validate([
            'name'     => 'required|string|max:255',
            'category' => 'required|string',
            'price'    => 'required|numeric|min:0',
            'image'    => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $data = $request->only(['name', 'category', 'price']);
        if ($request->hasFile('image')) {
            if ($product->image) { Storage::disk('public')->delete($product->image); }
            $data['image'] = $request->file('image')->store('products', 'public');
        }
        $product->update($data);
        return redirect()->route('admin.product.index')->with('success', 'Data produk diperbarui.');
    }

    public function productDestroy($id)
    {
        $product = Product::findOrFail($id);
        if ($product->image) { Storage::disk('public')->delete($product->image); }
        $product->delete();
        return redirect()->route('admin.product.index')->with('success', 'Produk berhasil dihapus.');
    }

    // ==========================================
    // 3. SISTEM ABSENSI (ATURAN DUAL SHIFT)
    // ==========================================

    public function clockIn(Request $request)
    {
        $request->validate([
            'photo' => 'required|image|max:2048',
        ]);

        $now = now();
        $currentTime = $now->format('H:i:s');
        
        // 1. Validasi Batas Awal (Minimal jam 05:45)
        if ($currentTime < "05:45:00") {
            return back()->with('error', 'Sistem absen baru dibuka jam 05:45.');
        }

        // 2. Tentukan Status Awal (Hadir/Telat)
        $status = 'Telat'; // Defaultnya telat

        // Jendela Hadir Shift 1 (05:45 - 06:05)
        if ($currentTime >= "05:45:00" && $currentTime <= "06:05:00") {
            $status = 'Hadir';
        } 
        // Jendela Hadir Shift 2 (11:45 - 12:05)
        elseif ($currentTime >= "11:45:00" && $currentTime <= "12:05:00") {
            $status = 'Hadir';
        }

        // 3. Proses Foto ke WebP
        $imagePath = $request->file('photo')->getRealPath();
        $filename = 'att_' . time() . '.webp';
        $manager = new ImageManager(new Driver());
        $image = $manager->read($imagePath);
        $encoded = $image->toWebp(80); 
        Storage::disk('public')->put('attendance/' . $filename, $encoded);

        // 4. Simpan Database
        Attendance::create([
            'user_id'  => Auth::id(),
            'date'     => $now->format('Y-m-d'),
            'clock_in' => $currentTime,
            'photo'    => 'attendance/' . $filename,
            'status'   => $status,
        ]);

        return back()->with('success', "Absen masuk berhasil! Status: $status");
    }

    public function clockOut(Request $request)
    {
        $attendance = Attendance::where('user_id', Auth::id())
            ->where('date', now()->format('Y-m-d'))
            ->first();

        if ($attendance && !$attendance->clock_out) {
            $now = now();
            $in = Carbon::parse($attendance->clock_in);
            
            $totalMinutes = $in->diffInMinutes($now);
            $totalHours = $totalMinutes / 60;
            
            // Lembur HANYA JIKA kerja >= 10 jam (Shift 9j + 1j toleransi)
            $isLembur = ($totalHours >= 10.00);
            
            // Format Status Gabungan
            $newStatus = $isLembur ? ($attendance->status . " - Lembur") : $attendance->status;

            $attendance->update([
                'clock_out'   => $now->format('H:i:s'),
                'total_hours' => number_format($totalHours, 2, '.', ''),
                'status'      => $newStatus
            ]);

            $durationMsg = floor($totalHours) . " jam " . ($totalMinutes % 60) . " menit";
            return back()->with('success', "Absen pulang berhasil! Status: $newStatus");
        }

        return back()->with('error', 'Data tidak ditemukan.');
    }

    // ==========================================
    // 4. REKAP & EXPORT
    // ==========================================

    public function recap(Request $request)
    {
        $query = Attendance::with('user');
        if ($request->filled('search')) {
            $query->whereHas('user', function($q) use ($request) {
                $q->where('name', 'like', '%' . $request->search . '%');
            });
        }
        if ($request->filled('start_date') && $request->filled('end_date')) {
            $query->whereBetween('date', [$request->start_date, $request->end_date]);
        }
        $attendances = $query->latest('date')->paginate(15)->withQueryString();
        return view('pages.recap', compact('attendances'));
    }

    public function exportExcel(Request $request) 
    {
        $query = Attendance::with('user');
        if ($request->filled('search')) {
            $query->whereHas('user', function($q) use ($request) {
                $q->where('name', 'like', '%' . $request->search . '%');
            });
        }
        if ($request->filled('start_date') && $request->filled('end_date')) {
            $query->whereBetween('date', [$request->start_date, $request->end_date]);
        }
        $data = $query->orderBy('date', 'desc')->get();
        return Excel::download(new AttendanceExport($data), 'rekap-absensi-afj.xlsx');
    }
}