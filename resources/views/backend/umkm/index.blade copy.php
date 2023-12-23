@if($LoggedUserInfo['jabatan'] == "umkm")
@extends('backend.umkm.layout.header')
@section('title','Pendaftaran UMKM')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container">

            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class ="container">
                <!-- Default box -->
                <form method="post" action="{{route('tampung_file')}}" enctype="multipart/form-data">
                    @csrf
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Kelengkapan Berkas</h3>
                        <input type ="email" name="email" value="{{$LoggedUserInfo['email']}}" hidden >

                    </div>
                    <div class="card-body">
                        <div class ="row">
                            <div class ="col-sm-6">
                                <div class="masukkandata">
                                <h5><center>Masukan data UMKM kamu agar mudah kami memverifikasi Masukan data yang valid bos!</center></h5>
                                </div> 
                                <div class="masukkan2">
                                    <br>
                                </div>
                                <div class="gambar">
                                <div class="image6">
                                <img src="{{asset('foto/org.png')}}" alt="">
                                </div>
                                </div>
                                
                                </div>
                            
                            <div class ="col-sm-6">
                                <div class="halouser">
                                    <h5>Halo User, ayo isi detail UMKM kamu!</h5>
                                </div>
                                <h5>
                                    Syarat-01
                                </h5>
                                <div class ="form-group">
                                    <input type ="file" value="file" name="syarat_01" class =" w-75">
                                </div>
                                <h5>
                                    Syarat-02
                                </h5>
                                <div class ="form-group">
                                    <input type ="file" value="file" name="syarat_02" class =" w-75">
                                </div>
                                <h5>
                                    Syarat-03
                                </h5>
                                <div class ="form-group">
                                    <input type ="file" value="file" name="syarat_03" class =" w-75">
                                </div>
                                <h5>
                                    Syarat-04
                                </h5>
                                <div class ="form-group">
                                    <input type ="file" value="file" name="syarat_04" class =" w-75">
                                </div>
                                <h5>
                                    Syarat-05
                                </h5>
                                <div class ="form-group">
                                    <input type ="text" placeholder="No Nib" name="no_nib" class =" form-control w-75">
                                </div>
                                <button type="submit" class ="btn btn-primary">
                                    Konfirmasi
                                </button>
                            </div>
                                </div>
                            <div class ="col-sm-2"></div>
                        </div>
                    </div>
                </form>

                    <!-- /.card-footer-->
                </div>
                <!-- /.card -->
            <div style="height: 20px;"></div>
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
@endsection
@endif
@if($LoggedUserInfo['jabatan'] != "umkm")
    @include('backend.404.index')
    @endif



