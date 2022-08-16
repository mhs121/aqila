<!DOCTYPE html>
<html>
  @include('master.lcss')
  <body>
    <section class="material-half-bg">
      <div class="cover"></div>
    </section>
    <body class="app sidebar-mini">
    <!-- Navbar-->
    @include('master.lheader')
    @include('master.lsidebar')
    @yield('content')
   
    @include('master.ljs')
  </body>
</html>