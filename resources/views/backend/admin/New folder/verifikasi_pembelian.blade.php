@if($LoggedUserInfo['jabatan'] == "admin")
@extends('backend.admin.layout.datatable_header')
    @section('title', 'Verifikasi Pembelian')
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
                    <a href="#" class="d-block"></a>
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
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('admin_dashboard')}}" >
                            <i class="fas fa-align-justify mr-1"> </i>
                            <p>
                                Dashboard
                            </p>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link " href="{{route('backend_admin_verifikasi_produk')}}">
                            <i class="fas fa-user-check mr-1"></i>
                            <p>
                                Verifikasi Produk UMKM
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="{{route('backend_admin_verifikasi_pembelian')}}" >
                            <i class="fas fa-clipboard-check mr-1"></i>
                            <p>
                                Verifikasi Pembelian
                            </p>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link " href="{{route('backend_admin_pengajuan_pro_umkm')}}" >
                            <i class="fas fa-clipboard-list mr-1"></i>
                            <p>
                                Pengajuan Pro UMKM
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="{{route('backend_admin_pengajuan_iklan_produk')}}" >
                            <i class="fas fa-clipboard-list mr-1"></i>
                            <p>
                                Pengajuan iklan produk
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="{{route('backend_admin_managemen_user')}}" >
                            <i class="fas fa-user-tie mr-1"></i>
                            <p>
                                Manajemen User
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="{{route('backend_admin_manajemen_kategori_produk')}}" >
                            <i class=" far fa-image mr-1"></i>
                            <p>
                                Kategori Produk
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="{{route('backend_admin_notifikasi')}}" >
                            <i class="fas fa-bell mr-1"></i>
                            <p>
                                Notifikasi
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('backend_verifikasi_umkm')}}">
                            <i class="far fa-check-square mr-1"></i>
                            <p>
                                Verifikasi UMKM
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
                        <h1>Verifikasi Pembelian</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{route('admin_dashboard')}}">Dashboard</a></li>
                            <li class="breadcrumb-item active"><a href="{{route('backend_admin_verifikasi_pembelian')}}">Verifikasi Pembelian</a></li>
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
                                <h3 class="card-title">Verifikasi Pembelian</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th><Small><b>No</b></Small></th>
                                <th><small><b>Umkm</b></small></th>
                                <th><small><b>Nama Produk</b></small></th>
                                <th><small><b>Mengajukan Tanggal</b></small></th>
                                <th><small><b>Diverifikasi Tanggal</b></small></th>
                                <th><small><b>Total Pembayaran</b></small> </th>
                                <th><small><b>Metode Pembayaran</b></small> </th>
                                <th><small><b>Status Pembayaran</b></small></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($verifikasi_pembelian as $index=>$datas)
                                <tr>

                                    <td>{{ $index+1 }}</td>
                                    <td>{{ $datas->umkm }}</td>
                                    <td>{{ $datas->nama_produk }}</td>
                                    <td>{{ $datas->kuantitas }}</td>
                                    <td>{{ $datas->kurir }}</td>
                                    <td>{{ $datas->total }}</td>
                                    <td>{{ $datas->metode_pembayaran }}</td>
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
@if($LoggedUserInfo['jabatan'] != "admin")
    @include('backend.404.index')
    @endif
