@if($LoggedUserInfo['jabatan'] == "user_pengguna")
@extends('backend.umum.layout.header')
@section('title','Profil Umum')
@section('content')
    <div class ="container">
        <div class="card">
            <div class="card-header p-2">
                <div class="tombolgeser">
                    <ul class="nav nav-pills">
                        <li class="nav-item"><a class="nav-link active" href="#profile" data-toggle="tab">Profile</a></li>
                        <li class="nav-item"><a class="nav-link" href="#status_pengiriman" data-toggle="tab">Status Pengiriman</a></li>
                        <li class="nav-item"><a class="nav-link" href="#history_transaksi" data-toggle="tab">Histori Transaksi</a></li>
                        <li class="nav-item"><a class="nav-link" href="#return_barang" data-toggle="tab">Retur Barang</a></li>
                        <li class="nav-item"><a class="nav-link" href="#return_barang" data-toggle="tab">Pengaturan Akun</a></li>
                    </ul>
                </div>

            </div><!-- /.card-header -->
            <div class="card-body">
                <div class="tab-content">
                    <div class="active tab-pane" id="profile">
                        @include('backend.umum.profile.umum_profile_saya')
                    </div>
                    <!-- /.tab-pane -->
                    <div class="tab-pane" id="status_pengiriman">
                        @include('backend.umum.profile.umum_status_pengiriman')
                    </div>
                    <div class="tab-pane" id="history_transaksi">
                        @include('backend.umum.profile.umum_histori_transaksi')
                    </div>
                    <div class="tab-pane" id="return_barang">
                        @include('backend.umum.profile.umum_return_barang')
                    </div>
                    <!-- /.tab-pane -->
                </div>
                <!-- /.tab-content -->
            </div><!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
@endsection
@endif
@if($LoggedUserInfo['jabatan'] != "user_pengguna")
    @include('backend.404.index')
@endif