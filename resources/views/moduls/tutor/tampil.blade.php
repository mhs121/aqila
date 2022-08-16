@extends('master.app_tutor')
    @section('content')
    <main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-bell-o"></i> Menampilkan Permintaan</h1>
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item"><a href="#">Menampilkan Data Permintaan</a></li>
        </ul>
      </div>
        <div class="col-md-12">
          <div class="tile">
            <div class="tile-title-w-btn">
              <h3 class="title">Tampil Data</h3>
            </div>
            <div class="table-responsive">
			<table class="table align-items-center table-flush">
			<thead class="thead-light bg-danger">
				<tr>
                 <th class="text-center">NO</th>
				 <th class="text-center">Nama Siswa</th>
				 <th class="text-center">nama paket</th>
         <th>Action</th>
				 </tr>
				 </thead>
                 @php
                 $no=1;
                 @endphp
                 @foreach($belajar as $belajar)
				 <tbody class="list">
				 <tr>
					<td class="text-center">{{$no++}}</td>
					<td class="text-center">{{$belajar->nama_siswa}}</td>
					<td class="text-center">{{$belajar->nama_paket}}</td>
          <td><button class="btn btn-dark"><a href="{{route('paket.edit',$belajar->id)}}"><i class="fa fa-graduation-cap" aria-hidden="true" title="Jadikan Siswa"></i></a></button></td>
        </tr>
						</tbody>
                        @endforeach
						</table>
						</div>
            </div>   
          </div>
        </div>
    </main>
    @endsection