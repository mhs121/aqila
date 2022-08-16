<?php

namespace App\Http\Controllers;

use App\models\user;
use App\models\siswa;
use App\models\tutor;
use App\models\belajar;
use App\models\paket;
use App\models\mengajar;
use App\models\rate;
use App\models\nilai;
use App\models\mapel;
use App\models\payment;

use PDF;
use auth;
use Illuminate\Http\Request;

class pdfcontroller extends Controller
{
    public function cetaksisdat()
    {
        $siswa = siswa::all();
        $judul = "data siswa.pdf";
        $pdf = PDF::loadview('moduls.admin.cetaksisdat',compact('siswa'));
        $pdf-> setPaper('A4','landscape');
        return $pdf-> stream($judul, array("Attachment" => false));
    }
    public function cetakortu()
    {
        $siswa = siswa::all();
        $judul = "data orangtua.pdf";
        $pdf = PDF::loadview('moduls.cetak.cetakortu',compact('siswa'));
        $pdf-> setPaper('A4','portrait');
        return $pdf-> stream($judul, array("Attachment" => false));
    }
    public function cetaktutor()
    {
        $tutor = tutor::all();
        $judul = "data tutor.pdf";
        $pdf = PDF::loadview('moduls.cetak.cetaktutor',compact('tutor'));
        $pdf->setpaper('A4','landscape');
        return $pdf->stream($judul, array("Attachment"=>false));
    }
    public function daftaraccount()
    {
        $user = user::all()->where('sebagai','!=','admin');
        $judul = "mendaftar account.pdf";
        $pdf = PDF::loadview('moduls.cetak.cetakpendaftaran',compact('user'));
        $pdf->setpaper('A4','portrait');
        return $pdf->stream($judul, array("Attachment"=>false));
    }
    public function datapaket()
    {
        $paket = paket::all();
        $judul = "data paket.pdf";
        $pdf = PDF::loadview('moduls.cetak.cetakpaket',compact('paket'));
        $pdf->setpaper('A4','landscape');
        return $pdf->stream($judul, array("Attachment"=>false));
    }
    public function cetakkb()
    {
        $mengajar = mengajar::all();
        $judul = "Data Kegiatan Mengajar.pdf";
        $pdf = PDF::loadview('moduls.cetak.cetakkb',compact('mengajar'));
        $pdf->setpaper('A4','landscape');
        return $pdf->stream($judul, array("Attachment"=>false));
    }
    public function cetakrate()
    {
        $rate = rate::all();
        $judul = "Data Penilaian Tutor.pdf";
        $pdf = PDF::loadview('moduls.cetak.cetakrate',compact('rate'));
        $pdf->setpaper('A4','landscape');
        return $pdf->stream($judul, array("Attachment"=>false));
    }
    public function sert()
    {
        $nilai = nilai::all();
        $judul = "Data Siswa penerima sertifikat";
        $pdf = PDF::loadview('moduls.cetak.cetakpsertifikat',compact('nilai'));
        $pdf->setpaper('A4','landscape');
        return $pdf->stream($judul, array("Attachment"=>false));
    }
    public function cetakmp()
    {
        $mapel = mapel::all();
        $judul = "mata pelajaran.pdf";
        $pdf = PDF::loadview('moduls.cetak.cetakmp',compact('mapel'));
        $pdf->setpaper('A4','landscape');
        return $pdf->stream($judul, array("Attachment"=>false));
    }
    public function cn()
    {
        $nilai = nilai::all();
        $judul = "Laporan Nilai.pdf";
        $pdf = PDF::loadview('moduls.cetak.cetaknilai',compact('nilai'));
        $pdf->setpaper('A4','landscape');
        return $pdf->stream($judul, array("Attachment"=>false));
    }
    public function cetakpay()
    {
        $payment = payment::all();
        $judul = "Laporan Pembayaran";
        $pdf =PDF::loadview('moduls.cetak.cetakpaysiswa',compact('payment'));
        $pdf->setpaper('A4','Landscape');
        return $pdf->stream($judul, array("Attachment"=>false));
    }
    public function bukbay($id)
    {
        $payment = payment::findorfail($id);
        $judul ="bukti pembayaran";
        $pdf = PDF::loadview('moduls.cetak.cetakbuk',compact('payment'));
        $pdf->setpaper('A3','portrait');
        return $pdf->stream($judul, array("Attachment"=>false));
    }
    public function cetjad()
    {
        $belajar = belajar::all();
        $judul = "jadwal Belajar.pdf";
        $pdf = PDF::loadview('moduls.cetak.cetakjadwal',compact('belajar'));
        $pdf->setpaper('A4','Portrait');
        return $pdf->stream($judul, array("Attachment"=>false));
    }
    public function jabel()
    {
        $belajar = belajar::all()->where('user_id', auth::user()->id);
        $siswa = siswa::all()->where('user_id', auth::user()->id);
        $judul = "jadwal bimbel siswa.pdf";
        $pdf = PDF::loadview('moduls.cetak.siswajadwal',compact('belajar','siswa'));
        $pdf->setpaper('A4','portrait');
        return $pdf->stream($judul,array("Attachment"=>false));
    }
}
