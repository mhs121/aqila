@extends('master.app_siswa')
    @section('content')
    <section>
    <div class="container">
    <main class="app-content">
      <div class="app-title">
        <div>
            <div class="container-fluid">
              <em>profil aqila cource</em>
          <h1 style="text-color-red">Data Siswa</h1>
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="bi bi-house-fill"></i></li>
          <li class="breadcrumb-item">Forms</li>
          <li class="breadcrumb-item">Lengkapi Data</li>
        </ul>
      </div>
      <div class="card">
  <div class="card-body">
      <div class="row">
        <div class="col">
          <div class="tile">
            <h3 class="tile-title">Data Siswa</h3>
            <div class="tile-body">
                <hr>
              <form action="{{ route('profil.store')}}" method="POST">
                @csrf
                <div class="form-group">
                  <label class="control-label">Nama lengkap</label>
                  <input class="form-control" type="text" id="nama_siswa" placeholder="masukan nama lengkap" name="nama_siswa">
                </div>
                <div class="form-group">
                  <label class="control-label">Email</label>
                  <input class="form-control" type="email" placeholder="{{auth::user()->email}}" value="{{auth::user()->email}}" name="email">
                </div>
                <div class="form-group">
                  <label class="control-label">No Handphone</label>
                  <input class="form-control" type="number" id="phone_siswa" placeholder="+62" name="phone_siswa">
                </div>
                <hr>
                <div class="form-group row">
                  <label class="control-label col-md-3">Gender</label>
                  <div class="col-md-9">
                    <div class="form-check">
                      <label class="form-check-label">
                        <input class="form-check-input" type="radio" name="gender" value="Laki-Laki">laki laki
                      </label>
                    </div>
                    <div class="form-check">
                      <label class="form-check-label">
                        <input class="form-check-input" type="radio" name="gender" value="Perempuan">perempuan
                      </label>
                    </div>
                  </div>
                </div>
                <hr>
                <div class="form-group">
                  <label class="control-label">Alamat</label>
                  <textarea class="form-control" rows="4" id="alamat_ortu" name="alamat" ></textarea>
                </div>
                <div class="form-group">
                  <label class="control-label">sosmed</label>
                  <input class="form-control" type="text" placeholder="ex;@instagram, #facebook, @twitter" name="sosmed" required>
                </div>
                <div class="form-group">
                  <label class="control-label">Sekolah</label>
                  <input class="form-control" type="text" id="sekolah" placeholder="masukan nama lengkap" name="sekolah" required>
                </div>
                  <div class="form-group">
                <div class="row mb-3">
                <label for="colFormLabelSm" class="col-sm-2 col-form-label">Tingkatan</label>
                <div class="col-sm-10">
                <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="SD" value="SD" name="tingkatan">
                <label class="form-check-label" for="SD">SD</label>
                </div>
                <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="SMP" value="SMP" name="tingkatan">
                <label class="form-check-label" for="SMP">SMP</label>
                </div>
                <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="SMA" value="SMA" name="tingkatan">
                <label class="form-check-label" for="SMA">SMA</label>
                </div>
                  </div>
                <div class="form-group">
                  <input style="visibility: hidden;" class="form-control" type="text" id="id" value="{{auth::user()->id}}" name="user_id">
                </div>
                <hr>
                <div class="row">
                  <div class="col">
                          <div class="tile">
                      <h3 class="tile-title">Data Orangtua / Wali</h3>
                      <div class="tile-body">
                          <hr>
                          <div class="form-group">
                            <label class="control-label">Nama</label>
                            <input class="form-control" type="text" id="nama_ortu" placeholder="masukan nama" name="nama_ortu">
                          </div>
                          <div class="form-group">
                            <label class="control-label">Alamat</label>
                            <textarea class="form-control" rows="4" id="alamat_ortu" name="alamat_ortu" ></textarea>
                          </div>
                          <div class="form-group">
                            <label class="control-label">No Handphone</label>
                            <input class="form-control" type="number" id="phone_ortu" placeholder="+62" name="phone_ortu">
                          </div>
                          <div class="form-group">
                            <label class="control-label">pekerjaan</label>
                            <input class="form-control" type="text" id="pekerjaan" placeholder="ex;swasta" name="pekerjaan">
                          </div>
                            </div>
                            </div>
                          <hr>
                <button class="btn btn-primary" type="submit"><i class="bi bi-check-circle">
                </i>Simpan</button>&nbsp;&nbsp;&nbsp;<a class="btn btn-danger" href="#">
                  <i class="bi bi-eraser"></i>Batal</a>
              </form>
            </div>
          </div>
        </div>
        </div>
        </div>
      </div>
    </main>
    </section>
    @endsection