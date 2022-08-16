@extends('master.app_siswa')
    @section('content')
    <section id="features" class="features">
      <div class="container" style="margin-top: 3%;">

        <div class="section-title" data-aos="fade-up">
          <h5 class="text-success fst-italic">Pilihan paket belajar</h5>
          <hr style="color:blue">
        </div>
        <div class="row">
            <div class="col-md-4">
                    <div class="card bg-light"><a href="{{route('paket.index')}}">
                  <div class="card-header text-center">monthly</div>
                  <div class="card-body">
                    <img src="tsiswa/assets/img/details-1.png" width="320" height="150"alt="image">
                    <p class="card-text text-center">paket belajar satu bulan</p>
                  </div></a>
                </div>
                </div>
                <div class="col-md-4">
                <div class="card bg-light"><a href="{{route('pbelajar.index')}}">
                  <div class="card-header text-center">mid</div>
                  <div class="card-body">
                    <img src="tsiswa/assets/img/details-2.png" width="320" height="150"alt="image">
                    <p class="card-text text-center">paket belajar tengah semester</p>
                  </div></a>
                </div>
                </div>
                <div class="col-md-4">
                    <div class="card bg-light"><a href="{{route('pbelajar.create')}}">
                  <div class="card-header text-center">full study</div>
                  <div class="card-body">
                    <img src="tsiswa/assets/img/details-3.png" width="320" height="150"alt="image">
                    <p class="card-text text-center">paket belajar satu semester</p>
                  </div></a>
                </div>
                </div>
            </div>
        </div>
        

      </div>
    </section>
    @endsection