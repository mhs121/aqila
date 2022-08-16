@extends('master.app_siswa')
 @section('content')
 <main id="main">

    <!-- ======= Breadcrumbs Section ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Reward</h2>
          <ol>
            <li><a href="index.html">Home</a></li>
            <li>sertifikat</li>
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
          <tr><td>Daftar siswa penerima Sertifikat</td></tr>
        </table>
      <div class="table-responsive">
			<table class="table align-items-center table-flush">
			<thead class="thead-light" style="background-color:#dd9ea3;">
				<tr>
                    <th class="text-center">No</th>
                      <th class="text-center">Nama siswa</th>
                      <th class="text-center">Mata Pelajaran</th>
                      <th class="text-center">Tingkatan</th>
                      <th class="text-center">Total Nilai</th>
                      <th >Cetak</th>
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
                      <?php if($lulus >=80){?>
                      <tr>
                      <td class="text-center"> {{ $no++ }}</td>
                      <td class="text-center"> {{ $nilai->nama_siswa }} </td>
                      <td class="text-center"> {{ $nilai->mapel}} </td>
                      <td class="text-center"> {{ $nilai->tingkatan }}</td>
                      <td class="text-center"> {{ $lulus }}</td>
                      <td><a href="{{route('mengajar.show',$nilai->id)}}" class="btn btn-primary"><i class="bi bi-printer"></i></a></td>
                    </tr>
                    <?php } ?>
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