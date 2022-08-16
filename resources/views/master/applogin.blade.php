<!DOCTYPE html>
<html>
  @include('master.lcss')
  <body>
    <section class="material-half-bg">
      <div class="cover"></div>
    </section>
    @yield('content')
   
    @include('master.ljs')
  </body>
</html>