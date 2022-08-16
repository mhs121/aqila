<!DOCTYPE html>
<html lang="en">

@include('master.siswa_css')

<body>

  @include('master.siswa_header')

  @yield('content')

  @include('master.siswa_footer')

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  <div id="preloader">t</div>

  @include('master.siswa_js')

</body>

</html>