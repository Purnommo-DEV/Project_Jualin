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
                        <div class="col-sm-3 col-sm-3">
                            <div class="card">
                                <div class="card-header">
                                    <b>File Persyaratan</b>
                                </div>
                                <div class="card-body">
                            <form method="post" action="{{route('tampung_file')}}" enctype="multipart/form-data" class="needs-validation" novalidate>
                            @csrf
                                <div class="form-row">
                                <input type ="email" name="email" value="{{$LoggedUserInfo['email']}}" hidden >
                                <div class="col-md-8 mb-3">
                                    <label for="validationTooltip01">Syarat 1</label>
                                    <input type="file" value="file" name="syarat_01" required >
                                </div>
                                <div class="col-md-8 mb-3">
                                    <label for="validationTooltip01">Syarat 2</label>
                                    <input type="file" value="file" name="syarat_02" required>
                                </div>
                                <div class="col-md-8 mb-3">
                                    <label for="validationTooltip01">Syarat 3</label>
                                    <input type="file" value="file" name="syarat_03" required>
                                </div>
                                <div class="col-md-8 mb-3">
                                    <label for="validationTooltip01">Syarat 4</label>
                                    <input type="file"value="file" name="syarat_04" required>
                                </div>
                                <div class="col-md-12 mb-3">
                                    <label for="validationTooltip01">Syarat 5</label>
                                    <input class="form-control" type ="text" placeholder="No Nib" name="no_nib" required>
                                </div>
                                <div class="col-md-12">
                                    <center><button type="submit" class ="btn btn-primary">Konfirmasi</button></center>
                                </div>
                            </div>
                            </form>
                                </div>
                                <div class="card-footer">
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-12">
                            <div class="card">
                                <div class="card-header">
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
