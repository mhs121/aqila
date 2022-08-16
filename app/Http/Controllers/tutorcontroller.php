<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;

use App\models\tutor;
use App\models\user;
use App\models\belajar;
use App\models\mapel;
use auth;
use Illuminate\Http\Request;

class tutorcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tutor = tutor::all()->where('user_id', auth::user()->id);
        $belajar = belajar::all()->where('nama_tutor', 'menunggu tutor mengkonfirmasi');
        return view('moduls.tutor.profil', compact('tutor','belajar'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $mapel = mapel::all();
        return view('moduls.tutor.dator',compact('mapel'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, tutor $tutor)
    {
        $validatedData = $request->validate([
        'nama_tutor' => 'required',
        'alamat' => 'required',
        'email'=>'required',
        'phone_tutor' => 'required',
        'sosmed' =>'required',
        'mapel'=> 'required',
        'pendidikan'=> 'required',
        'pengalaman' => 'required',
        'ipk' => 'required',
        'ijazah'=>'required|mimes:pdf',
        ]);
        
        if($request->file('ijazah')){
            $validatedData['ijazah'] = $request->file('ijazah')->store('pdf');
        }
        $validatedData['user_id'] = auth()->user()->id;
        tutor::create($validatedData);
        return redirect()->route('dator.index');
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
