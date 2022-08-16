<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\siswa as Authenticatable;
use Illuminate\Database\Eloquent\Model;

class siswa extends Model
{
    use HasFactory;

    protected $table = 'siswas';
    protected $fillable = [
        'user_id',
        'nama_siswa',
        'alamat',
        'email',
        'phone_siswa',
        'sosmed',
        'tingkatan',
        'gender',
        'sekolah',
        'avatar',
        'nama_ortu',
        'phone_ortu',
        'alamat_ortu',
        'pekerjaan',
    ];

    public function user()
    {
        return $this->belongsTo(user::class, 'user_id','id');
    }

}
