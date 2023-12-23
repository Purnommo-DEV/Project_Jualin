@if($LoggedUserInfo['jabatan'] == "superadmin")
@extends('backend.superadmin.layout.header_datatable')
@section('title','Laporan Jumlah umkm')


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
                        <a class="nav-link active" href="{{route('superadmin_laporan_jumlah_umkm')}}" >
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
                        <a class="nav-link " href="{{route('Data Pengajuan Pencairan Dana')}}" >
                            <i class="fas fa-people-carry"></i>
                            <p>
                                Pengajuan Pencairan Dana
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="{{route('superadmin_laporan_income')}}" >
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
                        <h1>Laporan Jumlah UMKM</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{route('superadmin')}}">Dashboard</a></li>
                            <li class="breadcrumb-item active">Laporan Jumlah UMKM</li>
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
                                <div class="row">
                                    <div class="col-md-6">
                                        <h3 class="card-title">Laporan Jumlah UMKM</h3>
                                    </div>
                                    <div class="col-md-6">
                                        <a href="{{route('superadmin_cetak_cetak_laporan_jumlah_umkm')}}" class="float-right">
                                            <button type="button" class="btn btn-primary">
                                                <i class="fas fa-print mr-2"></i>
                                                cetak
                                            </button>
                                        </a>
                                    </div>
                            </div>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">

                                                      <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th><Small><b>No</b></Small></th>
                                <th><small><b>Umkm</b></small></th>
                                <th><small><b>Foto Produk</b></small></th>
                                <th><small><b>Alamat</b></small> </th>
                                <th><small><b>Surat Izin</b></small> </th>
                                <th><small><b>Pendapatan</b></small> </th>
                                <th><small><b>Status</b></small> </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($laporan_jumlah_umkm as $index=>$datas)
                                <tr>

                                    <td>{{ $index+1 }}</td>
                                    <td>{{ $datas->umkm }}</td>
                                    <td>{{ $datas->foto_umkm }}</td>
                                    <td>{{ $datas->total_produk }}</td>
                                    <td>{{ $datas->alamat }}</td>
                                    <td>{{ $datas->surat_izin }}</td>
                                    <td>{{ $datas->pendapatan }}</td>
                                    <td>{{ $datas->status }}</td>
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

@endsection
@endif
@if($LoggedUserInfo['jabatan'] !="superadmin")
    @include('backend.404.index')
    @endif
