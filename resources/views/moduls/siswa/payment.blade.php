@extends('master.app_siswa')
    @section('content')
    <main id="main">
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Status Pembayaran</h2>
          <ol>
            <li><a href="index.html">Home</a></li>
            <li>Billing</li>
          </ol>
        </div>
       
      </div>
    </section>
    @if (session('status'))
			<div class="alert alert-success">
				{{ session('status') }}
			</div>
		@endif
    <section>
        <div class="container">
        <div class="table-responsive">
			<table class="table align-items-center table-flush">
			<thead class="thead-light bg-warning">
				<tr>
         <th class="text-center">NO</th>
				 <th class="text-center">Nama Siswa</th>
				 <th class="text-center">Nama Paket</th>
				 <th class="text-center">Status Pembayaran</th>
				 <th class="text-center">action</th>
				 </tr>
				 </thead>
                 @php
                 $no=1;
                 @endphp
				 <tbody class="list">
                    @forelse($payment as $payment)
				 <tr>
					<td class="text-center">{{$no++}}</td>
					<td class="text-center">{{$payment->nama_siswa}}</td>
					<td class="text-center">{{$payment->nama_paket}}</td>
					<td class="text-center text-danger">{{$payment->status}}</td>
					<td class="text-center"><a href="{{route('payment.edit', $payment->id)}}" class="btn btn-success" title="bayar"><i class="bi bi-credit-card"></i></a></td>	
						</tr>
                        @empty
                        <tr>
                            <td></td>
                            <td></td>
                            <td class="text-center text-primary"><em>Tidak Ada Tagihan Yang Belum Dibayar</em></td>
                            <td></td>
                            <td></td>
                        </tr>
                        @endforelse
						</tbody>
						</table>
						</div>
      </div> 
    
        </div>
    </section>
</main>
@endsection