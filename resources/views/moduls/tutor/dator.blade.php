@extends('master.app_tutor')
    @section('content')
    <main class="app-content">
      <div class="app-title bg-warning">
        <div>
          <h1><i class="fa fa-edit"></i> lengkapi data</h1>
          <p>Data Tutor</p>
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item">Forms</li>
          <li class="breadcrumb-item"><a href="#">data tutor</a></li>
        </ul>
      </div>
        <div class="col-md-12">
          <div class="tile bg-light ">
            <div class="row">
              <div class="col-lg-12">
                <form action="{{route('dator.store')}}" method=post enctype="multipart/form-data">
                  @csrf
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nama Lengkap</label>
                    <input class="form-control" id="nama" type="name" placeholder="masukan nama lengkap" name="nama_tutor" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">email</label>
                    <input class="form-control" id="exampleInputEmail1" type="email"  value="{{auth::user()->email}}" name="email">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">No Handphone</label>
                    <input class="form-control" id="handphone" type="number" placeholder="+62" name="phone_tutor" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">sosmed</label>
                    <input class="form-control" id="sosmed" type="text" placeholder="ex;@instagram" name="sosmed" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleSelect1">Pendidikan</label>
                    <select class="form-control" id="pendidikan" name="pendidikan" required>
                      <option vale="">-- Pendidikan --</option>
                      <option value="D3">DIII</option>
                      <option value="S1">SI</option>
                    </select>
                  </div>
                  <div class="form-group">IPK</label>
                    <input class="form-control" id="ipk" type="text"  name="ipk" required>
                  </div>
                  <div class="mb-3">
                  <label for="formFileSm" class="form-label @error('ijazah') is-invalid @enderror">Ijazah</label>
                  <input class="form-control form-control-sm" id="ijazah" type="file" name="ijazah">
                  @error('ijazah')
                      <div class="alert alert-danger">{{ $message }}</div>
                  @enderror
                </div>
                <div>
                  <div class="form-group">
                    <label for="exampleSelect1">Mendaftar Untuk mengajar</label>
                    <select class="form-control" id="mapel" name="mapel" required>
                      <option value="">-- pilih mata pelajaran --</option>
                      @foreach($mapel as $mapel)
                      <option value="{{$mapel->mapel}}">{{$mapel->mapel}}</option>
                      @endforeach
                    </select>
                  </div>
                  <div class="form-group">
                  <label class="control-label">Alamat</label>
                  <textarea class="form-control" rows="4" id="alamat" name="alamat" required></textarea>
                    </div>
                  <div class="form-group">
                  <label class="control-label">Pengalaman</label>
                  <textarea class="form-control" rows="4" id="alamat" name="pengalaman" ></textarea>
                    </div>
                    <div class="form-group">
                    <input style="visibility: hidden;"class="form-control" id="user_id" type="text" name="user_id" value="{{auth::user()->id}}">
                  </div>
                  <div class="tile-footer">
              <button class="btn btn-primary" type="submit">simpan data</button>
            </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>
    @endsection