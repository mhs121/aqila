<header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <div class="logo">
        <h1><img src="{{asset('tsiswa/assets/img/avartar.jpg')}}" alt="image" class="rounded-circle" ><a href="index.html"><span> {{auth::user()->name}} </span></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="siswa">Home</a></li>
          <li><a class="nav-link scrollto" href="{{route('paket.create')}}">Jadwal</a></li>
          <li><a class="nav-link scrollto" href="{{route('jator.create')}}">Nilai</a></li>
          <li><a class="nav-link scrollto" href="{{route('mengajar.create')}}">Sertifikat</a></li>
          <li><a class="nav-link scrollto" href="{{route('payment.index')}}">Payment</a></li>
          <li><a class="nav-link scrollto" href="{{route('profil.index')}}">profil</a></li>
         
      </nav><!-- .navbar -->
    </div>
  </header>