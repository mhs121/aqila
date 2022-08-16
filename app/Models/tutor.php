<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tutor extends Model
{
    use HasFactory;
    protected $table = 'tutors';
    protected $fillable = [
        'user_id',
        'nama_tutor',
        'alamat',
        'email',
        'phone_tutor',
        'sosmed',
        'mapel',
        'pendidikan',
        'pengalaman',
        'ipk',
        'ijazah',
    ];
    public function user()
    {
        return $this->belongsTo(user::class, 'user_id','id');
    }
}
