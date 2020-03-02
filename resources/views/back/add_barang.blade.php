@extends('layouts.app')


@section('content')
<main>
    <div class="container">
      <div class="card shadow-lg border-0 rounded-lg mt-5">
            <div class="card-header"><h3 class="text-left my-4">Tambah Barang</h3></div>
            <div class="card-body">
            <form action="/tab_barang/store" method="post">
		{{ csrf_field() }}
                <div class="form-row">
                    <div class="col-md-6">
                    <div class="form-group"><label class="small mb-1">ID Barang</label>
                    <input class="form-control py-4" name="id_barang" type="text" placeholder="Masukan ID Barang" required="required" /></div>
                </div>
                    <div class="col-md-6">
                    <div class="form-group"><label class="small mb-1">Nama Barang</label>
                    <input class="form-control py-4" name="nama_barang" type="text" placeholder="Masukan Nama Barang" required="required"/></div>
                </div>
                </div>
                    <div class="form-row">
                    <div class="col-md-6">
                    <div class="form-group"><label class="small mb-1">Tanggal</label>
                    <input class="form-control py-4" name="tanggal" type="date" required="required" /></div>
                </div>
                
                    <div class="col-md-6">
                    <div class="form-group"><label class="small mb-1">Harga</label>
                    <input class="form-control py-4" name="harga" type="text" placeholder="Masukan harga" required="required"/></div>
                </div>
                </div>
                    <div class="form-row">
                    <div class="col-md-6">
                    <div class="form-group"><label class="small mb-1">Deskripsi</label>
                    <input class="form-control py-4" name="des" type="textarea" placeholder="Masukan deskripsi barang" required="required"/></div>
                </div>
                </div>
                    <div class="form-group mt-4 mb-0">
                    <input class="btn btn-primary btn-block" type="submit"  ></div>
                </form>
                </div>
@endsection