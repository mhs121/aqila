<?php

namespace App\Http\Controllers;

use App\models\user;
use App\models\siswa;
use App\models\tutor;
use App\models\belajar;
use App\models\paket;
use App\models\mengajar;
use App\models\nilai;
use App\models\rate;
use App\models\mapel;
use auth;
use Illuminate\Http\Request;

class datacontroller extends Controller
{
    public function index(user $user)
    {
        return view('moduls.siswa.edit',compact('user'));
    }

    public function sisdat()
    {
        $user = user::all();
        $siswa = siswa::all();
        return view('moduls.admin.sisdat', compact('siswa','user'));
    }
    public function ortu()
    {
        $siswa = siswa::all();
        return view('moduls.admin.ortudat', compact('siswa'));
    }
    public function tordat()
    {
        $tutor = tutor::all();
        return view('moduls.admin.tutordat', compact('tutor'));
    }
    public function pabel()
    {
        return view('moduls.siswa.pabel');
    }
    public function tamdat()
    {
        $paket = paket::all();
        $belajar = belajar::all()->where('nama_tutor','menunggu tutor mengkonfirmasi');
        return view('moduls.tutor.tampil',compact('belajar','paket'));
    }
    public function kegiatanbelajar()
        {
        $mengajar = mengajar::all();
        return view('moduls.admin.pertemuan',compact('mengajar'));
    }
    public function tampilrate()
    {
        $rate = rate::all();
        return view('moduls.admin.ratetutor',compact('rate'));
    }
    public function paket()
    {
        $paket = paket::all();
        return view('moduls.admin.paket',compact('paket'));
    }
    public function psertifikat()
    {
        $nilai = nilai::all();
        return view('moduls.admin.psertifikat',compact('nilai'));
    }
    public function materi()
    {
        return view('moduls.siswa.materi');
    }
    public function jadwal()
    {
        $belajar = belajar::all();
        return view('moduls.admin.jadwalb',compact('belajar'));
    }
}
