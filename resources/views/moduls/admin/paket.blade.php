@extends ('master.app_page');
    @section('content')
    <main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-th-list"></i> Data Paket Belajar </h1>
          <p>Menampilkan Data Paket Belajar</p>
        </div>
        <ul class="app-breadcrumb breadcrumb side">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item"><a href="datapaket"><i class="fa fa-print fa-lg" title="Cetak Data"></i></a></li>
          <li class="breadcrumb-item active"><a href="#">Table data paket </a></li>
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
                      <th class="text-center">Nama paket</th>
                      <th class="text-center">Tingkatan</th>
                      <th class="text-center">Jenis</th>
                      <th class="text-center">Estimasi Belajar</th>
                      <th class="text-center">Harga Paket (1Xpertemuan)</th>
                      <th class="text-center">Banyak Peminat</th>
                    </tr>
                  </thead>
                  <tbody>
                    @php
                    $no=1;
                    @endphp
                    <?php if($paket->where('nama_paket','monthly')->where('tingkatan','SMP')->count() >=1) {?>
                    <tr>
                    <td class="text-center"> {{$no++}}</td>
                    <td class="text-center">monthly </td>
                    <td class="text-center"> SMP </td>
                    <td class="text-center"> Bulanan </td>
                    <td class="text-center"> 1 Bulan </td>
                    <td class="text-center"> Rp.50.000 </td>
                    <td class="text-center"> {{ $paket->where('nama_paket','monthly')->where('tingkatan','SMP')->count()}}</td>
                    </tr>
                    <?php } ?>
                    <?php if($paket->where('nama_paket','Mid')->where('tingkatan','SMP')->count() >=1) {?>
                    <tr>
                    <td class="text-center"> {{$no++}}</td>
                    <td class="text-center"> Mid </td>
                    <td class="text-center"> SMP </td>
                    <td class="text-center"> TriWulan </td>
                    <td class="text-center"> 3 Bulan </td>
                    <td class="text-center"> Rp.40.000 </td>
                    <td class="text-center"> {{ $paket->where('nama_paket','Mid')->where('tingkatan','SMP')->count() }}</td>
                    </tr>
                    <?php } ?>
                    <?php if($paket->where('nama_paket','full study')->where('tingkatan','SMP')->count() >=1) {?>
                    <tr>
                    <td class="text-center"> {{$no++}}</td>
                    <td class="text-center">full study </td>
                    <td class="text-center"> SMP </td>
                    <td class="text-center"> semesteran </td>
                    <td class="text-center"> 6 Bulan </td>
                    <td class="text-center"> Rp.35.000 </td>
                    <td class="text-center"> {{ $paket->where('nama_paket','full study')->where('tingkatan','SMP')->count() }}</td>
                    </tr>
                    <?php } ?>
                    <?php if($paket->where('nama_paket','monthly')->count() >=1) {?>
                    <tr>
                    <td class="text-center"> {{$no++}}</td>
                    <td class="text-center">monthly </td>
                    <td class="text-center"> SMA </td>
                    <td class="text-center"> Bulanan </td>
                    <td class="text-center"> 1 Bulan </td>
                    <td class="text-center"> Rp.50.000 </td>
                    <td class="text-center"> {{ $paket->where('nama_paket','monthly')->where('tingkatan','SMA')->count()}}</td>
                    </tr>
                    <?php } ?>
                    <?php if($paket->where('nama_paket','Mid')->count() >=1) {?>
                    <tr>
                    <td class="text-center"> {{$no++}}</td>
                    <td class="text-center"> Mid </td>
                    <td class="text-center"> SMA </td>
                    <td class="text-center"> TriWulan </td>
                    <td class="text-center"> 3 Bulan </td>
                    <td class="text-center"> Rp.40.000 </td>
                    <td class="text-center"> {{ $paket->where('nama_paket','Mid')->where('tingkatan','SMA')->count() }}</td>
                    </tr>
                    <?php } ?>
                    <?php if($paket->where('nama_paket','full study')->count() >=1) {?>
                    <tr>
                    <td class="text-center"> {{$no++}}</td>
                    <td class="text-center">full study </td>
                    <td class="text-center"> SMA </td>
                    <td class="text-center"> semesteran </td>
                    <td class="text-center"> 6 Bulan </td>
                    <td class="text-center"> Rp.35.000 </td>
                    <td class="text-center"> {{ $paket->where('nama_paket','full study')->where('tingkatan','SMA')->count() }}</td>
                    </tr>
                    <?php } ?>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>
    @endSection