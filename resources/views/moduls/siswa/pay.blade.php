@extends('master.app_siswa');
    @section('content')
    <main id="main">
        <section">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2></h2>
      </div>
    </section><!-- End Breadcrumbs Section -->

    <section >
        <div class="container">
          @foreach($payment as $payment)
          <form action="{{route('profil.update', $payment->id)}}" method="POST" enctype="multipart/form-data">
          @method('PUT')
            @csrf
    <div class="card">
  <h5 class="card-header">Pembayaran</h5>
  <div class="card-body">
      <div class="mb-3 row">
        <label for="staticnama_siswa" class="col-sm-2 col-form-label">Nama Siswa</label>
        <div class="col-sm-10">
          <input type="text" readonly class="form-control-plaintext" id="nama_siswa" value="{{$payment->nama_siswa}}" name="nama_siswa">
        </div>
      </div>
      <div class="mb-3 row">
        <label for="staticpaket" class="col-sm-2 col-form-label">Paket Yang diambil</label>
        <div class="col-sm-10">
          <input type="text" readonly class="form-control-plaintext" id="nama_paket" value="{{$payment->nama_paket}}" name="nama_paket">
        </div>
      </div>
      <div class="mb-3 row">
        <label for="staticmapel" class="col-sm-2 col-form-label">Mata Pelajaran</label>
        <div class="col-sm-10">
        <input type="text" readonly class="form-control-plaintext" id="mapel" value="{{$payment->mapel}}" name="mapel">
      </div>
      </div>
      <div class="mb-3 row">
       <label for="staticharga" class="col-sm-2 col-form-label">Biaya 1x pertemuan</label>
        <div class="col-sm-10">
        <input type="text" readonly class="form-control-plaintext" id="harga" value="{{$payment->harga}}" name="harga">
      </div>
      </div>
      <div class="mb-3 row">
        <label for="staticjumlah" class="col-sm-2 col-form-label">jumlah pertemuan</label>
        <div class="col-sm-10">
        <input type="text" readonly class="form-control-plaintext" id="jumlah" value="{{$payment->jumlah_pertemuan}}" name="jumlah_pertemuan">
      </div>
    </div>
    <hr>
    <div class="mb-3 row">
      <label for="statictotal" class="col-sm-2 col-form-label">Total yang di bayar</label>
      <div class="col-sm-10">
        <input type="text" readonly class="form-control-plaintext"  value="{{$payment->harga*$payment->jumlah_pertemuan}}" name="total_bayar">
      </div>
    </div>
    <div class="mb-3">
  <label for="formFile" class="form-label">Upload Bukti Pembayaran</label>
  <input class="form-control @error('bukti') is-invalid @enderror" type="file" id="bukti" name="bukti">
</div>
@error('bukti')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
    <input type="text" style="visibility:hidden;" class="form-control-plaintext" id="jumlah" value="Lunas" name="status">
                    @endforeach
    <button class="btn btn-primary" type="submit">Lanjut Pembayaran</button>
    </form>
  </div>
</div>
</div>
    </section>

  </main>
    @endsection