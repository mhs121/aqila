@extends('master.app_siswa')
 @section('content')
 <main id="main">
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Info Tutor</h2>
          <ol>
            <li><a href="index.html">Home</a></li>
            <li>Info</li>
          </ol>
        </div>
      </div>
    </section>
    <section>
        <div class="container">
        <div class="card mb-3">
        <div class="card-header text-center">
    Detail Tutor
  </div>
            <div class="row g-0">
                <div class="col-md-4">
                <img src="{{asset('tsiswa/assets/img/details-1.png')}}" class="img-fluid rounded-start" width="50%" height="100%">
                </div>
                <div class="col-md-8">
                <div class="card-body">
                <ul class="list-group list-group-flush">
                <li class="list-group-item">Nama Tutor&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;{{$belajar->nama_tutor}}</li>
                @foreach($tutor as $tutor)
                <li class="list-group-item">Pendidikan&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;{{$tutor->pendidikan}}</li>
                <li class="list-group-item">Mengajar&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;{{$tutor->mapel}}</li>
                <li class="list-group-item">No Handphone&nbsp;&nbsp;:&nbsp;{{$tutor->phone_tutor}}</li>
                @endforeach
            </ul>
                </div>
                </div>
            </div>
            </div>
        </div>
    </section>
 @endsection