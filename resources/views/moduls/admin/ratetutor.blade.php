@extends ('master.app_page');
    @section('content')
    <main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-th-list"></i>Penilaian tutor</h1>
          <p>Menampilkan Nilai Tutor</p>
        </div>
        <ul class="app-breadcrumb breadcrumb side">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item"><a href="cetakrate"><i class="fa fa-print fa-lg" title="Cetak Data"></i></a></li>
          <li class="breadcrumb-item active"><a href="#">Table Rating Tutor</a></li>
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
                      <th class="text-center">Nama siswa</th>
                      <th class="text-center">Nama Tutor</th>
                      <th class="text-center">Mata Pelajaran</th>
                      <th class="text-center">Nilai</th>
                      <th class="text-center">Komentar</th>
                    </tr>
                  </thead>
                  <tbody>
                    @php
                    $no=1;
                    @endphp
                     @forelse ($rate as $rate)
                    <tr>
                      <td class="text-center"> {{ $no++ }}</td>
                      <td class="text-center"> {{ $rate->nama_siswa }} </td>
                      <td class="text-center"> {{ $rate->nama_tutor }} </td>
                      <td class="text-center"> {{ $rate->mapel}} </td>
                      <td class="text-center"> {{ $rate->rate }}</td>
                      <td class="text-center"> {{ $rate->komentar }} </td>
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