@extends('layouts.app')


@section('content')
<main>
    <div class="container">
      <div class="card shadow-lg border-0 rounded-lg mt-5">
            <div class="card-header">
            <div class="glyphicon glyphicon-arrow-left">
            <h3 class="text-left my-4"> Edit Barang</h3></div>
            <div class="card-body">
            @foreach($barang as $p)
            <form action="/tab_barang/update/{{ $p->id_barang_srh }}" method="post">
		        {{ csrf_field() }}
                <div class="form-row">
                    <div class="col-md-6">
                    <div class="form-group"><label class="small mb-1">ID Barang</label>
                    <input class="form-control py-4" name="id_barang" readonly value="{{ $p->id_barang_srh }}" required="required" /></div>
                </div>
                    <div class="col-md-6">
                    <div class="form-group"><label class="small mb-1">Nama Barang</label>
                    <input class="form-control py-4" name="nama_barang" type="text" value="{{ $p->nama_barang_srh }}" required="required"/></div>
                </div>
                </div>
                    <div class="form-row">
                    <div class="col-md-6">
                    <div class="form-group"><label class="small mb-1">Tanggal</label>
                    <input class="form-control py-4" name="tanggal" type="date" value="{{ $p->tgl_srh }}" required="required" /></div>
                </div>
                    <div class="col-md-6">
                    <div class="form-group"><label class="small mb-1">Harga</label>
                    <input class="form-control py-4" name="harga" type="number" value="@currency($p->harga_awal_srh)" required="required"/></div>
                </div>
                </div>
                    <div class="form-row">
                    <div class="col-md-6">
                    <div class="form-group"><label class="small mb-1">Deskripsi</label>
                    <input class="form-control py-4" name="des" type="textarea" value="{{ $p->deskripsi_barang_srh }}" required="required"/></div>
                </div>
                </div>
                    <div class="form-group mt-4 mb-0">
                    <input class="btn btn-primary btn-block" type="submit"></div>
                </form>
                @endforeach
                </div>
@endsection