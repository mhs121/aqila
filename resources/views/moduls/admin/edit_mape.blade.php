@extends('master.app_page')
    @section('content')
    <main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-plus"></i> Mata Pelajaran</h1>
          <p>Edit Mata Pelajaran</p>
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item"><a href="#">Edit Mata Pelajaran</a></li>
        </ul>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <div class="tile-body">
                <form action="{{route('mapel.update', $mapel->id)}}" method="post">
                @method('PUT')
                    @csrf
                <div class="row mb-3">
                    <label for="Kode" class="col-sm-2 col-form-label">Kode</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control" id="kode" value="{{$mapel->kode}}" name="kode_mapel">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="mapel" class="col-sm-2 col-form-label">Mata Pelajaran</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control" id="mapel" name="mapel">
                    </div>
                </div>
                <div class="form-group">
                <div class="row mb-3">
                <label for="colFormLabelSm" class="col-sm-2 col-form-label">Tingkatan</label>
                <div class="col-sm-10">
                <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="SD" value="SD" name="tingkatan">
                <label class="form-check-label" for="SD">SD</label>
                </div>
                <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="SMP" value="SMP" name="tingkatan">
                <label class="form-check-label" for="SMP">SMP</label>
                </div>
                <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="SMA" value="SMA" name="tingkatan">
                <label class="form-check-label" for="SMA">SMA</label>
                </div>
                  </div>
</div>
                <button type="submit" class="btn btn-primary">Edit Data</button>
                </form>
            </div>
          </div>
        </div>
      </div>
    </main>
    @endSection