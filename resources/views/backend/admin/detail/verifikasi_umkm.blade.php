@extends('backend.admin.layout.layout_detail')
@section('title','Verifikasi UMKM')

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Detail Verifikasi UMKM</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Detail Verifikasi UMKM</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">

    <!-- Default box -->
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">Detail Verifikasi UMKM</h3>

        <div class="card-tools">
          <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
            <i class="fas fa-minus"></i>
          </button>
          <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
            <i class="fas fa-times"></i>
          </button>
        </div>
      </div>
      <div class="card-body">
        <div class ="row">
          <div class ="col-6">
            <div class ="col-4">
              <p><b>Username</b></p>
              <p><b>Email</b></p>
              <p><b>Nomor Hp</b></p>
              <p><b>Alamat</b></p>
              <p><b>Nominal Bayar</b></p>
              <p><b>Tanggal</b></p>
            </div>
            <div class ="col-1">
              <p><b>:</b></p>
              <p><b>:</b></p>
              <p><b>:</b></p>
              <p><b>:</b></p>
              <p><b>:</b></p>
              <p><b>:</b></p>
            </div>
            <div class ="col-7"></div>
          </div>
          <div class ="col-6"></div>
        </div>
      </div>
      <!-- /.card-body -->
      <div class="card-footer">
        Footer
      </div>
      <!-- /.card-footer-->
    </div>
    <!-- /.card -->

  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<!-- Main content -->

</div>
<!-- /.content-wrapper -->
@endsection