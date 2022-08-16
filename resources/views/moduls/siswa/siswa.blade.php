@extends('master.app_siswa')

@section('content')
<!-- ======= Hero Section ======= -->
<section id="hero">

<div class="container">
  <div class="row justify-content-between">
    <div class="col-lg-7 pt-5 pt-lg-0 order-2 order-lg-1 d-flex align-items-center">
      <div data-aos="zoom-out">
        <h1>Pilihan Belajar Pintar <span>Aqila Cource</span></h1>
        <h2>Smart Your Choise</h2>
      </div>
    </div>
    <div class="col-lg-4 order-1 order-lg-2 hero-img" data-aos="zoom-out" data-aos-delay="300">
      <img src="tsiswa/assets/img/jumtro.png" class="img-fluid animated" alt="">
    </div>
  </div>
</div>

<svg class="hero-waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 28 " preserveAspectRatio="none">
  <defs>
    <path id="wave-path" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z">
  </defs>
  <g class="wave1">
    <use xlink:href="#wave-path" x="50" y="3" fill="rgba(255,255,255, .1)">
  </g>
  <g class="wave2">
    <use xlink:href="#wave-path" x="50" y="0" fill="rgba(255,255,255, .2)">
  </g>
  <g class="wave3">
    <use xlink:href="#wave-path" x="50" y="9" fill="#fff">
  </g>
</svg>

</section><!-- End Hero -->

<main id="main"> 
<!-- ======= Features Section ======= -->
<section id="features" class="features">
  <div class="container">

    <div class="section-title" data-aos="fade-up">
      <h2>Features</h2>
      <p>Pilihan Menu</p>
    </div>

    <div class="row" data-aos="fade-left">
      <div class="col-lg-3 col-md-4">
        <div class="icon-box" data-aos="zoom-in" data-aos-delay="50">
          <i class="ri-apple-line" style="color: #ffbb2c;"></i>
          <h3><a href="{{route('rating.index')}}">Formula Belajar</a></h3>
        </div>
      </div>
      <div class="col-lg-3 col-md-4 mt-4 mt-md-0">
        <div class="icon-box" data-aos="zoom-in" data-aos-delay="100">
          <i class="ri-file-line" style="color: #5578ff;"></i>
          <h3><a href="materi">Materi Belajar</a></h3>
        </div>
      </div>
      <div class="col-lg-3 col-md-4 mt-4 mt-md-0">
        <div class="icon-box" data-aos="zoom-in" data-aos-delay="150">
          <i class="ri-book-line" style="color: #e80368;"></i>
          <h3><a href="pabel">Paket Belajar</a></h3>
        </div>
      </div>
      <div class="col-lg-3 col-md-4 mt-4 mt-lg-0">
        <div class="icon-box" data-aos="zoom-in" data-aos-delay="200">
          <i class="ri-user-line" style="color: #e361ff;"></i>
          <h3><a href="{{route('pertemuan.create')}}">Tutor</a></h3>
        </div>
      </div>
  </div>
</section><!-- End Features Section -->

<!-- ======= Counts Section ======= -->
<section id="counts" class="counts">
  <div class="container">
  <div class="section-title" data-aos="fade-up">
      <p>Statistic Data</p>
    </div>

    <div class="row" data-aos="fade-up">

      <div class="col-lg-3 col-md-6">
        <div class="count-box">
          <i class="bi bi-emoji-smile"></i>
          <span data-purecounter-start="0" data-purecounter-end="{{$siswa}}" data-purecounter-duration="1" class="purecounter"></span>
          <p>siswa</p>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 mt-5 mt-md-0">
        <div class="count-box">
          <i class="bi bi-people"></i>
          <span data-purecounter-start="0" data-purecounter-end="{{$tutor}}" data-purecounter-duration="1" class="purecounter"></span>
          <p>Tutor Berpengalaman</p>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
        <div class="count-box">
          <i class="bi bi-book"></i>
          <span data-purecounter-start="0" data-purecounter-end="{{$mapel}}" data-purecounter-duration="1" class="purecounter"></span>
          <p>Mata pelajar dari berbagai Tingkat Pendidikan</p>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
        <div class="count-box">
          <i class="bi bi-globe"></i>
          <span data-purecounter-start="0" data-purecounter-end="3" data-purecounter-duration="1" class="purecounter"></span>
          <p>Paket Belajar</p>
        </div>
      </div>

    </div>

  </div>
</section><!-- End Counts Section -->

<!-- ======= Team Section ======= -->
<section id="team" class="team">
  <div class="container">

    <div class="section-title" data-aos="fade-up">
      <h2>Promotion</h2>
      <p>Pilihan Promo</p>
    </div>

    <div class="row" data-aos="fade-left">

      <div class="col-lg-3 col-md-6">
        <div class="member" data-aos="zoom-in" data-aos-delay="100">
          <div class="pic"><img src="siswa/assets/img/team/promo1.jpg" class="img-fluid" alt=""></div>
          <div class="member-info">
            <h4>paket belajar 1</h4>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 mt-5 mt-md-0">
        <div class="member" data-aos="zoom-in" data-aos-delay="100">
          <div class="pic"><img src="siswa/assets/img/team/promo2.jpg" class="img-fluid" alt=""></div>
          <div class="member-info">
            <h4>paket belajar 2</h4>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
        <div class="member" data-aos="zoom-in" data-aos-delay="100">
          <div class="pic"><img src="siswa/assets/img/team/promo3.jpg" class="img-fluid" alt=""></div>
          <div class="member-info">
            <h4>paket belajar 3</h4>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
        <div class="member" data-aos="zoom-in" data-aos-delay="100">
          <div class="pic"><img src="siswa/assets/img/team/promo4.jpg" class="img-fluid" alt=""></div>
          <div class="member-info">
            <h4>paket belajar 4</h4>
          </div>
        </div>
      </div>

    </div>

  </div>
</section><!-- End Team Section -->
</main><!-- End #main -->
@endsection