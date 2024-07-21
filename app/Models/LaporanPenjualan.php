<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LaporanPenjualan extends Model
{
    protected $table = 'laporanpenjualan';
    protected $fillable = [
        'No', 'Tanggal', 'Nama_Acara', 'Nama_Customer', 'Tiket_Terjual', 'Harga_per_Tiket', 'Total_Penjualan'
    ];
    public $timestamps = true;
}



