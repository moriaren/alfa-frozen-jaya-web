<x-guest-layout>
    {{-- Script SweetAlert2 & Jam --}}
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        // Fungsi Konfirmasi Clock Out
        function confirmClockOut() {
            Swal.fire({
                title: 'Yakin mau pulang?',
                text: "Pastikan pekerjaan Anda hari ini sudah selesai!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#FF2800',
                cancelButtonColor: '#004B93',
                confirmButtonText: 'YA, ABSEN PULANG',
                cancelButtonText: 'BATAL',
                customClass: {
                    popup: 'rounded-[2rem]',
                    confirmButton: 'rounded-xl font-black uppercase italic text-xs tracking-widest',
                    cancelButton: 'rounded-xl font-black uppercase italic text-xs tracking-widest'
                }
            }).then((result) => {
                if (result.isConfirmed) {
                    document.getElementById('form-clock-out').submit();
                }
            })
        }

        // Jam Realtime Indonesia (WIB)
        function updateClock() {
            const now = new Date();
            const options = { 
                hour: '2-digit', 
                minute: '2-digit', 
                second: '2-digit', 
                hour12: false,
                timeZone: 'Asia/Jakarta' 
            };
            const clockElement = document.getElementById('clock');
            if(clockElement) {
                clockElement.innerText = now.toLocaleTimeString('id-ID', options).replace(/\./g, ':');
            }
        }
        setInterval(updateClock, 1000);
        window.onload = updateClock;
    </script>

    {{-- Header Section --}}
    <div class="bg-[#004B93] pt-12 pb-24 text-center text-white">
        <h1 class="text-2xl font-black italic uppercase tracking-tight">Halo, {{ Auth::user()->name }}</h1>
        <div class="flex items-center justify-center gap-2 mt-1">
            <span class="w-2 h-2 bg-green-400 rounded-full animate-pulse"></span>
            <p class="text-[10px] font-bold opacity-80 uppercase tracking-widest">Staff Alfa Frozen Jaya</p>
        </div>
    </div>

    <div class="max-w-xl mx-auto px-4 -mt-12 pb-10">
        <div class="bg-white p-8 rounded-[2.5rem] shadow-2xl text-center border border-slate-100 relative overflow-hidden">
            
            {{-- Status Bar Dekoratif --}}
            <div class="absolute top-0 left-0 w-full h-2 {{ !$attendance ? 'bg-slate-200' : ($attendance && !$attendance->clock_out ? 'bg-blue-500' : 'bg-green-500') }}"></div>

            {{-- Menampilkan Pesan Error/Sukses --}}
            @if(session('success'))
                <div class="bg-green-50 text-green-700 p-4 rounded-2xl mb-6 text-xs font-bold border border-green-100">
                    {{ session('success') }}
                </div>
            @endif

            @if(session('error'))
                <div class="bg-red-50 text-red-700 p-4 rounded-2xl mb-6 text-xs font-bold border border-red-100">
                    {{ session('error') }}
                </div>
            @endif

            {{-- Jam Digital --}}
            <div class="mb-8">
                <p class="text-[10px] font-black uppercase text-slate-400 italic mb-1 tracking-widest">Waktu Server (WIB)</p>
                <p class="text-6xl font-black text-slate-800 tracking-tighter" id="clock">00:00:00</p>
                <p class="text-[10px] font-bold text-slate-400 mt-1">{{ \Carbon\Carbon::now()->isoFormat('dddd, D MMMM YYYY') }}</p>
            </div>

            <hr class="mb-8 border-slate-100">

            {{-- LOGIKA TOMBOL ABSENSI --}}
            @if(!$attendance)
                {{-- KONDISI 1: BELUM ABSEN MASUK --}}
                <form action="{{ route('clock.in') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-6 bg-slate-50 p-6 rounded-3xl border-2 border-dashed border-slate-200 group hover:border-[#004B93] transition-colors">
                        <label class="block text-[10px] font-black uppercase text-slate-400 mb-4 tracking-widest group-hover:text-[#004B93]">Ambil Foto Selfie di Toko</label>
                        <div class="relative">
                            <input type="file" name="photo" accept="image/*" capture="user" required 
                                   class="block w-full text-xs text-slate-500 file:mr-4 file:py-3 file:px-6 file:rounded-2xl file:border-0 file:bg-[#004B93] file:text-white file:font-black file:uppercase file:italic file:text-[10px] hover:file:bg-blue-700 transition-all">
                        </div>
                        <p class="mt-3 text-[9px] text-slate-400 italic">*Pastikan GPS HP aktif & dalam radius toko</p>
                    </div>

                    <button type="submit" class="w-full py-6 bg-[#004B93] text-white rounded-3xl font-black uppercase italic tracking-widest shadow-lg active:scale-95 transition duration-300">
                        Absen Masuk
                    </button>
                </form>

            @elseif($attendance && !$attendance->clock_out)
                {{-- KONDISI 2: SUDAH MASUK, BELUM PULANG --}}
                <div class="mb-8 p-6 bg-blue-50 rounded-[2rem] border border-blue-100">
                    <p class="text-[10px] font-black uppercase text-blue-400 italic mb-1">Anda Masuk Pada:</p>
                    <p class="text-3xl font-black text-[#004B93]">{{ \Carbon\Carbon::parse($attendance->clock_in)->format('H:i') }}</p>
                </div>

                <form action="{{ route('clock.out') }}" method="POST" id="form-clock-out">
                    @csrf
                    <button type="button" onclick="confirmClockOut()" class="w-full py-6 bg-[#FF2800] text-white rounded-3xl font-black uppercase italic tracking-widest shadow-lg active:scale-95 transition duration-300">
                        Absen Pulang
                    </button>
                </form>

            @else
                {{-- KONDISI 3: SHIFT SELESAI --}}
                <div class="py-12 bg-slate-50 rounded-[2.5rem] border border-slate-100">
                    <div class="w-20 h-20 bg-green-100 text-green-500 rounded-full flex items-center justify-center mx-auto mb-4 shadow-inner">
                        <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path>
                        </svg>
                    </div>
                    <p class="font-black uppercase italic text-slate-500 tracking-widest">Shift Selesai</p>
                    <p class="text-[10px] text-slate-400 mt-2 font-bold uppercase tracking-tighter">Sampai Jumpa Besok, Hati-hati di Jalan!</p>
                </div>
            @endif
        </div>

        {{-- Logout Button --}}
        <div class="mt-8 text-center">
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button type="submit" class="text-[10px] font-black uppercase text-slate-400 hover:text-red-500 transition-colors tracking-[0.2em] italic">
                    — Keluar Sistem —
                </button>
            </form>
        </div>
    </div>
</x-guest-layout>