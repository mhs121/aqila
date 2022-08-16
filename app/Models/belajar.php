<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class belajar extends Model
{
    use HasFactory;

    protected $table = 'belajars';
    protected $fillable = [
        'nama_siswa',
        'nama_tutor',
        'mapel',
        'tingkatan',
        'hari',
        'waktu',
        'user_id',
        'nama_paket',
        'tutor',
    ];
}
