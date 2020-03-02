@extends('layouts.app')


@section('content')
<main>
    <div class="container">
      <div class="card shadow-lg border-0 rounded-lg mt-5">
            <div class="card-header"><h3 class="text-left my-4">Edit Data Lelang</h3></div>
            <div class="card-body">
            @foreach($lelang as $lelang)
            <form action="/tab_lelang/update/{{ $lelang->id_lelang_srh }}" method="post">
		{{ csrf_field() }}
                <div class="form-row">
                    <div class="col-md-6">
                    <div class="form-group"><label class="small mb-1">ID Lelang</label>
                    <input class="form-control py-4" name="id_lelang" type="text" placeholder="Masukan ID Lelang" readonly value="{{ $lelang->id_lelang_srh }}" required="required" /></div>
                </div>
                    <div class="col-md-6">
                    <div class="form-group"><label class="small mb-1">ID Barang</label>
                    <input class="form-control py-4" name="id_barang" type="text" placeholder="Masukan ID Barang" value="{{ $lelang->id_barang_srh }}" required="required"/></div>
                </div>
                </div>
                    <div class="form-row">
                    <div class="col-md-6">
                    <div class="form-group"><label class="small mb-1">Tanggal Lelang</label>
                    <input class="form-control py-4" name="tgl_lelang" type="date" value="{{ $lelang->tgl_lelang_srh }}" required="required" /></div>
                </div>
                    <div class="col-md-6">
                    <div class="form-group"><label class="small mb-1">Harga Akhir</label>
                    <input class="form-control py-4" name="harga_akhir" type="text" placeholder="Masukan harga" value="@currency($lelang->harga_akhir_srh)" required="required"/></div>
                </div>
                    <div class="col-md-6">
                    <div class="form-group"><label class="small mb-1">ID User</label>
                    <input class="form-control py-4" name="id_user" type="text" placeholder="Masukan ID User" value="{{ $lelang->id_user_srh }}" required="required"/></div>
                </div>
                    <div class="col-md-6">
                    <div class="form-group"><label class="small mb-1">ID Petugas</label>
                    <input class="form-control py-4" name="id_petugas" type="text" placeholder="Masukan ID Petugas" value="{{ $lelang->id_petugas_srh }}" required="required"/></div>
                </div>
                </div>
                    <div class="form-row">
                    <div class="col-md-6">
                    <div class="form-group"><label class="small mb-1">Status</label>
                    <select name="stat" class="form-control" id="exampleFormControlSelect1">
                    <option value="dibuka" @if ($lelang->status == 'dibuka') selected @endif> Dibuka</option>
                    <option value="ditutup" @if ($lelang->status == 'ditutup') selected @endif> Ditutup</option>
                    </select>
                </div>
                </div>
                </div>
                <br>
                    <div class="form-group mt-4 mb-0">
                    <input class="btn btn-primary btn-block" type="submit"  ></div>
                </form>
                @endforeach
                </div>
@endsection