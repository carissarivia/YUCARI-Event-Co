<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    use HasFactory;

    protected $table = 'laporan_feedback';
    protected $fillable = ['nama', 'email', 'subjek', 'pesan'];
    public $timestamps = true;
}

