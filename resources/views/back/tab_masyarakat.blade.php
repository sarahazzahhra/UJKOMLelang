@extends('layouts.app')


@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Table masyarakat</h1>

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary"></h6>
  </div>
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>Nama Lengkap</th>
            <th>Username</th>
            <th>NO. Telp</th>
          </tr>
        </thead>
        <tbody>
        @foreach($masyarakat as $p)
          <tr>
            <td>{{ $p->nama_lengkap_srh }}</td>
            <td>{{ $p->username_srh }}</td>
            <td>{{ $p->telp_sarah }}</td>
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