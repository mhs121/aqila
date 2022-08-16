@extends('master.app_page')
    @section('content')
    <main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-bell-o"></i>jadwal Mengajar</h1>
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item"><a href="cetjad"><i class="fa fa-print"></i></li></a>
          <li class="breadcrumb-item"><a href="#">Menampilkan Jadwal Mengajar</a></li>
        </ul>
      </div>
        <div class="col-md-12">
          <div class="tile">
            <div class="tile-title-w-btn">
              <h3 class="title">Jadwal Mengajar</h3>
            </div>
            <div class="table-responsive">
			<table class="table align-items-center table-flush">
			<thead class="thead-light bg-danger">
				<tr>
                 <th class="text-center">NO</th>
				 <th class="text-center">Nama Tutor</th>
				 <th class="text-center">Nama Siswa</th>
				 <th class="text-center">Mata Pelajaran</th>
				 <th class="text-center">paket</th>
				 <th class="text-center">Hari</th>
				 <th class="text-center">Jam</th>
				 </tr>
				 </thead>
                 @php
                 $no=1;
                 @endphp
				 <tbody class="list">
                    @foreach($belajar as $belajar)
				 <tr>
					<td class="text-center">{{$no++}}</td>
					<td class="text-center">{{$belajar->nama_tutor}}</td>
					<td class="text-center">{{$belajar->nama_siswa}}</td>
					<td class="text-center">{{$belajar->mapel}}</td>
          <td class="text-center">{{$belajar->nama_paket}}</td>
					<td class="text-center">{{$belajar->hari}}</td>
          <td class="text-center">{{$belajar->waktu}}</td>
						</tr>
                        @endforeach
						</tbody>
						</table>
						</div>
            </div>   
          </div>
        </div>
    </main>
    @endsection