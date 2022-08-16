@extends('master.app_siswa')
 @section('content')
 <main class="id">
 <section class="breadcrumbs">
      <div class="container">
        <div class="d-flex justify-content-between align-items-center">
          <ol>
            <li><a href="#"><i class="ri-database-line"></a></i></li>
            <li>Formula</li>
            <li>Energi potensial</li>
          </ol>
        </div>
      </div>
    </section> 
    <section>
    <?php
           $m = @$_GET['m'];
           $g = @$_GET['g'];
           $h = @$_GET['h'];
           $Ep= @$_GET['Ep'];
    
           if(isset($_GET['bEp']))
           {
               $Ep = $m*$g*$h;
           }
           ?>
        <div class="container">
            <form method="GET">
    <div class="card">
  <h5 class="card-header">Energi potensial</h5>
  <div class="card-body">
    <p>Masukan diketahui</p>
  <div class="row g-3">
  <div class="col-sm">
    <input type="number" class="form-control" placeholder="massa benda (m)" name="m" value="{{$m}}">
  </div>
  <div class="col-sm">
    <input type="number" class="form-control" placeholder="grafitasi (g)" name="g" value="{{$g}}">
  </div>
  <div class="col-sm">
    <input type="text" class="form-control" placeholder="ketinggian (h)" name="h" value="{{$h}}">
  </div>
</div>
 <button  class="btn btn-primary" type="submit" name="bEp">Ep</button>
 <div class="col-sm">
    <input type="number" class="form-control" name="Ep" value="{{$Ep}}">
        </div>
    <p class="card-text">Energi potensial adalah energi yang mempengaruhi benda karena posisi (ketinggian) benda tersebut yang mana kecenderungan tersebut menuju tak terhingga dengan arah dari gaya yang ditimbulkan dari energi potensial tersebut. Satuan SI untuk mengukur usaha dan energi adalah Joule (simbol J). Energi potensial juga bisa dimiliki oleh benda dalam keadaan tertekan seperti panah yang akan dilepaskan dari busurnya.</p>
    <p>Rumus energi potensial grafitasi</p>
    <p>Ep = m.g.h</p>
    <p>keterangan</p>
    <p>Ep : energi potensial (Joule), m : massa benda (kg), g : gravitasi bumi (m/s2), h : ketinggian suatu benda (m)</p>
  </div>
</div>
</form>
    </section>
 @endsection