<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;
    
    protected $table = 'data_member'; // Sesuaikan dengan nama tabel setelah impor
    protected $fillable = ['name', 'email', 'phone', 'address']; // Sesuaikan dengan kolom yang ada
    public $timestamps = true;
}

