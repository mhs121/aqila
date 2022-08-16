@extends('master.app_siswa')
 @section('content')
 <main class="id">
 <section class="breadcrumbs">
      <div class="container">
        <div class="d-flex justify-content-between align-items-center">
          <ol>
            <li><a href="#"><i class="ri-database-line"></a></i></li>
            <li>Home</li>
            <li>Paket Belajar</li>
          </ol>
        </div>
      </div>
    </section>
    <section>
        <div class="container">
        <form action="{{route('paket.store')}}" method="post">
            @csrf
        <div class="card bg-success">
            <div class="card-header">
                <h5 class="text-white">Paket Belajar</h5>
            </div>
            <div class="card-body">
                <div class="row">
                     @foreach($siswa as $siswa)
                    <div class="col-sm-3">
                <h5 class="card-title">Nama Paket 
                    <input type="text" id="staticnama_paket" readonly class="form-control-plaintext" name="nama_paket" value="full study">
                </input></h5>
                </div>
                    <div class="col-sm-3">
                <h5 class="card-title">Nama siswa 
                    <input type="text" id="staticnama_siswa" readonly class="form-control-plaintext" name="nama_siswa" value="{{$siswa->nama_siswa}}">
                </input></h5>
                </div>
                <div class="col-sm-3">
                <h5 class="card-title">Jengjang
                    <input type="text" id="statictingkatan" readonly class="form-control-plaintext" name="tingkatan" value="{{$siswa->tingkatan}}">
                </input></h5>
                </div>
                @endforeach
                <div class="col-sm-3">
                <input type="text" id="staticnama_estimasi" style="visibility:hidden;" name="estimasi" value="6 Bulan">
                </input>
                </div>
                <div class="col-sm-3">
                <input type="text" id="staticjumlah" style="visibility:hidden;" name="jumlah_pertemuan" value="24">
                </input>
                </div>
                <div class="col-sm-3">
                <input type="text" id="staticharga" style="visibility:hidden;" name="harga" value="35000">
                </input>
                </div>
                <div class="col-sm-3">
                <input type="text" id="staticbilling" style="visibility:hidden;" name="status" value="billing">
                </input>
                </div>
                <div class="col-sm-3">
                <input type="text" id="staticnama_tutor" style="visibility:hidden;" name="nama_tutor" value="menunggu tutor mengkonfirmasi">
                </input>
                </div>
            </div>
            </div>
                </div>
                <div class="form-group">
                  <input style="visibility: hidden;" class="form-control" type="text" id="id" value="{{auth::user()->id}}" name="user_id">
                </div>
            <div class="card" style="margin-top : 2%">
            
                <div class="card-header">
                    Pilih Mata Pelajaran
                </div>
                <div class="card-body">
                    <div class="form-group">
                <div class="row mb-3">
                <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Mata Pelajaran</label>
                <div class="col-sm-10">
                <select class="form-select" aria-label="Default select example" name="mapel">
                <option value="">--Pilih Mata Pelajaran--</option>
                @foreach($mapel as $mapel)
                <option value="{{$mapel->mapel}}">{{$mapel->mapel}}</option>
                @endforeach
                </select>
                </div>
            </div>
                </div>
                    <div class="form-group">
                <div class="row mb-3">
                <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Pilih Hari</label>
                <div class="col-sm-10">
                <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="senin" value="Senin" name="hari">
                <label class="form-check-label" for="senin">senin</label>
                </div>
                <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="selasa" value="Selasa" name="hari">
                <label class="form-check-label" for="selasa">selasa</label>
                </div>
                <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="rabu" value="Rabu" name="hari">
                <label class="form-check-label" for="rabu">Rabu</label>
                </div>
                <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="kamis" value="Kamis" name="hari">
                <label class="form-check-label" for="kamis">Kamis</label>
                </div>
                <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="jum'at" value="Jum'at" name="hari">
                <label class="form-check-label" for="jum'at">Jum'at</label>
                </div>
                <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="sabtu" value="Sabtu" name="hari">
                <label class="form-check-label" for="sabtu">Sabtu</label>
                </div>
                </div>
                <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">waktu Belajar</label>
                <div class="col-sm-10">
                <input type="time" class="form-control" id="waktu"  name="waktu">
                </div>
                </div>
                </div>
                <hr>
                <button type="submit" class="btn btn-outline-success">mulai belajar</button>
            </div>
            </form>
        </div>
    </section>
 </main>
 @endsection