@extends('layout.header')

@section('content')
    <div class="container text-center">
        <div class="logo-404">
            <a href="index.html"><img src="{{asset('eshopper/images/home/logo.png')}}" alt="" /></a>
        </div>
        <div class="content-404">
            <img src="{{asset('eshopper/images/404/404.png')}}" class="img-responsive" width="400px" height="400px" alt="" />
            <p>Pembayaran kamu sedang diverifikasi sistem. Harap bersabar</p>
            <a href="index.html" class ="btn btn-primary">kembali ke beranda</a>
        </div>
    </div>
@endsection
