@if($LoggedUserInfo['jabatan'] == "superadmin")
@extends('backend.superadmin.layout.header_datatable')
@section('title','managemen User')

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
                <a class="nav-link active" href="{{route('superadmin_manajemen_user')}}" >
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
                    <h1>Managemen User</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{route('superadmin')}}">Dashboard</a></li>
                        <li class="breadcrumb-item active">Manageman User</li>
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
                            <button type="button" data-toggle="modal" data-target="#tmbProduk"
                            class="btn btn-primary"><i class ="fa fa-pl"></i> Tambah Admin</button>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">

                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th><Small><b>No</b></Small></th>
                                        <th><small><b>Username</b></small></th>
                                        <th><small><b>Email</b></small></th>
                                        <th><small><b>Jabatan</b></small> </th>
                                        <th><small><b>Nomor Hp</b></small> </th>
                                        <th><small><b>Aksi</b></small> </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($user_pengguna as $index=>$datas)
                                    <tr>
                                        @if($datas->jabatan=="admin" || $datas->jabatan=="superadmin")
                                        <td>{{ $index+1 }}</td>
                                        <td>{{ $datas->username }}</td>
                                        <td>{{ $datas->email }}</td>
                                        <td>{{ $datas->jabatan }}</td>
                                        <td>{{ $datas->nomor_hp }}</td>
                                        <td>
                                            <a  class="btn btn-warning btn-sm" data-toggle="modal" href='#m_edit-{{ $datas->id }}'><i class="fa fa-edit"></i> Edit</a>
                                            <div class="modal fade" id="m_edit-{{ $datas->id }}">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h4 class="modal-title">Edit {{ $datas->username }}</h4>
                                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                        </div>
                                                        <form action="{{ route('update_superadmin_manajemen_user') }}" method="POST"
                                                        enctype="multipart/form-data">
                                                        <div class="modal-body">
                                                           @csrf
                                                           @method('PUT')
                                                           <input name="id" value="{{ $datas->id }}" type="hidden" class="form-control">

                                                           <div class="form-group ">
                                                            <label><small>Username</small></label>
                                                            <input type="text" name="username" value="{{ $datas->username }}" class="form-control" placeholder="Username">
                                                        </div>
                                                        <div class="form-group ">
                                                            <label><small>Alamat Email</small></label>
                                                            <input type="email" name="email" value = "{{ $datas->email }}" class="form-control" placeholder="Email">
                                                        </div>
                                                        <div class="form-group ">
                                                            <label><small>Nomor Handphone</small></label>
                                                            <input type="number" name="nomor_hp" value="{{ $datas->nomor_hp }}" class="form-control" placeholder="Nomor Hp">

                                                        </div>
                                                        <div class="form-group ">
                                                            <label><small>Daftar Sebagai</small></label>
                                                            <select class="form-control" name="jabatan" id="jabatan" >
                                                                <option>{{ $datas->jabatan }}</option>
                                                                <option value="umkm">UMKM</option>
                                                                <option value="admin">admin</option>
                                                            </select>
                                                        </div>
                                                        <input type="text" name="status" class="form-control" value="belum mendaftar" hidden>
                                                        <div class="form-group mb-3">
                                                            <label><small>Password</small></label>
                                                            <input type="password" value ={{ $datas->password }} id="password" class="form-control" placeholder="Password">
                                                        </div>

                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                        <button type="submit" class="btn btn-primary">Submit</button>

                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <a  class="btn btn-danger btn-sm" data-toggle="modal" href='#m_delete-{{ $datas->id }}'><i class="fa fa-trash"></i> Delete</a>
                                    <div class="modal fade" id="m_delete-{{ $datas->id }}">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h4 class="modal-title">Delete {{ $datas->username }}</h4>
                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                </div>
                                                <div class ="modal-body">
                                                    <h4> Apa Anda Yakin?</h4>
                                                </div>
                                        
                                            <div class="modal-footer">
                                                <form action="{{ route('delete_manageman_user',$datas->id) }}" method="POST"
                                              enctype="multipart/form-data">
                                              @csrf
                                              <div class="modal-body">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-danger"><i class ="fa fa-trash"></i> Delete</button>
                                            </div>
                                        </form>

                                    </div>
                                </div>
                            </div>
                        </td>
                        @else
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
<div class="modal fade" id="tmbProduk" tabindex="-1" aria-labelledby="tmbProduk1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Produk</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('superadmin_save_manajemen_user') }}" method="POST"
                enctype="multipart/form-data">
                @csrf
                <div class="form-group ">
                    <label><small>Username</small></label>
                    <input type="text" name="username" class="form-control" placeholder="Email" required="required">
                </div>
                <div class="form-group ">
                    <label><small>Alamat Email</small></label>
                    <input type="email" name="email" class="form-control" placeholder="Email"required="required">
                </div>
                <div class="form-group ">
                    <label><small>Nomor Handphone</small></label>
                    <input type="number" name="nomor_hp" class="form-control" placeholder="Nomor Hp" required="required">

                </div>
                <div class="form-group ">
                    <label><small>Daftar Sebagai</small></label>
                    <select class="form-control" name="jabatan" required="required">
                        <option>---Pilih daftar sebagai---</option>
                        <option value="umkm">UMKM</option>
                        <option value="admin">admin</option>
                    </select>

                </div>
                <input type="text" name="status" class="form-control" required="required" value="belum mendaftar" hidden>
                <div class="form-group mb-3">
                    <label><small>Password</small></label>
                    <input type="password" name="password" required="required" class="form-control" placeholder="Password">
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
</div>
<!-- /.content-wrapper -->

  <!--<div class="modal fade" id="editUser" tabindex="-1" aria-labelledby="editUser" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Data Manageman User</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('update_superadmin_manajemen_user') }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <input name="id" id="id" type="hidden" class="form-control">

                    <div class="form-group ">
                        <label><small>Username</small></label>
                        <input type="text" name="username" id="username" class="form-control" placeholder="Email">
                    </div>
                    <div class="form-group ">
                        <label><small>Alamat Email</small></label>
                        <input type="email" name="email" id="email" class="form-control" placeholder="Email">
                    </div>
                    <div class="form-group ">
                        <label><small>Nomor Handphone</small></label>
                        <input type="number" name="nomor_hp" id="nomor_hp" class="form-control" placeholder="Nomor Hp">

                    </div>
                    <div class="form-group ">
                        <label><small>Daftar Sebagai</small></label>
                        <select class="form-control" name="jabatan" id="jabatan" >
                            <option>---Pilih daftar sebagai---</option>
                            <option value="umkm">UMKM</option>
                            <option value="admin">admin</option>
                        </select>
                    </div>
                    <input type="text" name="status" class="form-control" value="belum mendaftar" hidden>
                    <div class="form-group mb-3">
                        <label><small>Password</small></label>
                        <input type="password" name="password" id="password" class="form-control" placeholder="Password">
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>------>
@endsection
@endif
@if($LoggedUserInfo['jabatan'] != "superadmin")
@include('backend.404.index')
@endif
