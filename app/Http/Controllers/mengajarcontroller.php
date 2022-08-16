<?php

namespace App\Http\Controllers;

use App\models\siswa;
use App\models\belajar;
use App\models\paket;
use App\models\tutor;
use App\models\nilai;
use auth;
use PDF;
use Illuminate\Http\Request;

class mengajarcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tutor = tutor::all()->where('user_id', auth::user()->id);
        $belajar = belajar::all();
        return view('moduls.tutor.mengajar',compact('belajar','tutor'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $nilai = nilai::all()->where('user_id', auth::user()->id);
        $siswa = siswa::where('user_id', auth::user()->id);
        return view('moduls.siswa.sps',compact('nilai','siswa'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, mengajar $mengajar)
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
        $nilai = nilai::find($id);
        return view('moduls.cetak.siswasertifi',compact('nilai'));
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
