
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminLTE 3 | ChartJS</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('adminlte/plugins/fontawesome-free/css/all.min.css')}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('adminlte/dist/css/adminlte.min.css')}}">
    <link rel="stylesheet" href="{{asset('adminlte/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{asset('adminlte/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{asset('adminlte/plugins/datatables-buttons/css/buttons.bootstrap4.min.css')}}">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
            </li>
        </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <a href="../../index3.html" class="brand-link">
            <img src="../../dist/img/AdminLTELogo.png"
                 alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
            <span class="brand-text font-weight-light">AdminLTE 3</span>
        </a>

        <!-- Sidebar -->
        <div class="sidebar">
            <!-- Sidebar user panel (optional) -->
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                <div class="image">
                    <img src="../../dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
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
                    <li class="nav-item">
                        <a href="{{route('superadmin')}}" class="nav-link">
                            <i class="nav-icon far fa-image"></i>
                            <p>
                                Dashboard
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('superadmin_laporan_jumlah_produk')}}" class="nav-link">
                            <i class="nav-icon far fa-image"></i>
                            <p>
                                Laporan Jumlah Produk
                            </p>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="{{route('superadmin_laporan_jumlah_umkm')}}" class="nav-link">
                            <i class="nav-icon far fa-image"></i>
                            <p>
                                Laporan Jumlah UMKM
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('superadmin_laporan_jumlah_transaksi')}}" class="nav-link">
                            <i class="nav-icon far fa-image"></i>
                            <p style="font-size: 15px;">
                                laporan Jumlah Transaksi
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('superadmin_laporan_income')}}" class="nav-link">
                            <i class="nav-icon far fa-image"></i>
                            <p>
                                Laporan Income
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('superadmin_produk_terlaris')}}" class="nav-link">
                            <i class="nav-icon far fa-image"></i>
                            <p>
                                Produk Terlaris
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('superadmin_review_produk')}}" class="nav-link">
                            <i class="nav-icon far fa-image"></i>
                            <p>
                                Review Produk
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('superadmin_review_kurir')}}" class="nav-link">
                            <i class="nav-icon far fa-image"></i>
                            <p>
                                Review Kurir
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('superadmin_pengajuan_pencairan')}}" class="nav-link">
                            <i class="nav-icon far fa-image"></i>
                            <p>
                                Pengajuan pencairan
                            </p>
                        </a>
                    </li>
                </ul>
            </nav>
            <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
    </aside>
@yield('content')
@include('superadmin.layout.footer')
