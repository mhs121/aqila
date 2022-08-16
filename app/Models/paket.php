<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class paket extends Model
{
    use HasFactory;

    protected $table = 'pakets';
    protected $fillable = [
        'nama_paket',
        'jenis',
        'estimasi',
        'tingkatan',
        'harga',
    ];
}
