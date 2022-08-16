<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class payment extends Model
{
    use HasFactory;

    protected $table = "payments";
    protected $fillable = [
        'nama_siswa',
        'nama_paket',
        'tingkatan',
        'mapel',
        'harga',
        'jumlah_pertemuan',
        'status',
        'total_bayar',
        'bukti',
    ];
}
