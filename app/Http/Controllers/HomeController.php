<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\belajar;
use App\models\siswa;
use App\models\tutor;
use App\models\mapel;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function adminHome()
    {
        $siswa = siswa::all();
        $tutor = tutor::all();
        $mapel = mapel::all();
        return view('moduls.admin.admin',compact('siswa','tutor','mapel'));
    }
    public function siswaHome()
    {
        $siswa = siswa::all()->count();
        $tutor = tutor::all()->count();
        $mapel = mapel::all()->count();
        return view('moduls.siswa.siswa',compact('siswa','tutor','mapel'));
    }
    public function tutor()
    {
        $belajar = belajar::all()->where('nama_tutor','menunggu tutor mengkonfirmasi');
        return view('moduls.tutor.tutor',compact('belajar'));
    }
}
