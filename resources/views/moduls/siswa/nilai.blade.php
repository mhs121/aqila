@extends('master.app_siswa')
 @section('content')
 <main id="main">

    <!-- ======= Breadcrumbs Section ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Lihat Nilai</h2>
          <ol>
            <li><a href="index.html">Home</a></li>
            <li>Nilai</li>
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
			<thead class="thead-light bg-success">
				<tr>
                    <th class="text-center">No</th>
                      <th class="text-center">Nama siswa</th>
                      <th class="text-center">Nama Tutor</th>
                      <th class="text-center">Mata Pelajaran</th>
                      <th class="text-center">Tingkatan</th>
                      <th class="text-center">Latihan</th>
                      <th class="text-center">Tugas</th>
                      <th class="text-center">Final Test</th>
                      <th class="text-center">Total Nilai</th>
				 </tr>
				 </thead>
                 @php
                   $no=1;
                   @endphp
                    @forelse($nilai as $nilai)
                      @php
                      $total=$nilai->latihan+$nilai->tugas+$nilai->final_test;
                      $lulus= $total/3;
                      @endphp
                      <tr>
                      <td class="text-center"> {{ $no++ }}</td>
                      <td class="text-center"> {{ $nilai->nama_siswa }} </td>
                      <td class="text-center"> {{ $nilai->nama_tutor }} </td>
                      <td class="text-center"> {{ $nilai->mapel}} </td>
                      <td class="text-center"> {{ $nilai->tingkatan }}</td>
                      <td class="text-center"> {{ $nilai->latihan }} </td>
                      <td class="text-center"> {{ $nilai->tugas }} </td>
                      <td class="text-center"> {{ $nilai->final_test }} </td>
                      <td class="text-center"> {{ $nilai->total_nilai.round($lulus,2) }}</td>
                    </tr>
                    @empty
                    <tr>
                        <td></td>
                        <td></td>
                        <td colspan="3" class="text-center text-danger">Tidak Ada nilai untuk di tampilkan Anda Belum menyelesaikan bimbel</td>
                        <td></td>
                        <td></td>
                    </tr>
                    @endforelse
                  </tbody>
						</table>
						</div>
      </div>    
    </section>

  </main>
 @endsection