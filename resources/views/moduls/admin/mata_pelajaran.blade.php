@extends ('master.app_page');
    @section('content')
    <main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-th-list"></i> Mata Pelajaran </h1>
          <p>Menampilkan Mata Pelajaran</p>
        </div>
        <ul class="app-breadcrumb breadcrumb side">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item"><a href="cetakmp"><i class="fa fa-print fa-lg" title="Cetak Data"></i></a></li>
          <li class="breadcrumb-item active"><a href="#">Table Mata Pelajaran</a></li>
        </ul>
      </div>
      <div class="row">
        <div class="tile col-12 mb-4">
            <div class="page-header">
              <div class="row">
                <div class="col-lg-12">
                  <h2 class="mb-3 line-head" id="buttons">Mata Pelajaran
                  <a class="btn btn-md btn-success pull-right" href="{{route('mapel.create')}}"><i class="fa fa-plus fa-lg"> Tambah Data</i></a>
                  </h2>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="table-responsive">
                <table class="table table-hover table-bordered" id="sampleTable">
                  <thead>
                    <tr>
                      <th class="text-center">No</th>
                      <th class="text-center">Kode</th>
                      <th class="text-center">Mata Pelajaran</th>
                      <th class="text-center">Tingkatan</th>
                      <th class="text-center">action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                   @php
                   $no=1;
                   @endphp
                    @forelse($mapel as $mapel)
                      <td class="text-center"> {{ $no++ }}</td>
                      <td class="text-center"> {{ $mapel->kode_mapel }} </td>
                      <td class="text-center"> {{ $mapel->mapel }} </td>
                      <td class="text-center"> {{ $mapel->tingkatan }} </td>
                      <td class="text-center"><a class="btn btn-md btn-primary" href="{{route('mapel.edit', $mapel->id)}}"><i class="fa fa-edit"></i></a>|
                       <form action="{{route('mapel.destroy', $mapel->id)}}" method="POST" class="d-inline">
                        @method('delete')
                        @csrf
                        <button type="submit" class="btn btn-md btn-danger"><i class="fa fa-trash"></i></button>
                       </form></td>
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