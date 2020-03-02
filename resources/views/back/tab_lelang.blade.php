@extends('layouts.app')


@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Table lelang</h1>

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <a href="/tab_lelang/add" class="btn btn-primary">+ Add Barang </a>
  </div>
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>ID Lelang</th>
            <th>ID Barang</th>
            <th>Tanggal Lelang</th>
            <th>Harga Akhir</th>
            <th>ID User</th>
            <th>ID Petugas</th>
            <th>Status</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
        @foreach($lelang as $p)
          <tr>
            <td>{{ $p->id_lelang_srh }}</td>
            <td>{{ $p->id_barang_srh }}</td>
            <td>{{ $p->tgl_lelang_srh }}</td>
            <td>@currency ($p->harga_akhir_srh)</td>
            <td>{{ $p->id_user_srh }}</td>
            <td>{{ $p->id_petugas_srh }}</td>
            <td>{{ $p->status }}</td>
            <td><a href="/tab_lelang/edit/{{ $p->id_lelang_srh }}" class="btn btn-primary">Edit</a>
            <a href="/tab_lelang/delete/{{ $p->id_lelang_srh }}" class="btn btn-danger" onclick="return confirm ('Yakin mau dihapus?')">Delete</button></td>
          </tr>
        </tbody>
        @endforeach
      </table>
    </div>
  </div>
</div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

@endsection