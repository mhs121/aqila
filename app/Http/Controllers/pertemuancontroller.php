<?php

namespace App\Http\Controllers;

use App\models\siswa;
use App\models\belajar;
use App\models\paket;
use App\models\tutor;
use App\models\mengajar;
use auth;
use Illuminate\Http\Request;

class pertemuancontroller extends Controller
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
        $belajar = belajar::all()
        ->where('user_id', auth::user()->id)
        ->where('nama_tutor','!=','menunggu tutor mengkonfirmasi');
        return view('moduls.siswa.tutnil',compact('belajar'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, mengajar $mengajar)
    {
        $mengajar->create($request->all());
        return redirect()->route('tutor');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(belajar $belajar, $id)
    {
        $belajar = belajar::findorfail($id);
        return view('moduls.siswa.trate',compact('belajar'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(belajar $belajar, $id)
    {
        $belajar = belajar::findorfail($id);
        $tutor = tutor::all()->where('nama_tutor',$belajar->nama_tutor);
        return view('moduls.siswa.info',compact('belajar','tutor'));
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
        $belajar = belajar::findorfail($id);
        $belajar->update($request->all());
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
