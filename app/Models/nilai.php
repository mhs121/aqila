<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class nilai extends Model
{
    use HasFactory;

    protected $table = 'nilais';
    protected $fillable = [
        'nama_siswa',
        'user_id',
        'nama_tutor',
        'mapel',
        'tingkatan',
        'latihan',
        'tugas',
        'final_test',
        'total_nilai',
    ];
}
