@if($LoggedUserInfo['jabatan'] == "umkm")
@extends('backend.umkm.layout.header')
    @section('title','Pengajuan Iklan Produk')

@section('content')
<div class ="container">
    <div class ="row">
        <div class ="col-sm-2"></div>
        <div class ="col-sm-2">
            <div class ="row">
                <div class ="col-3">
                    <img src ="" width="50px" height="50px">
                </div>
                <div class = "col-9">
                    <small><b>Sepok Kopi kampong</b></small><br>
                    <small>Pontianak Kota</small>
                </div>
            </div>
        </div>
        <div class ="col-sm-3">
            <div class ="card" style="border-radius: 0px;">
                <div class ="card-body" style="margin: -20px;">
                    <img src ="https://picsum.photos/id/0/1080/500" width="100%" height="120px"><br>
                    <div style="margin: 10px;">
                        <small>Kopi sepok Kampung</small><br>
                        <small style="color:darkorange;"><i class ="fa fa-store"></i> Nama Toko</small><br>
                        <small style="color: orange">Diskon 10%</small><br>
                        <small><b>13.500/ Item</b></small><br>
                        <small>
                            <i class ="fa fa-star"></i>
                            <i class ="fa fa-star"></i>
                            <i class ="fa fa-star"></i>
                            <i class ="fa fa-star"></i>
                            <i class ="fa fa-star"></i>

                            (Terjual)</small>
                    </div>

                </div>

            </div>
        </div>
        <div class ="col-sm-3">
            <Div class ="card">
                <div class ="card-header">
                    <b>UMKM Premium</b><br>
                    <small>Benefit untuk anda</small>
                </div>
                <div class ="card-body">
                    <small>Keuntungan 01</small><br>
                    <small>Keuntungan 02</small><br>
                    <small>Keuntungan 03</small><br>
                    <small>Keuntungan 04</small><br>
                    <small>Keuntungan 05</small><br>
                </div>
                <div class ="card-footer">
                    <h3><b>Rp 50.000/ 1 hari</b></h3><br>
                    <button class ="btn btn-primary">
                        Iklankan Sekarang!
                    </button>
                </div>
        </div>
        <div class="col-sm-2"></div>
    </div>
</div>
@endsection
@endif
@if($LoggedUserInfo['jabatan'] != "umkm")
    @include('backend.404.index')
    @endif
