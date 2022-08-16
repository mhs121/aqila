@extends ('master.app_page');
    @section('content')
    <main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-th-list"></i> Data Orangtua / Wali siswa </h1>
          <p>Menampilkan Data Orangtua siswa</p>
        </div>
        <ul class="app-breadcrumb breadcrumb side">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item"><a href="cetakortu"><i class="fa fa-print fa-lg" title="Cetak Data"></i></a></li>
          <li class="breadcrumb-item active"><a href="#">Table data orangtua/wali</a></li>
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
                      <th class="text-center">Nama orangtua</th>
                      <th class="text-center">Alamat</th>
                      <th class="text-center">No handphone</th>
                      <th class="text-center">pekerjaan</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                   @php
                   $no=1;
                   @endphp
                    @forelse ($siswa as $siswa)
                      <td class="text-center"> {{ $no++ }}</td>
                      <td class="text-center"> {{ $siswa->nama_siswa }} </td>
                      <td class="text-center"> {{ $siswa->nama_ortu }} </td>
                      <td class="text-center"> {{ $siswa->alamat_ortu}} </td>
                      <td class="text-center"> {{ $siswa->phone_siswa }}</td>
                      <td class="text-center"> {{ $siswa->pekerjaan }} </td>
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