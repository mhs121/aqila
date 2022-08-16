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
        <h2 style="text-align:center;">Data Paket Belajar</h2>
    </div>
               <div class="table-responsive">
                <table class="table" style="width:100%; border-collapse: collapse;" border="1px solid black;";>
                  <thead>
                    <tr>
                    <th class="text-center">No</th>
                      <th class="text-center">Nama paket</th>
                      <th class="text-center">Tingkatan</th>
                      <th class="text-center">Jenis</th>
                      <th class="text-center">Estimasi Belajar</th>
                      <th class="text-center">Harga Paket 1Xpertemuan</th>
                      <th class="text-center">Banyak Peminat</th>
                    </tr>
                  </thead>
                  <tbody>
                  @php
                    $no=1;
                    @endphp
                    <?php if($paket->where('nama_paket','monthly')->where('tingkatan','SMP')->count() >=1) {?>
                    <tr>
                    <td class="text-center"> {{$no++}}</td>
                    <td class="text-center">monthly </td>
                    <td class="text-center"> SMP </td>
                    <td class="text-center"> Bulanan </td>
                    <td class="text-center"> 1 Bulan </td>
                    <td class="text-center"> Rp.50.000 </td>
                    <td style="text-align:center;"> {{ $paket->where('nama_paket','monthly')->where('tingkatan','SMP')->count()}}</td>
                    </tr>
                    <?php } ?>
                    <?php if($paket->where('nama_paket','Mid')->where('tingkatan','SMP')->count() >=1) {?>
                    <tr>
                    <td class="text-center"> {{$no++}}</td>
                    <td class="text-center"> Mid </td>
                    <td class="text-center"> SMP </td>
                    <td class="text-center"> TriWulan </td>
                    <td class="text-center"> 3 Bulan </td>
                    <td class="text-center"> Rp.40.000 </td>
                    <td style="text-align:center;"> {{ $paket->where('nama_paket','Mid')->where('tingkatan','SMP')->count() }}</td>
                    </tr>
                    <?php } ?>
                    <?php if($paket->where('nama_paket','full study')->where('tingkatan','SMP')->count() >=1) {?>
                    <tr>
                    <td class="text-center"> {{$no++}}</td>
                    <td class="text-center">full study </td>
                    <td class="text-center"> SMP </td>
                    <td class="text-center"> semesteran </td>
                    <td class="text-center"> 6 Bulan </td>
                    <td class="text-center"> Rp.35.000 </td>
                    <td style="text-align:center;"> {{ $paket->where('nama_paket','full study')->where('tingkatan','SMP')->count() }}</td>
                    </tr>
                    <?php } ?>
                    <?php if($paket->where('nama_paket','monthly')->count() >=1) {?>
                    <tr>
                    <td class="text-center"> {{$no++}}</td>
                    <td class="text-center">monthly </td>
                    <td class="text-center"> SMA </td>
                    <td class="text-center"> Bulanan </td>
                    <td class="text-center"> 1 Bulan </td>
                    <td class="text-center"> Rp.50.000 </td>
                    <td style="text-align:center;"> {{ $paket->where('nama_paket','monthly')->where('tingkatan','SMA')->count()}}</td>
                    </tr>
                    <?php } ?>
                    <?php if($paket->where('nama_paket','Mid')->count() >=1) {?>
                    <tr>
                    <td class="text-center"> {{$no++}}</td>
                    <td class="text-center"> Mid </td>
                    <td class="text-center"> SMA </td>
                    <td class="text-center"> TriWulan </td>
                    <td class="text-center"> 3 Bulan </td>
                    <td class="text-center"> Rp.40.000 </td>
                    <td style="text-align:center;"> {{ $paket->where('nama_paket','Mid')->where('tingkatan','SMA')->count() }}</td>
                    </tr>
                    <?php } ?>
                    <?php if($paket->where('nama_paket','full study')->count() >=1) {?>
                    <tr>
                    <td class="text-center"> {{$no++}}</td>
                    <td class="text-center">full study </td>
                    <td class="text-center"> SMA </td>
                    <td class="text-center"> semesteran </td>
                    <td class="text-center"> 6 Bulan </td>
                    <td class="text-center"> Rp.35.000 </td>
                    <td style="text-align:center;"> {{ $paket->where('nama_paket','full study')->where('tingkatan','SMA')->count() }}</td>
                    </tr>
                    <?php } ?>
                    <?php if($paket->where('nama_paket','monthly')->count() >=1) {?>
                    <tr>
                    <td class="text-center"> {{$no++}}</td>
                    <td class="text-center">monthly </td>
                    <td class="text-center"> SMA </td>
                    <td class="text-center"> Bulanan </td>
                    <td class="text-center"> 1 Bulan </td>
                    <td class="text-center"> Rp.50.000 </td>
                    <td style="text-align:center;"> {{ $paket->where('nama_paket','monthly')->where('tingkatan','SD')->count()}}</td>
                    </tr>
                    <?php } ?>
                    <?php if($paket->where('nama_paket','Mid')->count() >=1) {?>
                    <tr>
                    <td class="text-center"> {{$no++}}</td>
                    <td class="text-center"> Mid </td>
                    <td class="text-center"> SMA </td>
                    <td class="text-center"> TriWulan </td>
                    <td class="text-center"> 3 Bulan </td>
                    <td class="text-center"> Rp.40.000 </td>
                    <td style="text-align:center;"> {{ $paket->where('nama_paket','Mid')->where('tingkatan','SD')->count() }}</td>
                    </tr>
                    <?php } ?>
                    <?php if($paket->where('nama_paket','full study')->count() >=1) {?>
                    <tr>
                    <td class="text-center"> {{$no++}}</td>
                    <td class="text-center">full study </td>
                    <td class="text-center"> SMA </td>
                    <td class="text-center"> semesteran </td>
                    <td class="text-center"> 6 Bulan </td>
                    <td class="text-center"> Rp.35.000 </td>
                    <td style="text-align:center;"> {{ $paket->where('nama_paket','full study')->where('tingkatan','SD')->count() }}</td>
                    </tr>
                    <?php } ?>
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