<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mengajar extends Model
{
    use HasFactory;

    protected $table = 'mengajars';
    protected $fillable = [
        'nama_siswa',
        'nama_tutor',
        'mapel',
        'tingkatan',
        'tanggal',
        'materi',
    ];
}
