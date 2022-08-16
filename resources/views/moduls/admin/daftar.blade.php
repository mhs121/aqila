@extends ('master.app_page');
    @section('content')
    <main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-th-list"></i> Data Pendaftaran </h1>
          <p>Menampilkan Data Pendaftaran Account</p>
        </div>
        <ul class="app-breadcrumb breadcrumb side">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item"><a href="daftaraccount"><i class="fa fa-print fa-lg" title="Cetak Data"></i></a></li>
          <li class="breadcrumb-item active"><a href="#">Table Pendaftaran</a></li>
        </ul>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <div class="tile-body">
              <div class="table-responsive">
                <table class="table table-hover table-bordered" id="sampleTable">
                  <thead>
                    <tr>
                      <th class="text-center">No</th>
                      <th class="text-center">Nama</th>
                      <th class="text-center">e-mail</th>
                      <th class="text-center">Mendaftar Sebagai</th>
                      <th class="text-center">waktu daftar</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                   @php
                   $no=1;
                   @endphp
                    @forelse ($user as $user)
                      <td class="text-center"> {{ $no++ }} </td>
                      <td> {{ $user->name }} </td>
                      <td> {{ $user->email }} </td>
                      <td class="text-center"> {{ $user->sebagai}} </td>
                      <td class="text-center"> {{ $user->created_at}} </td>
                       </tr>
                    @empty
                    <tr>
                        <td colspan="3" class="text-center text-danger">Maaf Tidak Ada Data yang di tampilkan</td>
                    </tr>
                    @endforelse
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>
    @endSection