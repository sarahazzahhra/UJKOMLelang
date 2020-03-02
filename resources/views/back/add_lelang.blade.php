@extends('layouts.app')

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.1/bootstrap3-typeahead.min.js"></script>
@section('content')
<main>
    <div class="container">
      <div class="card shadow-lg border-0 rounded-lg mt-5">
            <div class="card-header"><h3 class="text-left my-4">Tambah Data Lelang</h3></div>
            <div class="card-body">
            <form action="/tab_lelang/store" method="post">
		{{ csrf_field() }}
                <div class="form-row">
                    <div class="col-md-6">
                    <div class="form-group"><label class="small mb-1">ID Lelang</label>
                    <input class="form-control py-4" name="id_lelang" type="text" placeholder="Masukan ID Lelang" required="required" /></div>
                </div>
                    <div class="col-md-6">
                    <div class="form-group"><label class="small mb-1">ID Barang</label>
                    <input class="typehead form-control py-4" name="id_barang" type="text" placeholder="Masukan ID Barang" required="required"/></div>
                </div>
                </div>
                    <div class="form-row">
                    <div class="col-md-6">
                    <div class="form-group"><label class="small mb-1">Tanggal Lelang</label>
                    <input class="form-control py-4" name="tgl_lelang" type="date" required="required" /></div>
                </div>
                    <div class="col-md-6">
                    <div class="form-group"><label class="small mb-1">Harga Akhir</label>
                    <input class="form-control py-4" name="harga_akhir" type="text" placeholder="Masukan harga" required="required"/></div>
                </div>
                    <div class="col-md-6">
                    <div class="form-group"><label class="small mb-1">ID User</label>
                    <input class="form-control py-4" name="id_user" type="text" placeholder="Masukan ID User" required="required"/></div>
                </div>
                    <div class="col-md-6">
                    <div class="form-group"><label class="small mb-1">ID Petugas</label>
                    <input class="form-control py-4" name="id_petugas" type="text" placeholder="Masukan ID Petugas" required="required"/></div>
                </div>
                </div>
                    <div class="form-row">
                    <div class="col-md-6">
                    <div class="form-group"><label class="small mb-1">Status</label>
                    <select name="stat" class="form-control" id="exampleFormControlSelect1">
                    <option value="dibuka">Dibuka</option>
                    <option value="ditutup">Ditutup</option>
                    </select>
                </div>
                </div>
                </div>
                <br>
                    <div class="form-group mt-4 mb-0">
                    <input class="btn btn-primary btn-block" type="submit"  ></div>
                </form>
                </div>

<script type="text/javascript">
    var path = "{{ route('autocomplete') }}";
    $('input.typeahead').typeahead({
        source:  function (query, process) {
        return $.get(path, { query: query }, function (data) {
                return process(data);
            });
        }
    });
</script>
@endsection