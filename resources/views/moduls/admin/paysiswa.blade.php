@extends('master.app_page')
    @section('content')
    <main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-th-list"></i> Data Pembayaran Kursus </h1>
          <p>Menampilkan Data Pembayaran Siswa</p>
        </div>
        <ul class="app-breadcrumb breadcrumb side">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item"><a href="/cetakpay"><i class="fa fa-print fa-lg" title="Cetak Data"></i></a></li>
          <li class="breadcrumb-item active"><a href="#">Data Pembayaran</a></li>
        </ul>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <div class="tile-body">
              <div class="table-responsive">
                <table class="table table-hover table-bordered" id="sampleTable">
                  <thead>
                    <tr>
                      <th class="text-center">No</th>
                      <th class="text-center">Nama Siswa</th>
                      <th class="text-center">Paket dipilih</th>
                      <th class="text-center">Mata Pelajaran</th>
                      <th class="text-center">Tingkatan</th>
                      <th class="text-center">harga 1x pertemuan</th>
                      <th class="text-center">jumlah pertemuan</th>
                      <th class="text-center">Total Pembayaran</th>
                      <th class="text-center">status</th>
                      <th class="text-center">bukti bayar</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                   @php
                   $no=1;
                   @endphp
                    @forelse($payment as $payment)
                      <td class="text-center"> {{ $no++ }}</td>
                      <td class="text-center"> {{$payment->nama_siswa}} </td>
                      <td class="text-center"> {{$payment->nama_paket}} </td>
                      <td class="text-center"> {{$payment->mapel}} </td>
                      <td class="text-center"> {{$payment->tingkatan}} </td>
                      <td class="text-center"> Rp.{{$payment->harga}},00</td>
                      <td class="text-center"> {{$payment->jumlah_pertemuan}} </td>
                      <td class="text-center"> Rp.{{$payment->total_bayar}},00 </td>
                      <td class="text-center"> {{$payment->status}} </td>
                      <td class="text-center"> <a href="{{asset('storage/'.$payment->bukti)}}" class="btn btn-icon btn-primary btn-sm" type="button"><span class="btn-inner--icon"><i class="icon fa fa-eye"   data-original-title="lihat"></i></span></a></td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="3" class="text-center text-danger">Maaf Tidak Ada Data yang di tampilkan</td>
                    </tr>
                    @endforelse
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>
    @endsection