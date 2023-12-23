@if($LoggedUserInfo['jabatan'] == "umkm")
@extends('backend.umkm.layout.header')
@section('title','Pengajuan Akun Premium')
@section('content')
    <div class ="row">
        <div class ="col-3"></div>
        <div class ="col-6">
            <div class ="row">
                <div class ="col-sm">
                    <center><B>Jadi umkm premium sekarang dan dapatkan sejuta keuntungan</B></center>
                    <div class ="col-sm">
                    <img class="img-fluid" src="{{asset('foto/adas.png')}}" alt="">
                </div>
                </div>
                <div class ="col-sm">
                    <div class ="card">
                        <div class ="card-header">
                            <center><b>UMKM Premium</b></center><br>
                            <center><b>Benefit untuk Anda</b></center>
                        </div>
                        <div class ="card-body">
                            <small> Keuntungan 01</small><br>
                            <small> Keuntungan 02</small><br>
                            <small> Keuntungan 03</small><br>
                            <small> Keuntungan 04</small><br>
                            <small> Keuntungan 05</small><br>
                        </div>
                        <div class ="card-footer">
                            <h3>Rp 50.000</h3><hr><br>
                            <a href ="" class ="btn btn-primary"> Jadi premium sekarang</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class ="col-3"></div>
    </div>
@endsection
@endif
@if($LoggedUserInfo['jabatan'] != "umkm")
    @include('backend.404.index')
  @endif
