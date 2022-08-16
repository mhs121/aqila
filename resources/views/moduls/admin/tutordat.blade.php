@extends ('master.app_page');
    @section('content')
    <main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-th-list"></i> Data Tutor </h1>
          <p>Menampilkan Data Tutor</p>
        </div>
        <ul class="app-breadcrumb breadcrumb side">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item"><a href="cetaktutor"><i class="fa fa-print fa-lg" title="Cetak Data"></i></a></li>
          <li class="breadcrumb-item active"><a href="#">Table data tutor</a></li>
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
                      <th class="text-center">Nama Tutor</th>
                      <th class="text-center">Alamat</th>
                      <th class="text-center">e-mail</th>
                      <th class="text-center">No Handphone</th>
                      <th class="text-center">sosmed</th>
                      <th class="text-center">Pendidikan</th>
                      <th class="text-center">Pengalaman</th>
                      <th class="text-center">Mapel</th>
                      <th class="text-center">Ijazah</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                   @php
                   $no=1;
                   @endphp
                    @forelse($tutor as $tutor)
                      <td class="text-center"> {{ $no++ }}</td>
                      <td class="text-center"> {{ $tutor->nama_tutor }} </td>
                      <td class="text-center"> {{ $tutor->alamat }} </td>
                      <td class="text-center"> {{ $tutor->email}}</td>
                      <td class="text-center"> {{ $tutor->phone_tutor}} </td>
                      <td class="text-center"> {{ $tutor->sosmed }} </td>
                      <td class="text-center"> {{ $tutor->pendidikan}} </td>
                      <td class="text-center"> {{ $tutor->pengalaman}}</td>
                      <td class="text-center"> {{$tutor->mapel}}</td>
                      <td class="text-center"> <a href="{{asset('storage/'.$tutor->ijazah)}}" class="btn btn-success">Lihat</a></td>
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