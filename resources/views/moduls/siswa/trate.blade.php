@extends('master.app_siswa')
    @section('content')
    <main id="main">

    <!-- ======= Breadcrumbs Section ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Nilai tutor</h2>
          <ol>
            <li><a href="index.html">Home</a></li>
            <li>Rate</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs Section -->

    <section class="Inner Page">
      <div class="container">
        <form action="{{route('rating.store')}}" method="POST">
          @csrf

        <h2>Nama tutor : <em class="text-primary">{{$belajar->nama_tutor}}</em></h2>
        <input type="text" class="form-control" style="visibility:hidden;" id="nama_tutor" value="{{$belajar->nama_tutor}}" name="nama_tutor">
        <div class="row">
          <div class="rating">
            <input type="radio" id="star10" name="rate" value="10 Bintang" /><label for="star10" title="ferfect"></label>
            <input type="radio" id="star9"  name="rate" value="9 Bintang" /><label for="star9" title="ferfect"></label>
            <input type="radio" id="star8"  name="rate" value="8 Bintang" /><label for="star8" title="good"></label>
            <input type="radio" id="star7"  name="rate" value="7 Bintang" /><label for="star7" title="good"></label>
            <input type="radio" id="star6"  name="rate" value="6 Bintang" /><label for="star6" title="enaught"></label>
            <input type="radio" id="star5"  name="rate" value="5 Bintang" /><label for="star5" title="not bad"></label>
            <input type="radio" id="star4"  name="rate" value="4 Bintang" /><label for="star4" title="bad"></label>
            <input type="radio" id="star3"  name="rate" value="3 Bintang" /><label for="star3" title="bad"></label>
            <input type="radio" id="star2"  name="rate" value="2 Bintang" /><label for="star2" title="very bad"></label>
            <input type="radio" id="star1"  name="rate" value="1 Bintang" /><label for="star1" title="very bad"></label>
          </div>
        </div>
         <div class="row">
        <div class="col-auto">
          <input type="text" class="form-control" style="visibility:hidden;" id="nama_tutor" value="{{$belajar->nama_siswa}}" name="nama_siswa">
      </div>
          <div class="col-auto">
          <input type="text" class="form-control" style="visibility:hidden;" id="mapel" value="{{$belajar->mapel}}" name="mapel">
        </div>
       </div>
<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">Masukan & Komentar</label>
  <textarea class="form-control" id="exampleFormControlTextarea1" rows="4" name="komentar"></textarea>
</div>
<button class="btn btn-dark">beri nilai</button>
      </div>
</from>
    </section>

  </main>
    @endsection