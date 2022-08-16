<?php

namespace App\Http\Controllers;

use App\models\user;
use App\models\siswa;
use App\models\payment;
use PDF;
use auth;
use Illuminate\Http\Request;

class paymentcontroller extends Controller
{
    public function index()
    {
        $payment = payment::all()->where('status','billing');
        return view('moduls.siswa.payment',compact('payment'));
    }
    public function create()
    {
        $payment = payment::all()->where('status','Lunas');
        return view('moduls.admin.paysiswa',compact('payment'));
    }
    public function edit($id)
    {
        $payment = payment::findorfail($id)->where('status','billing')->get();
        return view('moduls.siswa.pay',compact('payment'));
    }
    public function show($id)
    {
        $payment = payment::findorfail($id);
        return view('moduls.siswa.pembayaran', compact('payment'));
    }
    public function cetakpay()
    {
        $payment = payment::all();
        $judul = "Laporan Pembayaran";
        $pdf =PDF::loadview('moduls.cetak.cetakpaysiswa',compact('payment'));
        $pdf->setpaper('A4','Landscape');
        return $pdf->stream($judul, array("Attachment"=>false));

}
}