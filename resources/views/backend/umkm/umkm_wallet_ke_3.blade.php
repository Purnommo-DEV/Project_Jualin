@if($LoggedUserInfo['jabatan'] == "umkm")
@extends('backend.umkm.layout.header')
@section('title','UMKM Wallet')
@section('content')
    <!-- Main content -->
      <!-- Tengah -->
      <div class="container">
        <div class="kotak3">
            <img src="{{asset('foto/verifikasi.png')}}" alt="">
          </div>
          <div class="rumus8">
              <h1>Pembayaran kamu sedang diverifikasi sistem.
             </h1>
          </div>
          <div class="rumus9">
            <h2>Harap bersabar</h2>
          </div>
          <div class="tekan2">
            <a href="{{route('daftar_produk')}}">
            <button type="submit" class="btn btn-dark ">Kembali ke Dashboard</button>
            </a>
          </div>  
       </div>
     <!-- Akhir -->
        <!-- /.content -->
@endsection
@endif
@if($LoggedUserInfo['jabatan'] != "umkm")
    @include('backend.404.index')
    @endif
