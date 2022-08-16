@extends('master.app_siswa')
    @section('content')
    <main id="main">
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Nilai Tutor</h2>
          <ol>
            <li><a href="index.html">Home</a></li>
            <li>Rate</li>
          </ol>
        </div>
      </div>
    </section>
    <section>
        <div class="container">
        <div class="table-responsive">
			<table class="table align-items-center table-flush">
			<thead class="thead-light bg-warning">
				<tr>
         <th class="text-center">NO</th>
				 <th class="text-center">Tutor</th>
				 <th class="text-center">Mata Pelajaran</th>
				 <th class="text-center">action</th>
				 </tr>
				 </thead>
                 @php
                 $no=1;
                 @endphp
                 @forelse($belajar as $belajar)
				 <tbody class="list">
				 <tr>
					<td class="text-center">{{$no++}}</td>
					<td class="text-center">{{$belajar->nama_tutor}}</td>
					<td class="text-center">{{$belajar->mapel}}</td>
					<td class="text-center"><a href="{{route('pertemuan.edit', $belajar->id)}}" class="btn btn-info" title="info tutor"><i class="bi bi-info"></i></a> <a href="{{route('pertemuan.show', $belajar->id)}}" class="btn btn-info" title="Data Tutor"><i class="bi bi-award-fill"></i></a></td>	
						</tr>
                        @empty
                        <tr>
                            <td class="text-success">tidak ada tutor untuk di nilai</td>
                        </tr>
						</tbody>
                        @endforelse
						</table>
						</div>
      </div> 
    
        </div>
    </section>
</main>
@endsection