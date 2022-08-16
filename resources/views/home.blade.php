<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title> Aqila Cource</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="tsiswa/assets/img/favicon.png" rel="icon">
  <link href="tsiswa/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="tsiswa/assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="tsiswa/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="tsiswa/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="tsiswa/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="tsiswa/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="tsiswa/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="tsiswa/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

 
  <link href="tsiswa/assets/css/style.css" rel="stylesheet">

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center header-transparent">
    <div class="container d-flex align-items-center justify-content-between">

      <div class="logo">
        <h1><a href="#"><span>Home</span></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Dashboard</a></li>
          <li><a class="nav-link scrollto" href="#about">Tentang</a></li>
          <li><a class="nav-link scrollto" href="#statistik">Statistic</a></li>
          <li><a class="nav-link scrollto" href="{{ route('login') }}">Login</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero">

    <div class="container">
    <section id="testimonials" class="testimonials">
      <div class="container">

        <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-item">
                <h3>Features</h3>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Aqila Cource Aplikasi menyediakan berbagai fitur fitur yang dapat mempermudah siswa dalam mengerjakan tugas sekolah
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <h3>Waktu belajar</h3>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  waktu belajar flexible siswa dapat memilih sendiri hari dan jam belajar yang diingikan
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <h3>Tutor</h3>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  banyak tutor berpengalaman yang akan menyampai mata pelajaran dengan cara yang mudah di mengerti oleh siswa 
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <h3>Mata Pelajaran</h3>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Tersedia banyak pilihan mata pelajaran dari tingkatan sekolah dasar hingga sekolah menengah atas
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section>
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
    <section id="statistik" class="features">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Data</h2>
          <p>Statistik aplikasi</p>
        </div>

    <section id="counts" class="counts">
      <div class="container">

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

    <!-- ======= Details Section ======= -->
    <section id="details" class="details">
      <div class="container">
      <div id="about"class="tentang">
        <div class="row content">
          <div class="col-md-4" data-aos="fade-right">
            <img src="tsiswa/assets/img/details-1.png" class="img-fluid" alt="">
          </div>
          <div class="col-md-8 pt-4" data-aos="fade-up">
            <h3>Visi</h3>
            <p class="fst-italic">
            Menjadi lembaga pendamping homeschooling terbaik yang membentuk peserta didik menjadi pribadi yang mandiri, berkarakter serta mampu mengembangkan potensi akademis dan non akademis secara optimal.
            </p>
          </div>
        </div>

        <div class="row content">
          <div class="col-md-4 order-1 order-md-2" data-aos="fade-left">
            <img src="tsiswa/assets/img/details-2.png" class="img-fluid" alt="">
          </div>
          <div class="col-md-8 pt-5 order-2 order-md-1" data-aos="fade-up">
            <h3>Misi</h3>
            <p class="fst-italic">
            Menjadi pelaku homeschooling yang berkualitas, bertaraf nasional dan internasional.
            Memberikan alternatif sistem pendidikan di Indonesia yang berkualitas nasional maupun internasional.
            Menyelenggarakan program pembelajaran yang mengembangkan potensi akademis dan non akademis bagi peserta didik berbasis minat dan bakat.
            Menjadi mitra bagi masyarakat dan pemerintah dalam peningkatan kualitas pendidikan bangsa secara nasional.
            Menjadi solusi pendidikan alternative bagi peserta didik yang memiliki kebutuhan khusus.
            </p>
          </div>
          </div>
          <div>
          <div class="row content">
          <div class="col-md-6" data-aos="fade-left">
            <h3>Jadwal Belajar belajar</h3>
            <p class="fst-italic">
            siswa menentukan sendiri jadwal belajar yang diingkan berdasarkan waktu belajar yang di sediakan
            </p>
            <ul>
              <p class="text-primary">Tingkatan Taman Kanak kanak</p>
              <li><i class="bi bi-check"></i> senin s/d sabtu | 13.00 s/d 20.00 </li>
          </ul>
            <ul>
              <p class="text-primary">Tingkatan Sekolah Dasar</p>
              <li><i class="bi bi-check"></i> senin s/d sabtu | 13.00 s/d 20.00 </li>
          </ul>
          <ul>
            <p class="text-primary">Tingkatan Sekolah Menengah Pertama</p>
            <li><i class="bi bi-check"></i> senin s/d jum'at | 13.00 s/d 20.00</li>
            <li><i class="bi bi-check"></i> sabtu | 09.00 s/d 20.00</li>
          </ul>
          <ul>
              <p class="text-primary">Tingkatan Sekolah Menengah Atas</p>
              <li><i class="bi bi-check"></i> senin s/d jum'at | 13.00 s/d 20.00</li>
              <li><i class="bi bi-check"></i> sabtu | 09.00 s/d 20.00</li>
            </ul>
          </div>
          <div class="col-md-6" data-aos="fade-left">
            <h3>Kriteria</h3>
            <h5 class="fst-italic text-success">
            Tutor
            </h5>
            <ul>
              <li><i class="bi bi-check"></i>Mahasiswa aktif semester 5 ke atas Jurusan FKIP</li>
              <li><i class="bi bi-check"></i>Fresh Guard</li>
              <li><i class="bi bi-check"></i>Tutor Experience</li>
            </ul>
            <h5 class="fst-italic text-success">
            Siswa
           </h5>
            <ul>
              <li><i class="bi bi-check"></i>Taman kanak kanak</li>
              <li><i class="bi bi-check"></i>Sekolah Dasar</li>
              <li><i class="bi bi-check"></i>Sekolah Menengah pertama</li>
              <li><i class="bi bi-check"></i>Sekolah Menengah Atas</li>
            </ul>
          </div>
        </div>
        </div>
      </div>
    </section><!-- End Details Section -->
    <section id="pricing" class="pricing">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Pricing</h2>
          <p>Paket Belajar</p>
        </div>

        <div class="row" data-aos="fade-left">

          <div class="col-lg-4 col-md-6">
            <div class="box" data-aos="zoom-in" data-aos-delay="100">
              <h3>Monthly</h3>
              <h4><sup>Rp</sup>50.000<span> / Pertemuan</span></h4>
              <ul>
                <li>TK, SD, SMP, SMA</li>
                <li>Paket belajar 1 bulan</li>
                <li>Sertifikat jika memenuhi syarat</li>
              </ul>
            </div>
          </div>
          
          <div class="col-lg-4 col-md-6 mt-4 mt-lg-0">
            <div class="box" data-aos="zoom-in" data-aos-delay="200">
              <h3>Mid</h3>
              <h4><sup>Rp</sup>40.000<span> / Pertemuan</span></h4>
              <ul>
              <li>TK, SD, SMP, SMA</li>
                <li>Paket belajar 3 bulan</li>
                <li>Sertifikat jika memenuhi syarat</li>
              </ul>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mt-4 mt-lg-0">
            <div class="box" data-aos="zoom-in" data-aos-delay="300">
              <h3>Full study</h3>
              <h4><sup>Rp</sup>35.000<span> / Pertemuan</span></h4>
              <ul>
              <li>TK, SD, SMP, SMA</li>
                <li>Paket belajar 6 bulan</li>
                <li>Sertifikat jika memenuhi syarat</li>
              </ul>
            </div>
          </div>
        </div>

      </div>
    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

         

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Aqila Cource</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/bootslander-free-bootstrap-landing-page-template/ -->
        Designed by <a href="https://bootstrapmade.com/">Aqila Cource </a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="tsiswa/assets/vendor/purecounter/purecounter.js"></script>
  <script src="tsiswa/assets/vendor/aos/aos.js"></script>
  <script src="tsiswa/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="tsiswa/assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="tsiswa/assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="tsiswa/assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="tsiswa/assets/js/main.js"></script>

</body>

</html>