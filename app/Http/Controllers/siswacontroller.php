<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;

use App\models\siswa;
use App\models\user;
use App\models\payment;
use App\models\belajar;
use auth;
use Illuminate\Http\Request;

class siswacontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $siswa = siswa::all()->where('user_id', auth::user()->id);
        return view('moduls.siswa.profil', compact('siswa'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, siswa $siswa)
    {
        $siswa->create($request->all());
        return redirect()->route('profil.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(user $user)
    {
        return view ('moduls.siswa.profil',compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit()
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
        $request->validate([
            'bukti'=>'image',
        ]);
        $payment= payment::findorfail($id);
        $payment->update($request->all());
        if($request->file('bukti')){
            $payment->bukti = $request->file('bukti')->store('image');
            $payment->save();
        }
        return redirect()->route('payment.show',$payment->id)->with('status', 'Pembayaran berhasil');
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
