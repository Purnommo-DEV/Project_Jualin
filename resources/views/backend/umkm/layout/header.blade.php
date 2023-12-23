
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
    <link rel="stylesheet" href="{{asset('adminlte/plugins/toastr/toastr.min.css')}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('adminlte/dist/css/adminlte.min.css')}}">
    <link rel="stylesheet" href="{{asset('adminlte/dist/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('adminlte/dist/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontends/style.css')}}"
    <link rel="stylesheet" href="{{asset('adminlte/plugins/summernote/summernote-bs4.min.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/6.0.0-beta.1/dropzone.min.css" integrity="sha512-LAtHhW1lUDHaVEWonqurK2sbMojrUxrDPvWw2mxaRXvqwtQnJXDCGMnlaD1izXoCE9Q5z8Ho3DMm1U151bLhOg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
@if($LoggedUserInfo['jabatan'] == "umkm")
<body class="hold-transition layout-top-nav">
<div class="wrapper">

    <div class="callout callout-info bg-primary" style="margin: -15px;">
        <div class ="container ">
            <div class="row">
            <div class="col-md-7">
                <a href="{{route('/')}}" style="text-decoration: none; color:#ffffff; font-size: 14px;"><i class="fas fa-home"></i> Beranda</a>
                <a href="" style="text-decoration: none; color:#ffffff;margin-left: 20px; font-size:14px;"><i class="fas fa-tag"></i> Promo UMKM</a>
                <a href="" style="text-decoration: none;color:#ffffff;margin-left: 20px; font-size:14px;"><i class="fa fa-store-alt"></i> UMKM</a>
                <a href=""  style="text-decoration: none;color:#ffffff;margin-left: 20px; font-size:14px;"><i class="far fa-window-restore"></i> Produk terlaris</a>
                <a href="" style="text-decoration: none;color:#ffffff;margin-left: 20px; font-size:14px;">Tentang Jualin</a>
            </div>
            <div class="col-md-4">
            <a href="" style="text-decoration: none;color:#ffffff;margin-left: 20px; font-size:14px; float: right;">Informasi Kontak</a>
        </div>
    </div>
        </div>
    </div>
    <div class ="border"></div>
    <!-- Navbar -->
    <nav class=" navbar navbar-expand-sm navbar-white navbar-light">
        <div class ="container">
            <!-- Left navbar links -->
            <div class="col-md-9 ">
            <ul class="navbar-nav" style="width: 100%">
                <li class="nav-item  d-sm-inline-block">
                    <div class="hlogo">
                    <a href="../../index3.html" class="nav-link">
                        <img src="../elshop/images/jualins_logo.png" alt="">
                    </a>
                </div>
                </li>
                <form method="post">
                <div class ="row ml-5">
                    <div class ="col">
                        <div style="margin-left: 20%;padding-top: 5px; width: 200px;">
                    <div class="form-group d-md-inline" >
                        <select class="form-control select2bs4 w-100" >
                            <option selected="selected">--Pilih Filter Kategori---</option>
                            @foreach ($kategori as $data)
                                    <option>{{ $data->kategori }}</option>
                            @endforeach
                        </select>
                    </div>

                </div>
                    </div>
                    <div class ="col">
                          <div style="padding-top: 5px;width: 400px;margin-left: 10px;">
                    <div class="form-group d-md-inline" style="width: 100%;" >
                            <div class="input-group  ">
                                <input type="search" class="form-control " placeholder="Search Nama Produk" >
                                <div class="input-group-append">
                                    <button type="submit" class="btn  btn-default">
                                        <i class="fa fa-search"></i>
                                    </button>
                            </div>
                    </div>

                </div>
                </div>
                    </div>
                </div>
            </form>
                
              
            </ul>
        </div>
            <div class="col-md-1 col-1">
            {{-- <div class="keranjang">
                <a href="#">
                <i class="fas fa-shopping-cart"></i>
            </a>
            </div> --}}
        </div>
        <div class="col-md-1 col-1">
            <div class="notifu">

                <div class="dropdown">
                    {{-- <button class="dropbtn">
                        <a href="">
                        <i class="fas fa-bell"></i>
                    </a>
                    </button> --}}
                    <div class="dropdown-content">
                        {{-- <div class="ntfblm">
                            <div class="container">

                                <img src="{{asset('foto/wait.png')}}" alt="">
                                <p>Belum Ada Notifikasi</p>
                                

                            </div>
                        </div> --}}
                      {{-- <div class="container">
                          
                          <div class="row">
                              <ul>
                             <li>
                                 <a href="">
                                 <h4>Notifikasi 1</h4>
                             <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae doloremque nulla ab provident doloribus ipsum facilis accusamus ducimus aliquid unde aspernatur odio, dolor ut officiis illum laboriosam vero laborum exercitationem.</p>
                            </a>
                            </li>
                            <li>
                                <a href="">
                                <h4>Notifikasi 1</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae doloremque nulla ab provident doloribus ipsum facilis accusamus ducimus aliquid unde aspernatur odio, dolor ut officiis illum laboriosam vero laborum exercitationem.</p>
                           </a>
                           </li>
                            
                            </ul>
                          </div>
                          <div class="row">
                              <div class="toba">
                            <a href="">
                                <h6>Lihat Semua Notifikasi > </h6>
                            </a>
                        </div>
                        </div>
                      </div> --}}
                    </div>
            </div>
        </div>
        </div>
            <!-- Right navbar links -->
            <div class="col-md-3 col-2 ">
            <ul class="navbar-nav ml-auto">
                <div class="dropdown">
                    <button class="dropbtn"><img src="../images/a (15).jpg"><p>{{$LoggedUserInfo['username']}}</p></button>
                    <div class="dropdown-content">
                      {{-- <a href="{{ route('umum_profile') }}">Dashboard</a>
                      <a href="#">Log Out</a> --}}
                      <form method="post" action="{{route('logout')}}">
                        @csrf
                        {{-- <a href="{{ route('umum_profile') }}">
                            <i class="fas fa-user-circle"></i>
                            Akun Saya   
                        </a> --}}
                        <a class="btn btn-sm" 
                        data-toggle="modal" href='#m_edit-{{ $LoggedUserInfo['id']}}'><i class="fas fa-user-circle"></i>Edit Profile</a>
                        <button type="submit" class="btn-transparent " style="border:none">
                            <i class="fas fa-sign-out-alt"></i>Logout
                        </button>
                        <!-- Modal -->   
                    </form>
                    </div>
                  </div>  
                {{-- <li class="nav-item dropdown user-menu">
                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
                        <img src="profile/{{ $LoggedUserInfo['foto']}}" class="user-image img-circle elevation-2" alt="User Image">
                        <span class="d-none d-md-inline">{{$LoggedUserInfo['username']}}</span>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                        <!-- User image -->
                        <li class="user-header bg-primary">
                            <img src="{{asset('adminlte/dist/img    /user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
                            <p>
                                {{$LoggedUserInfo['username']}}
                                <small>{{$LoggedUserInfo['email']}}</small>
                            </p>
                        </li>
                        <li class="dropdown-body">
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
                        </li>
                        <li class="user-footer">
                                <a class="btn btn-warning btn-sm" data-toggle="modal" href='#m_edit-{{ $LoggedUserInfo['id']}}'><i class="ft ft-edit"></i>Edit Profile</a>
                                <button  class ="btn btn-danger btn-flat float-right"
                                     data-toggle="modal" data-target="#exampleModal">
                                 Logout
                             </button>
                        </li>
                    </ul>
                </li> --}}
            </ul>
        </div>
    </div>
    </nav>
    <!-- /.navbar -->
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Warning</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Anda Yakin?
                </div>
                <div class="modal-footer">
                    <form method="post" action="{{route('logout')}}">
                        @csrf
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-danger">Logout</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@yield('content')
@include('backend.umkm.layout.footer')
    <div class="modal fade" id="m_edit-{{ $LoggedUserInfo['id'] }}">
        <div class="modal-dialog ">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Edit Profile</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <form action="{{ route('backend_umkm_update_profile',$LoggedUserInfo['id']) }}" method="POST"
                      enctype="multipart/form-data">
                    @csrf
                <div class="modal-body">
                    <div class ="form-group">
                            <label>Username</label>
                            <input type ="text" class ="form-control" name ="username" value ="{{$LoggedUserInfo['username']}}">
                        </div>
                        <div class ="form-group">
                            <label>Email</label>
                            <input type ="text" class ="form-control" name ="email" value ="{{$LoggedUserInfo['email']}}">
                        </div>
                        <div class ="form-group">
                            <label> UMKM</label>
                            <input type ="text" class ="form-control" name ="umkm" value ="{{$LoggedUserInfo['umkm']}}">
                        </div>
                        <div class ="form-group">
                            <label>Nomor HP</label>
                            <input type ="text" class ="form-control" name ="nomor_hp" value ="{{$LoggedUserInfo['nomor_hp']}}">
                        </div>

                        <div class ="form-group">
                            <label>Foto Profil</label>
                            <input name="foto" type="file" class="">

                        <input name="status_profil" type="hidden" value="1" class="">
                        </div>

                </div>
                <div class ="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
                </form>
            </div>
        </div>
    </div>

@endif
