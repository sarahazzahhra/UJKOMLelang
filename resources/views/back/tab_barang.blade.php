@extends('layouts.app')


@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Table barang lelang</h1>

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <a href="/tab_barang/add" class="btn btn-primary">+ Add Barang </a>
  </div>
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>Nama Barang</th>
            <th>Tanggal Posting</th>
            <th>Harga</th>
            <th>Deskripsi</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
        @foreach($barang as $p)
          <tr>
            <td>{{ $p->nama_barang_srh }}</td>
            <td>{{ $p->tgl_srh }}</td>
            <td>@currency( $p->harga_awal_srh )</td>
            <td>{{ $p->deskripsi_barang_srh }}</td>
            <td><a href="/tab_barang/edit/{{ $p->id_barang_srh }}" class="btn btn-primary">Edit</a>
            <a href="/tab_barang/delete/{{ $p->id_barang_srh }}" class="btn btn-danger" onclick="return confirm ('Yakin mau dihapus?')">Delete</a></td>
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