@extends('master.app_tutor')

@section('content')
    <main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-dashboard"></i> Dashboard</h1>
          <p>Halaman Tutor Aqila Cource</p>
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
        </ul>
      </div>
      @forelse($tutor as $tutor)
      <div class="row gutters-sm">
            <div class="col-md-4 mb-3">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex flex-column align-items-center text-center">
                    <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Admin" class="rounded-circle" width="150">
                    <div class="mt-3">
                      <h4>{{auth::user()->name}}</h4>
                      <p class="text-secondary mb-1">Tutor</p>
                      <p class="text-muted font-size-sm">pendidikan {{$tutor->pendidikan}}</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card mt-3">
              <div class="card-body">
        <h5 class="card-title">Pengalaman</h5>
        <hr>
        <p class="card-text"><i class="fa fa-check" style="color: #A020F0;"> {{$tutor->pengalaman}}</i></p>
      </div>
              </div>
            </div>
            <div class="col-md-8">
              <div class="card mb-3">
                <div class="card-body">
                  <em class="text-center">Data Tutor</em>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Nama lengkap</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      {{$tutor->nama_tutor}}
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Email</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      {{auth::user()->email}}
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">No Handphone</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      {{$tutor->phone_tutor}}
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Sosmed</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      {{$tutor->sosmed}}
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Alamat</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      {{$tutor->alamat}}
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-12">
                      <a class="btn btn-info" href="{{route('dator.create')}}">Lengkapi Data</a>
                    </div>
                  </div>
                </div>
              </div>
              @empty
              <div class="row gutters-sm">
            <div class="col-md-4 mb-3">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex flex-column align-items-center text-center">
                    <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Admin" class="rounded-circle" width="150">
                    <div class="mt-3">
                      <h4>{{auth::user()->name}}</h4>
                      <p class="text-secondary mb-1">Full Stack Developer</p>
                      <p class="text-muted font-size-sm">Bay Area, San Francisco, CA</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card mt-3">
              <div class="card-body">
        <h5 class="card-title">Pengalaman</h5>
        <hr>
        <p class="card-text"></p>
      </div>
              </div>
            </div>
            <div class="col-md-8">
              <div class="card mb-3">
                <div class="card-body">
                  <h6 class="text-danger">Data belum lengkap silahkan lengkapi data</h6>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Nama lengkap</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      {{auth::user()->name}}
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Email</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      {{auth::user()->email}}
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">No Handphone</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      -
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Sosmed</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      -
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Alamat</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      -
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-12">
                      <a class="btn btn-info" href="{{route('dator.create')}}">Lengkapi Data</a>
                    </div>
                  </div>
                </div>
              </div>
@endforelse
            </div>
          </div>
        </div>
    </div>
    </main>
    @endSection