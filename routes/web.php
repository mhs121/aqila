<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\siswacontroller;
use App\Http\Controllers\datacontroller;
use App\Http\Controllers\tutorcontroller;
use App\Http\Controllers\paymentcontroller;
use App\models\user;
use App\models\siswa;
use App\models\belajar;
use App\models\paket;
use App\models\rate;
use App\models\tutor;
use App\models\mapel;
use App\models\payment;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $tutor = tutor::all()->count();
    $siswa = siswa::all()->count();
    $mapel = mapel::all()->count();
    return view('home',compact('tutor','siswa','mapel'));
});

Auth::routes();

Route::get('/admin', [App\Http\Controllers\HomeController::class, 'adminHome'])->name('admin')->middleware('is_admin');
Route::get('/siswa', [App\Http\Controllers\HomeController::class, 'siswaHome'])->name('siswa');
Route::get('/tutor', [App\Http\Controllers\HomeController::class, 'tutor'])->name('tutor');

Route::get('reg', function() {
    return view('master.fregister');
});
Route::get('/home', function(){
    return view('home');
});

Route::resource('profil', siswacontroller::class);

Route::get('/daftar', function(){
    $user =user::all()->where('sebagai','!=','admin');
    return view('moduls.admin.daftar', compact('user'));
});

Route::resource('data', App\Http\Controllers\datacontroller::class);
Route::get('data2', [App\Http\Controllers\datacontroller::class, 'sisdat']);
Route::get('data3', [App\Http\Controllers\datacontroller::class, 'ortu']);
Route::get('data4', [App\Http\Controllers\datacontroller::class, 'tordat']);
Route::get('pabel', [App\Http\Controllers\datacontroller::class, 'pabel']);
Route::get('tamdat',[App\Http\Controllers\datacontroller::class, 'tamdat']);
Route::get('materi',[App\Http\Controllers\datacontroller::class, 'materi']);
Route::get('/paketbel',[App\Http\Controllers\datacontroller::class, 'paket']);
Route::get('jadwalb',[App\Http\Controllers\datacontroller::class, 'jadwal']);
Route::get('/tampilrate',[App\Http\Controllers\datacontroller::class, 'tampilrate']);
Route::get('/kegiatanbelajar', [App\Http\Controllers\datacontroller::class, 'kegiatanbelajar']);
Route::get('/psertifikat', [App\Http\Controllers\datacontroller::class, 'psertifikat']);
Route::resource('pbelajar', App\Http\Controllers\paketbelcontroller::class);
Route::resource('jator', App\Http\Controllers\jadwalmcontroller::class);
Route::resource('dator', App\Http\Controllers\tutorcontroller::class);
Route::resource('/paket', App\http\Controllers\paketcontroller::class);
Route::resource('/mengajar', App\http\Controllers\mengajarcontroller::class);
Route::resource('pertemuan', App\Http\Controllers\pertemuancontroller::class);
Route::resource('rating', App\Http\Controllers\ratecontroller::class);
Route::resource('nilai', App\Http\Controllers\nilaicontroller::class);
Route::resource('payment', App\Http\Controllers\paymentcontroller::class);
Route::get('/cetakpay', [App\Http\Controllers\paymentcontroller::class, 'cetakpay']);
Route::resource('mapel', App\Http\Controllers\mapelcontroller::class);
Route::get('cetaksisdat', [App\Http\Controllers\pdfcontroller::class, 'cetaksisdat']);
Route::get('cetakortu', [App\Http\Controllers\pdfcontroller::class, 'cetakortu']);
Route::get('cetaktutor', [App\Http\Controllers\pdfcontroller::class, 'cetaktutor']);
Route::get('daftaraccount', [App\Http\Controllers\pdfcontroller::class, 'daftaraccount']);
Route::get('datapaket', [App\Http\Controllers\pdfcontroller::class, 'datapaket']);
Route::get('cetakkb', [App\Http\Controllers\pdfcontroller::class, 'cetakkb']);
Route::get('cetakrate', [App\Http\Controllers\pdfcontroller::class, 'cetakrate']);
Route::get('cn', [App\Http\Controllers\pdfcontroller::class, 'cn']);
Route::get('sert', [App\Http\Controllers\pdfcontroller::class, 'sert']);
Route::get('cetakmp', [App\Http\Controllers\pdfcontroller::class, 'cetakmp']);
Route::get('cetjad', [App\Http\Controllers\pdfcontroller::class, 'cetjad']);
Route::get('bukbay/{payment}', [App\Http\Controllers\pdfcontroller::class, 'bukbay']);
Route::get('/jabel', [App\Http\Controllers\pdfcontroller::class, 'jabel']);
Route::get('ep', [App\Http\Controllers\formulacontroller::class, 'ep']);
