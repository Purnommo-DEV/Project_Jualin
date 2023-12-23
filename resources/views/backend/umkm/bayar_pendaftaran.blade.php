@if($LoggedUserInfo['jabatan'] == "umkm")
@extends('backend.umkm.layout.header')
 @section('title','Biaya Pendaftaran')

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
        <div class="container">
            <!-- Default box -->
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Bayar pendaftaran</h3>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-3 col-12">
                            <div class="kartu3">
                                 <div class="card">
                                <div class="card-header" style="background-color: #0275d8 !important;">
                                    <b>File Persyaratan</b>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-sm-1">
                                            <i class="fas fa-check-circle"></i>
                                        </div>
                                        <div class="col-sm-5">
                                            <center>Syarat-01</center>
                                        </div>
                                        <div class="col-sm-6">
                                            <a href=""><u>syarat-01</u></a>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-1">
                                            <i class="fas fa-check-circle"></i>
                                        </div>
                                        <div class="col-sm-5">
                                            <center>Syarat-01</center>
                                        </div>
                                        <div class="col-sm-6">
                                            <a href=""><u>syarat-01</u></a>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-1">
                                            <i class="fas fa-check-circle"></i>
                                        </div>
                                        <div class="col-sm-5">
                                            <center>Syarat-01</center>
                                        </div>
                                        <div class="col-sm-6">
                                            <a href=""><u>syarat-01</u></a>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-1">
                                            <i class="fas fa-check-circle"></i>
                                        </div>
                                        <div class="col-sm-5">
                                            <center>Syarat-01</center>
                                        </div>
                                        <div class="col-sm-6">
                                            <a href=""><u>syarat-01</u></a>
                                        </div>
                                    </div>

                                </div>
                                <div class="card-footer">
                                    <button class="btn btn-primary w-50">
                                        Filter
                                    </button>
                                </div>
                            </div>
                            </div>
                           
                        </div>
                        <div class="col-sm-6 col-12">
                            <div class="card">
                                <div class="card-header navbar-primary ">
                                    <b>Metode Pembayaran</b>
                                </div>
                                <div class="card-body">
                                    <img src="{{ asset('foto/qris.png') }}"><BR>
                                    <b>Quick Response Code Indonesia Standart(QRIS)</b>
                                </div>
                                <div class="card-footer">

                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3 col-12">
                            <div class="card">
                                <div class="card-header">
                                    <b>Ringkasan Belanja</b>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div style="float:left">
                                                Total Harga
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <Div style="float: right">
                                                Rp 50.000
                                            </Div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div style="float:left">
                                                Total Pajak
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <Div style="float: right">
                                                Rp 10.000
                                            </Div>
                                        </div>
                                    </div>
                                    <div style="height: 10px;"></div>
                                    <div class="border"></div>
                                    <div style="height: 10px;"></div>
                                    <div class="row">
                                        <div class="col-sm-6 col-12">
                                            <b>Total Tagihan</b>
                                        </div>
                                        <div class="col-sm-6 col-12">
                                            <b>Rp 60.000</b>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <a href="{{route('umkm_daftar_pembayaran_ke_2',$LoggedUserInfo['id'])}})}}" class="btn btn-primary w-100">Bayar Sekarang</a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
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
    <script>

@endsection
@endif
@if($LoggedUserInfo['jabatan'] != "umkm")
    @include('backend.404.index')
    @endif
