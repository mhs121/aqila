<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>
<body>
<div class="card">
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
        <hr>
        <div class="row">
        <div class="col-xl-10">
          <p>Status pembayaran</p>
        </div>
        <div class="col-xl-2">
          <p class="float-end text-primary">//Lunas//
          </p>
        </div>
      </div>
        <hr style="border: 2px solid black;">
      </div>
    
      <div class="text-center" style="margin-top: 90px;">
        <a><u class="text-info">aqila Cource</u></a>
        <p>menyatakan sebagai bukti pembayaran yang sah</p>
        <p >Terimakasi Telah Memilih Kami Sebagai Mentor Belajar Anda </p>
      </div>

    </div>
  </div>
</div>
</body>
</html>