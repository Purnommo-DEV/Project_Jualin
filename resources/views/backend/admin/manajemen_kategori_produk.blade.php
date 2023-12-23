@if($LoggedUserInfo['jabatan'] == "admin")
@extends('backend.admin.layout.datatable_header')
@section('title','Manageman User')
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
                            <i class="fas fa-user-check "></i>
                            <p>
                                Verifikasi Produk UMKM
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="{{route('backend_admin_verifikasi_pembelian')}}" >
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
                        <a class="nav-link active" href="{{route('backend_admin_manajemen_kategori_produk')}}" >
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
                        <h1>Manajemen Kategori Produk</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{route('admin_dashboard')}}">Dashboard</a></li>
                            <li class="breadcrumb-item active"><a href ="{{route('backend_admin_manajemen_kategori_produk')}}">Manajemen Kategori Produk</a></li>
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
                                <br>
                                <button  type="button" class="btn btn-primary" data-toggle="modal"
                                    data-target="#tambaKategori">
                                    Tambah Data
                                </button>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">

                        <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th width="5%"><Small><b>No</b></Small></th>
                                <th><small><b>Kategori</b></small></th>
                                <th><small><b>Kategori</b></small></th>
                                <th width="20%"><small><b>Aksi</b></small> </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($kategori_barang as $index=>$datas)
                                <tr>
                                    <td>{{ $index+1 }}</td>
                                    <td>{{ $datas->kategori }}</td>
                                    <td><img src="images/{{$datas->gambar}}" width="70px"></td>
                                    <td> 
                                        <button type="button" value="{{ $datas->id }}"
                                        class="btn btn-primary editBtnKategori btn-sm">Edit</button>
                                        <a href="#" class = "btn btn-danger btn-sm delete" kategori-id = "{{$datas->id}}">Hapus
                                        </a>
                                    </td>
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
<div class="modal fade" id="tambaKategori" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <form action="{{route('backend_admin_save_manajemen_kategori_produk')}}" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="form-group{{$errors->has('kategori') ? 'has-error' : ''}}">
                        <label for="exampleInputEmail1">Kategori</label>
                        <input name="kategori" type="text" class="form-control" id="exampleInputEmail1"
                            aria-describedby="emailHelp" value="">
                            @if($errors->has('kategori'))
                                <span class="help-block" style="color: red">{{$errors->first('kategori')}}</span>
                            @endif
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Gambar</label>
                        <input name="gambar" type="file" class="form-control" id="exampleInputEmail1"
                            aria-describedby="emailHelp" value="">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="editBtnKategoriModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
                <form action="{{ route('update_backend_admin_manajemen_kategori_produk') }}" method="POST" enctype="multipart/form-data">
            <div class="modal-body">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <input name="id" id="id" type="text" class="form-control">
                    </div>
                    <div class="form-group">
                        <input name="kategori" id="kategori" type="text" class="form-control">
                    </div>
                    <div class="form-group">
                        <input name="gambar" id="gambar" type="file" class="form-control">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Submit</button>
            </div>
             </form>
        </div>
    </div>
</div>
</div>
@endsection
@endif
@if($LoggedUserInfo['jabatan'] != "admin")
    @include('backend.404.index')
  @endif

