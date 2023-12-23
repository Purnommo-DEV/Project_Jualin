@if($LoggedUserInfo['jabatan'] == "umkm")
@extends('backend.umkm.layout.header')
    @section('title','Konfirmasi Pembayaran')

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

                            <h3 class="profile-username text-center">Nina Mcintire</h3>

                            <p class="text-muted text-center">Software Engineer</p>

                            <ul class="list-group list-group-unbordered mb-3">
                                <li class="list-group-item">
                                    <b>Followers</b> <a class="float-right">1,322</a>
                                </li>
                                <li class="list-group-item">
                                    <b>Following</b> <a class="float-right">543</a>
                                </li>
                                <li class="list-group-item">
                                    <b>Friends</b> <a class="float-right">13,287</a>
                                </li>
                            </ul>

                            <a href="#" class="btn btn-primary btn-block"><b>Follow</b></a>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->

                    <!-- About Me Box -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">About Me</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <strong><i class="fas fa-book mr-1"></i> Education</strong>

                            <p class="text-muted">
                                B.S. in Computer Science from the University of Tennessee at Knoxville
                            </p>

                            <hr>

                            <strong><i class="fas fa-map-marker-alt mr-1"></i> Location</strong>

                            <p class="text-muted">Malibu, California</p>

                            <hr>

                            <strong><i class="fas fa-pencil-alt mr-1"></i> Skills</strong>

                            <p class="text-muted">
                                <span class="tag tag-danger">UI Design</span>
                                <span class="tag tag-success">Coding</span>
                                <span class="tag tag-info">Javascript</span>
                                <span class="tag tag-warning">PHP</span>
                                <span class="tag tag-primary">Node.js</span>
                            </p>

                            <hr>

                            <strong><i class="far fa-file-alt mr-1"></i> Notes</strong>

                            <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam
                                fermentum enim neque.</p>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->

                <div class="col-md-9">

                    <div class="row">
                        <div class="col">
                            <ul class="nav nav-pills">
                                <li class="nav-item"><a class="nav-link active" href="#activity"
                                        data-toggle="tab">Activity</a></li>
                                <li class="nav-item"><a class="nav-link" href="#timeline" data-toggle="tab">Timeline</a>
                                </li>
                                <li class="nav-item"><a class="nav-link" href="#settings" data-toggle="tab">Settings</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col">
                            <form class="form-inline my-2 my-lg-0">
                                <input class="form-control mr-sm-2" type="search" placeholder="Search"
                                    aria-label="Search">
                                <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Search</button>
                            </form>
                        </div>
                    </div>
                    <div class="row pl-3 pt-4">
                        <div class="col">
                                <button type="button" data-toggle="modal" data-target="#tmbProduk" class="btn btn-primary">Tambah Produk</button>
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
                            {{-- card dproduk --}}
                            {{-- akhir carddproduk --}}
                            @foreach ($daftar_produk as $daftar_produks)
                            @if($daftar_produks->umkm==$LoggedUserInfo['email'])
                            <div class="dproduk">

                                <div class="col-1">
                                    <img src="../adminlte/dist/img/mockup.jpg" alt="">

                                </div>
                                <div class="col-10">
                                    <div class="atas">
                                        <div class="row ">
                                            <div class="col-1">
                                                <i class="fas fa-shopping-bag"></i>
                                            </div>
                                            <div class="col-2 ">
                                                <h6>14 Maret</h6>
                                            </div>
                                            <div class="col-8">
                                                <h6>
                                                    INV/20211314/MPL/11013
                                                </h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tengah">
                                        <div class="row">
                                            <h3>{{$daftar_produks->nama_produk}}</h3>
                                        </div>
                                    </div>
                                    <div class="bawah">
                                        <div class="row">
                                            <div class="col-5">
                                                <h5>{{$daftar_produks->total_stok}}</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="deskripsi">
                                        <div class="row">
                                            <h3>Deskripsi Prouk</h3>
                                        </div>
                                        <div class="row">
                                            <p>{{$daftar_produks->deskripsi_produk}}</p>
                                        </div>

                                    </div>

                                </div>
                                <div class="col">
                                    <hr>
                                </div>
                                <div class="col">
                                    <div class="tombol">
                                        <a href="">
                                            <button type="button" class="btn btn-block ">Iklankan Produk</button>
                                        </a>

                                    </div>
                                    <div class="tombol2">
                                            <button type="button" value="{{ $daftar_produks->id }}"
                                                class="btn btn-primary editBtn">Edit
                                                Produk</button>
                                    </div>
                                    <div class="samping">
                                        <div class="row">
                                            <h3>Harga</h3>
                                        </div>
                                        <div class="row">

                                            <h3><span>@currency($daftar_produks->harga_produk),- /Item</span></h3>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            @else
                            @endif
                            @endforeach



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
<!-- /.content -->
</div>
</section>
<div class="modal fade" id="tmbProduk" tabindex="-1" aria-labelledby="tmbProduk1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Produk</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('backend_save_produk') }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    <input name="umkm" type="hidden" value="{{ $LoggedUserInfo['email'] }}">
                    <input name="status_verifikasi" type="hidden" value="Belum Di Verifikasi">
                    <div class="form-group">
                        <label>Nama Barang</label>
                        <input name="nama_produk" type="text" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Deskripsi Barang</label>
                        <input name="deskripsi_produk" type="text" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Harga Barang</label>
                        <input name="harga_produk" type="number" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Foto Barang</label>
                        <input name="fotoProduk" type="file" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Stok Barang</label>
                        <input name="total_stok" type="number" class="form-control">
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- /.content -->
</div>
<!-- /.content-wrapper -->

</div>
<div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Produk</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('backend_update_produk') }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <input name="id" id="id" type="hidden" class="form-control">
                    <div class="form-group">
                        <label>Nama Barang</label>
                        <input name="nama_produk" id="nama_produk" type="text" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Deskripsi Barang</label>
                        <input name="deskripsi_produk" id="deskripsi_produk" type="text" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Harga Barang</label>
                        <input name="harga_produk" id="harga_produk" type="number" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Stok Barang</label>
                        <input name="total_stok" id="total_stok" type="text" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Foto Barang</label>
                        <input name="foto_produk" id="foto_produk" type="file" class="form-control">
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
@endif
@if($LoggedUserInfo['jabatan'] != "umkm")
    @include('backend.404.index')
    @endif
