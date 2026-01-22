<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attendance extends Model
{
    use HasFactory;

    /**
     * Menggunakan guarded kosong berarti semua kolom diizinkan (Mass Assignment).
     * Pastikan kolom 'device_info' tidak lagi dipanggil di Controller 
     * karena kolom tersebut tidak ada di database Anda.
     */
    protected $guarded = [];

    // ==========================================
    // RELASI
    // ==========================================

    /**
     * Relasi ke model User.
     * Digunakan untuk menampilkan nama karyawan di halaman rekap dan export.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // ==========================================
    // ACCESSOR (Opsional tapi Memudahkan)
    // ==========================================

    /**
     * Accessor untuk mendapatkan URL foto yang valid.
     * Memudahkan saat Admin ingin mengecek foto manual.
     */
    public function getPhotoUrlAttribute()
    {
        if ($this->photo) {
            return asset('storage/' . $this->photo);
        }
        return 'https://ui-avatars.com/api/?name=No+Photo&background=F1F5F9&color=64748B';
    }
}