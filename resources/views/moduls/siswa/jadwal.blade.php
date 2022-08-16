@extends('master.app_siswa')
 @section('content')
 <main id="main">

    <!-- ======= Breadcrumbs Section ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Jadwal Belajar</h2>
          <ol>
            <li><a href="index.html">Home</a></li>
            <li><a href="/jabel"  title="Cetak Jadwal"><i class="bi bi-printer-fill"></i></a></li>
            <li>Jadwal</li>
          </ol>
        </div>
       
      </div>
    </section><!-- End Breadcrumbs Section -->

    <section class="inner-page">
      <div class="container">
        <table style="width:25%">
        @foreach($siswa as $siswa)
          <tr>
            <td>Nama Siswa</td><td>:</td><td>{{$siswa->nama_siswa}}</td>
          </tr>
          <tr>
          <td>Tingkatan</td><td>:</td><td>{{$siswa->tingkatan}}</td>
          </tr>
          @endforeach
          <tr><td>_</td></tr>
        </table>
      <div class="table-responsive">
			<table class="table align-items-center table-flush">
			<thead class="thead-light bg-danger">
				<tr>
         <th class="text-center">NO</th>
				 <th class="text-center">Tutor</th>
				 <th class="text-center">Mata Pelajaran</th>
				 <th class="text-center">Hari</th>
				 <th class="text-center">Jam</th>
				 </tr>
				 </thead>
                 @php
                 $no=1;
                 @endphp
                 @foreach($belajar as $belajar)
				 <tbody class="list">
				 <tr>
					<td class="text-center">{{$no++}}</td>
					<td class="text-center">{{$belajar->nama_tutor}}</td>
					<td class="text-center">{{$belajar->mapel}}</td>
					<td class="text-center">{{$belajar->hari}}</td>
					<td class="text-center">{{$belajar->waktu}}</td>	
						</tr>
						</tbody>
                        @endforeach
						</table>
						</div>
      </div>    
    </section>

  </main>
 @endsection