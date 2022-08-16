<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class rate extends Model
{
    use HasFactory;
    
    protected $table = 'rates';
    protected $fillable= [
        'nama_siswa',
        'nama_tutor',
        'mapel',
        'rate',
        'komentar',
    ];
}
