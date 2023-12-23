@if($LoggedUserInfo['jabatan'] =="umkm")
@extends('backend.umkm.layout.header')
@section('title','Biaya Pendaftaran Ke 2')
@section('content')

      <div class="container">
        <div class="kotak2">
            <img src="{{asset('foto/wait.png')}}" alt="">
          </div>
          <div class="rumus6">
              <h1>Data UMKM anda sedang diverifikasi, kamu belum 
             </h1>
          </div>
          <div class="rumus7">
            <h2>dapat mengakses dashboard UMKM. Mohon menunggu.</h2>
          </div>
          <div class="tekan1">
            <a href="{{route('backend_umkm')}}" class="btn btn-dark ">Kembali ke Beranda</a>
          </div>  
       </div>
@endsection
@endif
@if($LoggedUserInfo['jabatan'] != "umkm")
    @include('backend.404.index')
    @endif

