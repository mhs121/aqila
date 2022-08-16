@extends ('master.app_page');
    @section('content')
    <main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-th-list"></i> Data Penerima Sertifikat </h1>
          <p>Menampilkan Data Penerima Sertifikat</p>
        </div>
        <ul class="app-breadcrumb breadcrumb side">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item"><a href="sert"><i class="fa fa-print fa-lg" title="Cetak Data"></i></a></li>
          <li class="breadcrumb-item active"><a href="#">Siswa Penerima Sertifikat</a></li>
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
                      <th class="text-center">Mata Pelajaran</th>
                      <th class="text-center">Tingkatan</th>
                      <th class="text-center">Total Nilai</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                   @php
                   $no=1;
                   @endphp
                    @forelse($nilai as $nilai)
                      @php
                      $total=$nilai->latihan+$nilai->tugas+$nilai->final_test;
                      $lulus= $total/3;
                      @endphp
                      <?php if($lulus >=80){?>
                      <td class="text-center"> {{ $no++ }}</td>
                      <td class="text-center"> {{ $nilai->nama_siswa }} </td>
                      <td class="text-center"> {{ $nilai->mapel}} </td>
                      <td class="text-center"> {{ $nilai->tingkatan }}</td>
                      <td class="text-center"> {{ $nilai->total_nilai.round($lulus,2)}}</td>
                    </tr>
                    <?php } ?>
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