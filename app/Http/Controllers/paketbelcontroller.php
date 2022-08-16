<?php

namespace App\Http\Controllers;

use auth;
use App\models\siswa;
use App\models\mapel;
use Illuminate\Http\Request;

class paketbelcontroller extends Controller
{
    public function index()
    {
        $siswa = siswa::all()->where('user_id', auth::user()->id);
        $mapel = mapel::all();
        return view('moduls.siswa.mid',compact('siswa','mapel'));
    }
    public function create()
    {
        $siswa = siswa::all()->where('user_id', auth::user()->id);
        $mapel = mapel::all();
        return view('moduls.siswa.fullstudy',compact('siswa','mapel'));
    }
}
