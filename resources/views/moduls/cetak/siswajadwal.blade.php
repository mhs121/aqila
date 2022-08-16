<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<table style="width:90%">
            <tr>
            <td><img class="card-img-top" src="{{asset('adsis/img/logo.jpg')}}" alt="Card image" style="max-width: 7rem;"></td>
            <td><h1 style="text-align:center;">Aqila Cource</h1>
            <p style="text-align:center;">Pintu Air, JL.Kenanga Kelurahan IndraSari Martapura</p>
    </td>
            </tr>
    </table>
    <hr>
    <h3 style="text-align:center;">Jadwal Belajar Siswa</h3>
    <table style="width:50%">
        @foreach($siswa as $siswa)
          <tr>
            <td>Nama Siswa</td><td>:</td><td>{{$siswa->nama_siswa}}</td>
          </tr>
          <tr>
            <td>Asal Sekolah</td><td>:</td><td>{{$siswa->sekolah}}</td>
          </tr>
          <tr>
          <td>Tingkatan</td><td>:</td><td>{{$siswa->tingkatan}} / sederajat</td>
          </tr>
          @endforeach
        </table>
        <div class="container">
            <div class="table-responsive">
                  <table style="width:100%; border-collapse: collapse;" border="1px";>
                  <thead style="thead-light bg-danger">
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
                          <td style="text-align:center;">{{$no++}}</td>
                          <td style="text-align:center;">{{$belajar->nama_tutor}}</td>
                          <td style="text-align:center;">{{$belajar->mapel}}</td>
                          <td style="text-align:center;">{{$belajar->hari}}</td>
                          <td style="text-align:center;">{{$belajar->waktu}}</td>	
                              </tr>
                              </tbody>
                              @endforeach
                              </table>
                              </div>
            </div>   
            <div class="container">
                <pre class="text-success">

                                Aqila Course
      Terimakasih Telah Memilih Kami sebagai Partner belajar anda
                </pre>
            </div>
        </div>
</body>
</html>