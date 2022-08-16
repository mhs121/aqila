@extends('master.app_tutor')
    @section('content')
    <main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-dashboard"></i>Mengajar</h1>
          <p>Isi data kegiatan belajar mengajar</p>
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item"><a href="#">Mengajar</a></li>
        </ul>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <div class="tile-body">
              <form action="{{route('pertemuan.store')}}" method="POST">
             @csrf
                @foreach($tutor as $tutor)
                <div class="form-group">
                <div class="mb-3 row">
                <label for="staticnama_tutor" class="col-sm-2 col-form-label">Nama Tutor &emsp;&emsp;&emsp;&emsp;:</label>
                <div class="col-sm-10">
                  <input type="text" readonly class="form-control-plaintext" id="staticnama_tutor" name="nama_tutor" value="{{$tutor->nama_tutor}}">
                </div>
                </div>
                <div class="form-group">
                  <div class="mb-3 row">
                    <label for="staticmapel" class="col-sm-2 col-form-label">Mata Pelajaran&emsp;&emsp;&emsp;:</label>
                    <div class="col-sm-10">
                      <input type="text" readonly class="form-control-plaintext" id="staticnama_tutor" name="mapel" value="{{$tutor->mapel}}">
                    </div>
                  </div>
                  <div class="form-group">
                <div class="row mb-3">
                <label for="colFormLabelSm" class="col-sm-2 col-form-label">Tingkatan&emsp;&emsp;&emsp;&emsp;&emsp;:</label>
                <div class="col-sm-10">
                <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="selasa" value="SD" name="tingkatan">
                <label class="form-check-label" for="selasa">SD</label>
                </div>
                <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="selasa" value="SMP" name="tingkatan">
                <label class="form-check-label" for="selasa">SMP</label>
                </div>
                <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="selasa" value="SMA" name="tingkatan">
                <label class="form-check-label" for="selasa">SMA</label>
                </div>
                  </div>
                  </div>
                  @endforeach
                <div class="form-group">
                  <label for="nama_siswa">Nama siswa</label>
                  <select class="form-control" id="nama siswa" name="nama_siswa" reqiured>
                    <option value="">--select name--</option>
                    @foreach($belajar as $belajar)
                    <option value="{{$belajar->nama_siswa}}">{{$belajar->nama_siswa}}</option>
                    @endforeach
                  </select>
                </div>
                <div class="form-group">
                      <label for="materi">Materi</label>
                      <input class="form-control" id="materi" type="text" name="materi" reqiured>
                    </div>
                  </div>
                  <button class="btn btn-primary" type="submit"><i class="fa fa-meetup" aria-hidden="true">Selesai</i></button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </main>
    @endsection