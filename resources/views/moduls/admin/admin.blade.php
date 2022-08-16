
@extends('master.app_page')

@section('content')
    <main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-dashboard"></i> Dashboard</h1>
          <p>Halaman Admin Aqila Cource</p>
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
        </ul>
      </div>
      <div class="row">
        <div class="col-md-6 col-lg-3">
          <div class="widget-small primary coloured-icon"><i class="icon fa fa-users fa-3x"></i>
            <div class="info">
              <h4>siswa</h4>
              <p><b>{{$siswa->count()}}</b></p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3">
          <div class="widget-small info coloured-icon"><i class="icon fa fa-users fa-3x"></i>
            <div class="info">
              <h4>Tutor</h4>
              <p><b>{{$tutor->count()}}</b></p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3"><a href="{{route('mapel.index')}}">
          <div class="widget-small warning coloured-icon"><i class="icon fa fa-book fa-3x"></i>
            <div class="info">
              <h4>Mata Pelajaran</h4>
              <p><b>{{$mapel->count()}}</b></p>
            </div>
          </div></a>
        </div>
        <div class="col-md-6 col-lg-3">
          <div class="widget-small danger coloured-icon"><i class="icon fa fa-file fa-3x"></i>
            <div class="info">
              <h4>Paket Belajar</h4>
              <p><b>3</b></p>
            </div>
          </div>
        </div>
      </div>
    </main>
    @endSection