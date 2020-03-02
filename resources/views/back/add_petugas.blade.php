@extends('layouts.app')


@section('content')
<main>
    <div class="container">
      <div class="card shadow-lg border-0 rounded-lg mt-5">
            <div class="card-header"><h3 class="text-left my-4">Tambah Akun Petugas</h3></div>
            <div class="card-body">
            <form action="/tab_petugas/store" method="post">
		{{ csrf_field() }}
                <div class="form-row">
                    <div class="col-md-6">
                    <div class="form-group"><label class="small mb-1">ID Petugas</label>
                    <input class="form-control py-4" name="id_petugas" type="text" placeholder="Masukan ID Petugas" required="required" /></div>
                </div>
                    <div class="col-md-6">
                    <div class="form-group"><label class="small mb-1">Nama Petugas</label>
                    <input class="form-control py-4" name="nama_petugas" type="text" placeholder="Masukan Nama Petugas" required="required"/></div>
                </div>
                </div>
                    <div class="form-row">
                    <div class="col-md-6">
                    <div class="form-group"><label class="small mb-1">Username</label>
                    <input class="form-control py-4" name="username" type="text" placeholder="Masukan Username" required="required" /></div>
                </div>
                    <div class="col-md-6">
                    <div class="form-group"><label class="small mb-1">Password</label>
                    <input class="form-control py-4" name="password" type="password" placeholder="Masukan Password" required="required"/></div>
                </div>
                    <div class="col-md-6">
                    <div class="form-group"><label class="small mb-1">Jabatan</label>
                    <select name="level" class="form-control" id="exampleFormControlSelect1">
                    <option value="1">1 - Administrator</option>
                    <option value="2">2 - Petugas</option>
                    </select>
                </div>
                </div>
                </div>
                    <div class="form-group mt-4 mb-0">
                    <input class="btn btn-primary btn-block" type="submit"  ></div>
                </form>
                </div>
@endsection