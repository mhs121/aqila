@extends('master.app_tutor')
    @section('content')
    <main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-bell-o"></i> Menampilkan Permintaan</h1>
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item"><a href="#">Menampilkan Data Permintaan</a></li>
        </ul>
      </div>
        <div class="col-md-12">
          <div class="tile">
            <div class="tile-title-w-btn">
              <h3 class="title">Tampil Data</h3>
            </div>
            <hr>
            <div class="body">
            @foreach($belajar as $belajar)
              <form action="{{route('paket.update', $belajar->id)}}" method="POST">
                @method('PUT')
                @csrf
                <div class="form-group">
                  <table style="width:50%">
                  
                    <tr>
                      <td>Nama Siswa</td>
                      <td> : </td>
                      <td><input type="text" readonly class="form-control-plaintext" id="nama_siswa" value="{{$belajar->nama_siswa}}" name="nama_siswa"></td>
                    </tr>
                    <tr>
                      <td>Mata Pelajaran</td>
                      <td> : </td>
                      <td><input type="text" readonly class="form-control-plaintext" id="mapel" value="{{$belajar->mapel}}" name="mapel"></td>
                    </tr>
                    <tr>
                      <td>Hari</td>
                      <td> : </td>
                      <td><input type="text" readonly class="form-control-plaintext" id="hari" value="{{$belajar->hari}}" name="hari"></td>
                    </tr>
                    <tr>
                      <td>Jam Belajar</td>
                      <td> : </td>
                      <td><input type="text" readonly class="form-control-plaintext" id="jam" value="{{$belajar->waktu}}" name="jam"></td>
                    </tr>
                  </table>
                  @endforeach
                  @foreach($tutor as $tutor)
                  <input input style="visibility: hidden;" class="form-control" type="text" id="tutor"  value="{{$tutor->nama_tutor}}"name="nama_tutor">
                  @endforeach
                  <input input style="visibility: hidden;" class="form-control" type="text" id="tutor"  value="{{auth::user()->name}}"name="tutor">
              <button  type="submit" class="btn btn-warning">Konfirmasi untuk mengajar</button>
                </div>
              </form>
            </div>   
          </div>
        </div>
    </main>
    @endsection