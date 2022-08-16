<?php

namespace App\Http\Controllers;

use App\models\user;
use App\models\siswa;
use App\models\mapel;
use App\models\belajar;
use App\models\paket;
use App\models\tutor;
use App\models\payment;
use auth;
use Illuminate\Http\Request;

class paketcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $siswa = siswa::all()->where('user_id', auth::user()->id);
        $mapel = mapel::all();
        return view('moduls.siswa.monthly',compact('siswa','mapel'));
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
        $paket = paket::all();
        return view('moduls.siswa.jadwal', compact(['belajar','paket','siswa']));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, belajar $belajar, Paket $paket, payment $payment)
    {
        $belajar->create($request->all());
        $paket->create($request->all());
        $payment->create($request->all());
        return redirect()->route('paket.create');
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
    public function edit(belajar $belajar)
    {
        $tutor = tutor::all()->where('user_id', auth::user()->id);
        $paket = paket::all();
        $belajar = belajar::all()->where('nama_tutor','menunggu tutor mengkonfirmasi');
        return view('moduls.tutor.konfirm',compact('belajar','paket','tutor'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, belajar $belajar, $id)
    {
        $belajar = belajar::findOrFail($id);
        $belajar->update($request->all());
        return redirect()->route('jator.index');
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
