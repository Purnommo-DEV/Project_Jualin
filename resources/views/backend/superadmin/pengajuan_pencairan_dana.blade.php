@if($LoggedUserInfo['jabatan'] == "superadmin")
@extends('backend.superadmin.layout.header_datatable')
  @section('title','Pengajuan Pencairan Dana')
@section('content')
<aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <a href="../../index3.html" class="brand-link">
            <img src="{{asset('adminlte/dist/img/AdminLTELogo.png')}}"
                 alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
            <span class="brand-text font-weight-light">AdminLTE 3</span>
        </a>

        <!-- Sidebar -->
        <div class="sidebar">
            <!-- Sidebar user panel (optional) -->
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                <div class="image">
                    <img src="{{asset('adminlte/dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
                </div>
                <div class="info">
                    <a href="#" class="d-block">Alexander Pierce</a>
                </div>
            </div>

            <!-- SidebarSearch Form -->
            <div class="form-inline">
                <div class="input-group" data-widget="sidebar-search">
                    <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                    <div class="input-group-append">
                        <button class="btn btn-sidebar">
                            <i class="fas fa-search fa-fw"></i>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                    <!-- Add icons to the links using the .nav-icon class
                         with font-awesome or any other icon font library -->
                    <li class="nav-item">
                        <a class="nav-link " href="{{route('superadmin')}}" >
                            <i class="fas fa-align-justify m-1"></i>
                            <p>
                                Dashboard
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="{{route('superadmin_laporan_jumlah_produk')}}" >
                            <i class="far fa-clipboard m-1"></i>
                            <p>
                                Laporan Jumlah Produk
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('superadmin_laporan_jumlah_umkm')}}" >
                            <i class="far fa-clipboard m-1"></i>
                            <p>
                                Laporan Jumlah UMKM
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="{{route('superadmin_laporan_jumlah_transaksi')}}" >
                               <i class="far fa-clipboard m-1"></i>
                                Laporan Jumlah Transaksi
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active " href="{{route('Data Pengajuan Pencairan Dana')}}" >
                            <i class="fas fa-people-carry"></i>
                            <p>
                                Pengajuan Pencairan Dana
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('superadmin_laporan_income')}}" >
                            <i class="far fa-clipboard m-1"></i>
                            <p>
                                Laporan Income
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="#produk_terlaris" >
                            <i class="far fa-star"></i>
                            <p>
                                Produk Terlaris
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="{{route('superadmin_review_produk')}}" >
                            <i class="fas fa-dolly"></i>
                            <p>
                                Review Produk
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="{{route('superadmin_review_kurir')}}" >
                            <i class="fas fa-chalkboard-teacher"></i>
                            <p>
                                Review Kurir
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link  " href="{{route('superadmin_pengajuan_pencairan')}}" >
                            <i class="fas fa-cash-register"></i>
                            <p>
                                Pengajuan pencairan
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('superadmin_manajemen_user')}}" >
                            <i class="fas fa-user-tie"></i>
                            <p>
                                Manajemen User
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('tentang_jualin')}}" >
                            <i class="fas fa-user-tie mr-1"></i>
                            <p>
                                Tentang Jualin
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('slider_superadmin')}}" >
                            <i class="fas fa-user-tie mr-1"></i>
                            <p>
                                Slider
                            </p>
                        </a>
                    </li>
                     <li class="nav-item">
                    <a class="nav-link" href="{{route('kurir')}}" >
                      <i class="fas fa-user-tie mr-1"></i>
                      <p>
                        Kurir
                      </p>
                    </a>
                  </li>
                </ul>
            </nav>
            <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
    </aside>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Pengajuan Iklan Produk</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{route('admin_dashboard')}}">Dashboard</a></li>
                            <li class="breadcrumb-item active"><a href="{{route('backend_admin_pengajuan_iklan_produk')}}">Pengajuan Iklan Produk</a> </li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">


                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Pengajuan Iklan Produk</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th><Small><b>No</b></Small></th>
                                <th><small><b>Umkm</b></small></th>
                                <th><small><b>Nama Produk</b></small></th>
                                <th><small><b>Deskripsi</b></small></th>
                                <th><small><b>Total Pembayaran</b></small> </th>
                                <th><small><b>Status Pembayaran</b></small></th>
                                <th><small><b>Bukti Transfer Dana</b></small></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($pencairan as $index=>$datas)
                                <tr>

                                    <td>{{ $index+1 }}</td>
                                    <td>{{ $datas->nama_umkm }}</td>
                                    <td>{{ $datas->created_at }}</td>
                                    <td>@currency($datas->total_penjualan)</td>
                                    <td>@currency($datas->total_ppencairan)</td>
                                    <td style="height: 10%"><img src="../foto_bukti_pencairan/{{$datas->bukti_transfer_dana}}" width="20%"></td>
                                    <td>
                                    @if($datas->status=="Telah Di Verifikasi")
                                            <button type="button" value="{{ $datas->id }}"
                                                class="btn btn-primary btnPencairan btn-sm">Telah Di Verifikasi</button>
                                    @else
                                            <button type="button" value="{{ $datas->id }}"
                                                class="btn btn-danger btnPencairan btn-sm">Belum Di Verifikasi</button>
                                    </td>
                                    @endif
                            </tr>
                            @endforeach

                        </tbody>

                    </table>


                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
<div class="modal fade" id="editPencairan" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('Update Status Pencairan Dana') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <input name="id" id="id" type="hidden" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Bukti Pencairan Dana </label>
                        <input class="form-control" name="bukti_transfer_dana" id="id" type="file" class="form-control">
                    </div>
                    <div class="form-group">
                        <select class="form-control" name="status" id="status" placeholder="Status">
                            <option value="Belum Di Verifikasi">Belum Di Verifikasi</option>
                            <option value="Telah Di Verifikasi">Telah Di Verifikasi</option>
                        </select>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
@endsection
@endif
@if($LoggedUserInfo['jabatan'] != "superadmin")
    @include('backend.404.index')
    @endif
