@extends('layouts.app')


@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Table pegawai</h1>

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <a href="/tab_petugas/add" class="btn btn-primary">+ Add Petugas </a>
  </div>
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>Nama </th>
            <th>Username </th>
            <th>Jabatan </th>
          </tr>
        </thead>
        <tbody>
        @foreach($petugas as $p)
          <tr>
            <td>{{ $p->nama_petugas_srh }}</td>
            <td>{{ $p->username_srh }}</td>
            <td>{{ $p->level_srh }}</td>
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