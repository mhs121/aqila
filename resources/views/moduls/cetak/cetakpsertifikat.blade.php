<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<table style="width:70%">
            <tr>
            <td><img class="card-img-top" src="{{asset('adsis/img/logo.jpg')}}" alt="Card image" style="max-width: 10rem;"></td>
            <td><h1 style="text-align:center;">Aqila Cource</h1>
            <p style="text-align:center;">Pintu Air, JL.Kenanga Kelurahan IndraSari Martapura</p>
    </td>
            </tr>
    </table>
    <hr>
    <div class="container">
      Tanggal Cetak : <?php echo date('d-m-Y'); ?>
    </div>
    <div class="container">
        <h3 style="text-align:center;">Laporan Siswa Penerima Sertifikat</h3>
    </div>
               <div class="table-responsive">
                <table class="table" style="width:100%; border-collapse: collapse;" border="1px";>
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
                      @php
                      $no=1;
                      @endphp
                      @foreach($nilai as $nilai)
                         @php
                         $total=$nilai->latihan+$nilai->tugas+$nilai->final_test;
                         $lulus= $total/3;
                         @endphp
                  <tr>
                      <?php if($lulus >=80){?>
                      <td class="text-center"> {{ $no++ }}</td>
                      <td class="text-center"> {{ $nilai->nama_siswa }} </td>
                      <td class="text-center"> {{ $nilai->mapel}} </td>
                      <td class="text-center"> {{ $nilai->tingkatan }}</td>
                      <td class="text-center"> {{ $nilai->total_nilai.round($lulus,2)}}</td>
                    </tr>
                    <?php } ?>
                    @endforeach
                  </tbody>
                  
          </table>
          <section>
                <em>
                        siswa yang menerima sertifikat adalah siswa yang memenuhi kriteria nilai rata rata >= 80
                    </em>
						</pre>
                        </section>
            <pre style="line-height: 20px;">
            <h5 style="text-align:right">  
                 Best Regard
                 <div>
                     <img src="{{asset('adsis/img/logoaqila.png')}}" width="90" height="50" alt="image">
                 </div>
            </h5>
            </pre>
                          </div>
            
</body>
</html>