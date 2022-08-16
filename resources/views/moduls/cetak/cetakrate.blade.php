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
        <h3 style="text-align:center;">Data Penilaian Tutor</h3>
    </div>
               <div class="table-responsive">
                <table class="table" style="width:100%; border-collapse: collapse;" border="1px";>
                  <thead>
                    <tr>
                      <th class="text-center">No</th>
                      <th class="text-center">Nama siswa</th>
                      <th class="text-center">Nama Tutor</th>
                      <th class="text-center">Mata Pelajaran</th>
                      <th class="text-center">Nilai</th>
                      <th class="text-center">Komentar</th>
                    </tr>
                  </thead>
                  <tbody>
                    @php
                    $no=1;
                    @endphp
                     @foreach($rate as $rate)
                    <tr>
                      <td class="text-center"> {{ $no++ }}</td>
                      <td class="text-center"> {{ $rate->nama_siswa }} </td>
                      <td class="text-center"> {{ $rate->nama_tutor }} </td>
                      <td class="text-center"> {{ $rate->mapel}} </td>
                      <td class="text-center"> {{ $rate->rate }}</td>
                      <td class="text-center"> {{ $rate->komentar }} </td>
                    </tr>
                    @endforeach
                  </tbody>
</table>
						</pre>
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