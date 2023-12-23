@if($LoggedUserInfo['jabatan'] =="umkm")
@extends('backend.umkm.layout.header')
@section('title','Edit Profile UMKM')

@section('content')
<!-- Main content -->
<div class="container">
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3">

                    <!-- Profile Image -->
                    <div class="card card-primary card-outline">
                        <div class="card-body box-profile">
                            <div class="text-center">
                                <img class="profile-user-img img-fluid img-circle"
                                    src="../../dist/img/user4-128x128.jpg" alt="User profile picture">
                            </div>
                            <i class="fas fa-medal"></i>
                            <h3 class="profile-username text-center">Premium UMKM</h3>



                            <ul class="list-group list-group-unbordered mb-3">
                                <li class="list-group-item">
                                    <a href="" class="active">

                                        <i class="fas fa-money-bill"></i>
                                        <h6>My Wallet</h6>
                                        <h3>Rp.1000.000</h3>
                                    </a>
                                    <a href="">

                                        <i class="fas fa-box"></i>
                                        <h6>Total Produk</h6>
                                        <h3>Rp.1000 Produk Terdaftar</h3>
                                    </a>
                                    <a href="">

                                        <i class="fas fa-cart-arrow-down"></i>
                                        <h6>Total Penjualan</h6>
                                        <h3>Rp.1000 Produk Terjual</h3>
                                    </a>
                                    <a href="">

                                        <i class="fas fa-money-bill"></i>
                                        <h6>My Wallet</h6>
                                        <h3>Rp.1000.000</h3>
                                    </a>
                                    <a href="">

                                        <i class="fas fa-check-square"></i>
                                        <h6>Nilai Kualitas Produk</h6>
                                        <div class="row">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                        <div class="row">
                                            <h6><span>4.05</span>(10.0000 Ulasan Pelanggan)</h6>
                                        </div>
                                    </a>
                                </li>

                            </ul>

                            <a href="#" class="btn btn-primary btn-block"><b>Daftar Jadi Premium UMKM</b></a>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->


                </div>
                <!-- /.col -->

                <div class="col-md-9">
                    <div class="natas">
                        <div class="row">
                            <div class="cola">
                                <ul class="nav nav-pills">
                                    <li class="nav-item"><a class="nav-link active" href="" data-toggle="tab">Produk</a>
                                    </li>
                                    <li class="nav-item"><a class="nav-link" href="" data-toggle="tab">Ulasan</a></li>
                                    <li class="nav-item"><a class="nav-link" href="" data-toggle="tab">Transaksi</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col">
                                <form class="form-inline my-2 my-lg-0">
                                    <input class="form-control mr-sm-2" type="search" placeholder="Search"
                                        aria-label="Search">
                                    <button class="btn btn-outline-primary my-2 my-sm-0" type="submit"><i
                                            class="fas fa-search"></i></button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="row pl-3 pt-4">
                        <div class="col">
                            <a href="#">
                                <button type="button" data-toggle="modal" data-target="#tmbProduk"
                                    class="btn btn-primary">Tambah Produk</button>
                            </a>
                        </div>
                        <div class="col">
                            <h5>Ada 1000 produk</h5>
                        </div>

                        <div class="col">
                            <div class="dropdown">
                                <button class="btn btn-transparent dropdown-toggle" type="button" id="dropdownMenu2"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Dropdown
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                                    <button class="dropdown-item" type="button">Action</button>
                                    <button class="dropdown-item" type="button">Another action</button>
                                    <button ton class="dropdown-item" type="button">Something else here</button>
                                </div>
                            </div>
                            <div class="dproduk">

                                <div class="modal-body">
                                    <form action="{{ route('backend_umkm_update_profile',$LoggedUserInfo['id']) }}" method="POST"
                                        enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-group">
                                            <label>Username</label>
                                            <input name="username" type="text" class="form-control" value="{{ $LoggedUserInfo['username'] }}">
                                        </div>
                                        <div class="form-group">
                                            <label>Email</label>
                                            <input name="email" type="text" class="form-control" value="{{ $LoggedUserInfo['email'] }}">
                                        </div>
                                        <div class="form-group">
                                            <label>UMKM</label>
                                            <input name="umkm" type="text" class="form-control" value="{{ $LoggedUserInfo['umkm'] }}">
                                        </div>
                                        <div class="form-group">
                                            <label>Nomor HP</label>
                                            <input name="nomor_hp" type="number" class="form-control" value="{{ $LoggedUserInfo['nomor_hp'] }}">
                                        </div>
                                        <div class="form-group">
                                            <label>Password</label>
                                            <input name="password" type="text" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Foto Profil</label>
                                            <input name="foto" type="file" class="form-control">
                                        </div>
                                            <input name="status_profil" type="hidden" value="1" class="form-control">
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                    </form>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                {{--  <!-- /.card-header -->
                            <div class="card-body">
                                <div class="tab-content">
                                    <div class="active tab-pane" id="activity">
                                </div>
                                <!-- /.tab-content -->

                            </div><!-- /.card-body -->
                        </div>  --}}

                <!-- /.card -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
</div><!-- /.container-fluid -->
</section>
</div>
<!-- /.content-wrapper -->
@endsection
@endif
@if($LoggedUserInfo['jabatan'] != "umkm")
    @include('backend.404.index')
    @endif
