<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bukti Pembayaran</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  </head>
  <body>
  <div class="card">
    <section>
    @if (session('status'))
			<div class="text-center alert alert-success">
				{{session('status') }}
			</div>
		@endif
    </section>
  <div class="card-body mx-4">
    <div class="container">
      <p class="text-center my-5 mx-5" style="font-size: 30px;">Bukti pembayaran</p>
      <div class="row">
        <ul class="list-unstyled">
          <li class="text-black">{{$payment->nama_siswa}}</li>
          <li class="text-muted mt-1"><span class="text-black">Invoice</span> #2098{{$payment->id}}</li>
          <li class="text-black mt-1">{{$payment->updated_at}}</li>
        </ul>
        <hr>
        <div class="col-xl-10">
          <p>harga</p>
        </div>
        <div class="col-xl-2">
          <p class="float-end">Rp.{{$payment->harga}},00
          </p>
        </div>
        <hr>
      </div>
      <div class="row">
        <div class="col-xl-10">
          <p>jumlah pertemuan</p>
        </div>
        <div class="col-xl-2">
          <p class="float-end">{{$payment->jumlah_pertemuan}}
          </p>
        </div>
        <hr>
      </div>
      <div class="row text-black">

        <div class="col-xl-12">
          <p class="float-end fw-bold">Total: Rp.{{$payment->total_bayar}},00
          </p>
        </div>
        <hr style="border: 2px solid black;">
      </div>
      <button class="btn btn-danger"><a href="{{route('payment.index')}}">Kembali</a></button>
      <a href="/bukbay/{{$payment->id}}" class="btn btn-dark" title="cetak bukti bayar"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-printer-fill" viewBox="0 0 16 16">
  <path d="M5 1a2 2 0 0 0-2 2v1h10V3a2 2 0 0 0-2-2H5zm6 8H5a1 1 0 0 0-1 1v3a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1v-3a1 1 0 0 0-1-1z"/>
  <path d="M0 7a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2h-1v-2a2 2 0 0 0-2-2H5a2 2 0 0 0-2 2v2H2a2 2 0 0 1-2-2V7zm2.5 1a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1z"/>
</svg></a>
      <div class="text-center" style="margin-top: 90px;">
        <a><u class="text-info">aqila Cource</u></a>
        <p>Terimakasi Telah Memilih Kami Sebagai Mentor Belajar Anda </p>
      </div>

    </div>
  </div>
</div>
  </body>
</html>