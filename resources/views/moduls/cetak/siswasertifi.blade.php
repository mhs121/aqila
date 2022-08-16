<html>
    <head>
        <style type='text/css'>
            body, html {
                margin: 0;
                padding: 0;
            }
            body {
                color: black;
                display: table;
                font-family: Georgia, serif;
                font-size: 24px;
                text-align: center;
            }
            .container {
                border: 20px solid tan;
                width: 750px;
                height: 563px;
                display: table-cell;
                vertical-align: middle;
            }
            .logo {
                color: tan;
            }

            .marquee {
                color: tan;
                font-size: 48px;
                margin: 20px;
            }
            .assignment {
                margin: 20px;
            }
            .person {
                border-bottom: 2px solid black;
                font-size: 32px;
                font-style: italic;
                margin: 20px auto;
                width: 400px;
            }
            .reason {
                margin: 20px;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="logo">
                <img src="{{asset('adsis/img/logoaqila.png')}}" width="100px;" height=100; alt="">
            </div>
@php
                      $total=$nilai->latihan+$nilai->tugas+$nilai->final_test;
                      $lulus= $total/3;
                      @endphp
            <div class="marquee">
                Certificate Aqila Cource
            </div>

            <div class="assignment">
                sertifikat ini diberikan kepada
            </div>

            <div class="person">
                {{$nilai->nama_siswa}}
            </div>

            <div class="reason">
                Atas prestasinya belajar {{$nilai->mapel}} di aqila coucre<br/>
                dengan total nilai {{$nilai->total_nilai.round($lulus,2)}}
            </div>
        </div>
    </body>
</html>