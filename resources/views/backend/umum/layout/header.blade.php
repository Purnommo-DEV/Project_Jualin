    <!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('adminlte/plugins/fontawesome-free/css/all.min.css')}}">
    <!-- DataTables -->
    <link rel="stylesheet" href="{{asset('adminlte/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{asset('adminlte/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{asset('adminlte/plugins/datatables-buttons/css/buttons.bootstrap4.min.css')}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('adminlte/dist/css/adminlte.min.css')}}">
    {{-- <link rel="stylesheet" href="{{asset('style.css')}}"> --}}
    <link rel="stylesheet" href="{{asset('frontends/style.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/review.css')}}">
    <!-- summernote -->
    <link rel="stylesheet" href="{{asset('adminlte/plugins/summernote/summernote-bs4.min.css')}}">
    <link rel="stylesheet" href="{{asset('adminlte/plugins/simplemde/simplemde.min.css')}}">
</head>
<body class="hold-transition layout-top-nav">
<div class="wrapper">
    <div class="callout callout-info bg-primary" style="margin: -15px;">
        <div class ="container ">
            <div class="row">
            <div class="col-md-6">
                <a href="{{route('/')}}" style="text-decoration: none; color:#ffffff; font-size: 14px;"><i class="fas fa-home"></i> Beranda</a>
                <a href="" style="text-decoration: none; color:#ffffff;margin-left: 20px; font-size:14px;"><i class="fas fa-tag"></i> Promo UMKM</a>
                <a href="" style="text-decoration: none;color:#ffffff;margin-left: 20px; font-size:14px;"><i class="fa fa-store-alt"></i> UMKM</a>
                <a href=""  style="text-decoration: none;color:#ffffff;margin-left: 20px; font-size:14px;"><i class="far fa-window-restore"></i> Produk terlaris</a>
                <a href="" style="text-decoration: none;color:#ffffff;margin-left: 20px; font-size:14px;">Tentang Jualin</a>
            </div>
            <div class="col-md-5">
            <a href="" style="text-decoration: none;color:#ffffff;margin-left: 20px; font-size:14px;">Informasi Kontak</a>
        </div>
    </div>
        </div>
    </div>
    <div class ="border">
    <div class="modal fade" id="m_foto-{{ $LoggedUserInfo['id'] }}">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Data Produk</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('update_umum_foto_profile',$LoggedUserInfo['id']) }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label>Foto Profile</label>
                                <input type="file" name="foto" value ="{{$LoggedUserInfo['foto']}}" >
                                </select>
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
</div>
    </div>
    <!-- Navbar -->
    <nav class=" navbar navbar-expand-sm navbar-white navbar-light">
        <div class ="container">

            <!-- Left navbar links -->
            <ul class="navbar-nav" style="width: 100%">

                <li class="nav-item d-none d-sm-inline-block " style="display: flex;">
                    <a href="../../index3.html" class="nav-link">
                    <img src="../elshop/images/jualins_logo.png" alt="">
                    </a>
                </li>
                <div style="margin-left: 20%;padding-top: 5px;">
                    <div class="form-group d-none d-md-inline" >
                        <select class="form-control select2bs4 w-100" style="width: 25%;">
                            <option selected="selected" style="overflow: scroll;">All Category</option>
                           <div class="form-body">
                            <option>Alaska</option>
                            <option>California</option>
                            <option>Delaware</option>
                            <option>Tennessee</option>
                            <option>Texas</option>
                            <option>Washington</option>
                        </div>
                        </select>
                    </div>

                </div>
                <div style="padding-top: 5px;width: 44%">
                    <div class="form-group d-none d-md-inline" style="width: 100%;" >
                        <div class="input-group w-100 ">
                            <input type="search" class="form-control " placeholder="Type your keywords here" value="Lorem ipsum">
                            <div class="input-group-append">
                                <button type="submit" class="btn  btn-default">
                                    <i class="fa fa-search"></i>
                                </button>
                            </div>
                        </div>

                    </div>
                </div>
            </ul>
            <div class="keranjang">
                <a href="#">
                <i class="fas fa-shopping-cart"></i>
            </a>
            </div>
            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <div class="dropdown">
                    <button class="dropbtn"><img src="../images/a (15).jpg"><p>{{$LoggedUserInfo['username']}}</p></button>
                    <div class="dropdown-content">
                      <a href="{{ route('umum_profile') }}">Akun Saya</a>
                      <form method="post" action="{{route('logout')}}">
                        @csrf
                        <button type="submit">Logout</button>
                    </form>
             
                    </div>
                  </div>  
                {{-- <li class="nav-item dropdown user-menu">
                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
                        <img src="../profil/{{ $LoggedUserInfo['foto'] }}" class="user-image img-circle elevation-2" >
                        <span class="d-none d-md-inline">{{ $LoggedUserInfo['username'] }}</span>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                        <!-- User image -->
                        <li class="user-header bg-primary">
                            <img src="../profile/{{ $LoggedUserInfo['foto'] }}" class="img-circle elevation-2" alt="User Image">
                            <p>
                                Alexander Pierce - Web Developer
                                <small>Member since Nov. 2012</small>
                            </p>
                        </li>
                        <!-- Menu Body -->
                        <li class="user-body">
                            <div class="row">
                                <div class="col-4 text-center">
                                    <a href="#">Followers</a>
                                </div>
                                <div class="col-4 text-center">
                                    <a href="#">Sales</a>
                                </div>
                                <div class="col-4 text-center">
                                    <a href="#">Friends</a>
                                </div>
                            </div>
                            <!-- /.row -->
                        </li>
                        <!-- Menu Footer-->
                        <li class="user-footer">
                            <a href="#" class="btn btn-default btn-flat">Profile</a>
                            <a href="#" class="btn btn-default btn-flat float-right">Sign out</a>
                        </li>
                    </ul>
                </li> --}}
            </ul>
        </div>
    </nav>
    <!-- /.navbar -->
@yield('content')
@include('backend.umum.layout.footer')
    <div class="modal fade" id="m_edit-{{ $LoggedUserInfo['id'] }}">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Data Produk</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('update_umum_profile',$LoggedUserInfo['id']) }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label>Nama Lengkap</label>
                                <input name="username" value ="{{$LoggedUserInfo['username']}}" type="text" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Tanggal Lahir</label>
                                <input name="tgl_lahir" value ="{{$LoggedUserInfo['tgl_lahir']}}" type="date" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Jenis Kelamin</label>
                                <select class="form-control" name="jenis_kelamin" value ="{{$LoggedUserInfo['jenis_kelamin']}}">
                                        <option value="Laki-laki">Laki-laki</option>
                                        <option value="Perempuan">Perempuan</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-group">
                                <label>Email</label>
                                <input name="email" value ="{{$LoggedUserInfo['email']}}" type="email" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Nomor Hp</label>
                                <input name="nomor_hp" value ="{{$LoggedUserInfo['nomor_hp']}}" type="text" class="form-control">
                            </div>
                            {{-- <div class="form-group">
                                <label>Password</label>
                                <input name="password" value ="{{$LoggedUserInfo['password']}}" type="text" class="form-control">
                            </div> --}}
                            <div class="form-group">
                                <label>Nomor KTP</label>
                                <input name="no_ktp" value ="{{$LoggedUserInfo['no_ktp']}}" type="text" class="form-control">
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