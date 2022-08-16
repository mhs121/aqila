<?php

namespace App\Http\Controllers;

use App\models\user;
use App\models\siswa;
use App\models\tutor;
use App\models\belajar;
use App\models\paket;
use App\models\mengajar;
use App\models\nilai;
use auth;
use Illuminate\Http\Request;

class jadwalmcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $paket = paket::all();
        $nilai = nilai::all();
        $belajar= belajar::all()->where('tutor',auth::user()->name);
        return view('moduls.tutor.jadwal_mengajar',compact('belajar','nilai','paket'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $belajar = belajar::all()->where('user_id', auth::user()->id);
        $siswa = siswa::all()->where('user_id', auth::user()->id);
        $nilai = nilai::all()->where('user_id', auth::user()->id);
        return view('moduls.siswa.nilai', compact(['belajar','nilai','siswa']));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
