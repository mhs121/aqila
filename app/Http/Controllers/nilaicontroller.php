<?php

namespace App\Http\Controllers;

use App\models\siswa;
use App\models\belajar;
use App\models\paket;
use App\models\tutor;
use App\models\rate;
use App\models\nilai;
use auth;
use Illuminate\Http\Request;

class nilaicontroller extends Controller
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
        return view('moduls.tutor.nilai',compact('tutor','belajar'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $nilai = nilai::all();
        return view('moduls.admin.nilai',compact('nilai'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, nilai $nilai)
    {
        $nilai->create($request->all());
        return redirect()->route('nilai.index')->with('status', 'nilai siswa telah selesai di input');
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
