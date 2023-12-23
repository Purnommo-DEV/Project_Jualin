@if($LoggedUserInfo['jabatan'] == "umkm")
@extends('backend.umkm.layout.header')
@section('title','Daftar Produk')
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
                                src="profile/{{ $LoggedUserInfo['foto'] }}"
                                alt="User profile picture">
                            </div>
                            
                            @if ($LoggedUserInfo['umkm'] == $akun_pro || $status_akun_pro)
                            <i class="fas fa-medal"></i>
                            <h3 class="profile-username text-center">Premium UMKM</h3>
                            @else
                            @endif
                            
                            <ul class="list-group list-group-unbordered mb-3">
                                <li class="list-group-item">
                                    <a href="" class="active">

                                        <i class="fas fa-money-bill"></i>
                                        <h6>My Wallet</h6>
                                        <h3>@currency($pendapatan) </h3>
                                    </a>
                                    <a href="">

                                        <i class="fas fa-box"></i>
                                        <h6>Total Produk</h6>
                                        <h3>{{$totalProduk}} Produk Terdaftar</h3>
                                    </a>
                                    <a href="">

                                        <i class="fas fa-cart-arrow-down"></i>
                                        <h6>Total Penjualan</h6>
                                        <h3>{{$totalProdukTerjual}} Produk Terjual</h3>
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

                            @if ($LoggedUserInfo['umkm'] == $akun_pro || $status_akun_pro)
                            @else
                            <a class="btn btn-primary btn-block" data-toggle="modal" href='#tblPremium'>
                                Premium UMKM
                            </a>
                            @endif
                        </div>
                        <div class="modal fade" id="tblPremium">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title">UMKM Premium</h4>
                                    </div>
                                    <div class="modal-body">
                                        <div class="row">
                                            <div class="col-6">
                                                <div class="col-sm">
                                                    <center><B>Jadi umkm premium sekarang dan dapatkan sejuta
                                                    keuntungan</B></center>
                                                    <div class="col-sm">
                                                        <img class="img-fluid"
                                                        src="{{ asset('foto/gbr.png') }}"
                                                        alt="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <Div class="card"
                                                style="background-color: cornflowerblue; color:white;">
                                                <div class="card-header">
                                                    <b>UMKM Premium</b><br>
                                                    <small>Benefit untuk anda</small>
                                                </div>
                                                <div class="card-body"
                                                style="background-color: cornflowerblue; color:white;">
                                                <small>Keuntungan 01</small><br>
                                                <small>Keuntungan 02</small><br>
                                                <small>Keuntungan 03</small><br>
                                                <small>Keuntungan 04</small><br>
                                                <small>Keuntungan 05</small><br>
                                            </div>
                                            <div class="card-footer"
                                            style="background-color: cornflowerblue; color:white;">
                                            <center>
                                                <h6><b>Rp 50.000/ 1 hari</b></h6>
                                            </center><br>
                                            <a class="btn btn-primary" href="{{route('backend_bayar_pengajuan_akun_premium',$LoggedUserInfo['id'])}}">Jadi Premium Sekarang</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary"
                            data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
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
                        <li class="nav-item"><a class="nav-link active" href="#dproduk"
                            data-toggle="tab">Produk</a></li>
                            <li class="nav-item"><a class="nav-link" href="#uproduk"
                                data-toggle="tab">Ulasan</a></li>
                                <li class="nav-item"><a class="nav-link" href="#dpencairan"
                                    data-toggle="tab">Transaksi</a></li>
                                     <li class="nav-item"><a class="nav-link" href="#blm_verifikasi"
                                    data-toggle="tab">Belum Verifikasi</a></li>
                                {{-- <li class="nav-item"><a class="nav-link" href="#bukti_verifikasi_pencairan_dana"
                                    data-toggle="tab">Bukti Verifikasi Pencairan Dana</a></li> --}}
                                </ul>
                            </div>
                            <div class="col" id="barang">

                            </div>
                        </div>
                    </div>
                    <div class="row pl-3 pt-4">
                        <div class="col">

                        </div>
                        <div class="col">

                        </div>

                        <div class="col">

                        </div>
                        {{-- card dproduk --}}

                        <div class="tab-content">
                            {{-- dproduk --}}
                            <div class="active tab-pane" id="dproduk">
                             @include('backend.umkm.list_menu_daftar_produk.produk')
                         </div>

                        
                         <div class="tab-pane" id="uproduk">
                             @include('backend.umkm.list_menu_daftar_produk.ulasan')
                         </div>
                     </div>

                     <div class="tab-pane" id="dpencairan">
                         @include('backend.umkm.list_menu_daftar_produk.transaksi')
                     </div>
                 
                   <div class="tab-pane" id="blm_verifikasi">
                         @include('backend.umkm.list_menu_daftar_produk.belum_verifikasi')
                     </div>
                    <div class="tab-pane" id="bukti_verifikasi_pencairan_dana">
                         @include('backend.umkm.list_menu_daftar_produk.bukti_verifikasi_pencairan_dana')
                     </div>
                 {{-- akhir dpencairan --}}
             </div>
             {{-- akhir card produk --}}
         </div>
     </div>
 </div>
 <!-- /.col -->
</div>
<!-- /.row -->
</div><!-- /.container-fluid -->
<div class="modal fade" id="tmbProduk" tabindex="-1" aria-labelledby="tmbProduk1" aria-hidden="true">
    <div class="modal-dialog modal-xl ">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Data Produk</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
               <form action="{{ route('backend_save_produk') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <input name="umkm" type="hidden" value="{{ $LoggedUserInfo['umkm'] }}">
                <input name="status_verifikasi" type="text" value="Belum Di Verifikasi" hidden>
                <div class="row">
                    <div class="col-6">
                     
                        <input type ="text" name="status_notifikasi" value ="belum aksi" hidden>
                        <div class="form-group">
                            <label>Nama Barang</label>
                            <input name="nama_produk"  type="text" class="form-control" placeholder="Tuliskan Nama Barang">
                        </div>
                        <div class="form-group">
                              <label>Kategori Barang</label>
                            <select class="form-control" name="kategori">
                                <option>--Pilih Kategori--</option>
                                @foreach($kategori as $data)
                                <option value="{{ $data->kategori }}">{{ $data->kategori }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Harga Barang</label>
                            <input name="harga_produk" placeholder="Harga Jual Produk" type="number" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Stok Barang</label>
                            <input name="total_stok" type="number" class="form-control" placeholder="Stok Barang yang akan Di Input">
                        </div>
                        <div class="form-group">
                            <label>Ukuran Barang</label>
                            <input name="ukuran" type="text" class="form-control" placeholder="Panjang x Lebar">
                        </div>
                        <div class="form-group">
                            <label>Berat Barang</label>
                            <input name="berat" type="text" placeholder="Contoh : 1 kg, 0,5 kg" class="form-control">
                        </div>
                      <input name="status_notifikasi" type="hidden" value="belum aksi">
                      <input name="status_verifikasi" type="hidden" value="Belum Di Verifikasi">
                      <input name="pemberitahuan" type="hidden" value="Produk telah di tambah oleh umkm">
                      <input name="umkm" type="hidden" value="{{$LoggedUserInfo['umkm']}}">
                    </div>
                    <div class="col-4">

                        <div class="form-group">
                            <label>Foto Normal</label>
                            <div id ="preview_normal"  class ="mb-1"></div>
                            <input name="foto_produk1" onchange="Image_normal(event)" type="file">
                        </div>
                        <div class="form-group">
                            <label>Foto Atas</label>
                            <div id ="preview_atas"  class ="mb-1"></div>
                            <input name="foto_produk2" onchange="Image_atas(event)" type="file">
                        </div>
                        <div class="form-group">
                            <label>Foto Bawah</label>
                            <div id ="preview_bawah"  class ="mb-1"></div>
                            <input name="foto_produk3" onchange="Image_bawah(event)" type="file">
                        </div>
                        <div class="form-group">
                            <label>Foto Kanan</label>
                            <div id ="preview_kanan"  class ="mb-1"></div>
                            <input name="foto_produk4" onchange="Image_kanan(event)" type="file">
                        </div>
                        <div class="form-group">
                            <label>Foto kiri</label>
                            <div id ="preview_kiri"  class ="mb-1"></div>
                            <input name="foto_produk5" onchange = "Image_kiri(event)" type="file">
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <label>Deskripsi Barang</label>
                            <textarea placeholder="(Kualitas Produknya Seperti apa)" class="form-control" style="height: 200px;" name="deskripsi_produk" type="text" class="form-control"></textarea>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary toastrDefaultSuccess">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->
<div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModal" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Data Produk</h5>
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
                <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                            <label>Nama Barang</label>
                            <input name="nama_produk" id="nama_produk" type="text" class="form-control">
                        </div>
                        <div class="form-group">
                                <label>Kategori Barang</label>
                            <select class="form-control" name="kategori" id="kategori">
                                @foreach($kategori as $data)
                                <option value="{{ $data->kategori }}">{{ $data->kategori }}</option>
                                @endforeach
                            </select>
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
                            <label>Ukuran Barang</label>
                            <input name="ukuran" id="ukuran" type="number" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Berat Barang</label>
                            <input name="berat" id="berat" type="number" class="form-control">
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="form-group">
                            <label>Foto Normal</label>
                            <input name="foto_produk1" onchange="getImagePreview(event)"  id="foto_produk1" type="file">
                        </div>
                        <div class="form-group">
                            <label>Foto Kiri</label>
                            <input name="foto_produk2" id="foto_produk2" type="file">
                        </div>
                        <div class="form-group">
                            <label>Foto Kanan</label>
                            <input name="foto_produk3" id="foto_produk3" type="file">
                        </div>
                        <div class="form-group">
                            <label>Foto Atas</label>
                            <input name="foto_produk4" id="foto_produk4" type="file">
                        </div>
                        <div class="form-group">
                            <label>Foto Bawah</label>
                            <input name="foto_produk5" id="foto_produk5" type="file">

                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <label>Deskripsi Barang</label>
                            <textarea  id="deskripsi_produk" name="deskripsi_produk" type="text" class="form-control"></textarea>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>

<script type="text/javascript">
    function Image_normal(event){
    var image = URL.createObjectURL(event.target.files[0]);
    var imagediv = document.getElementById('preview_normal');
    var newimg = document.createElement('img');
    newimg.src = image;
    newimg.width = 100;
    newimg.height = 100;
    imagediv.appendChild(newimg);
  }

    function Image_atas(event){
    var image = URL.createObjectURL(event.target.files[0]);
    var imagediv = document.getElementById('preview_atas');
    var newimg = document.createElement('img');
    newimg.src = image;
    newimg.width = 100;
    newimg.height = 100;
    imagediv.appendChild(newimg);
  }
    function Image_bawah(event){
    var image = URL.createObjectURL(event.target.files[0]);
    var imagediv = document.getElementById('preview_bawah');
    var newimg = document.createElement('img');
    newimg.src = image;
    newimg.width = 100;
    newimg.height = 100;
    imagediv.appendChild(newimg);
  }
    function Image_kanan(event){
    var image = URL.createObjectURL(event.target.files[0]);
    var imagediv = document.getElementById('preview_kanan');
    var newimg = document.createElement('img');
    newimg.src = image;
    newimg.width = 100;
    newimg.height = 100;
    imagediv.appendChild(newimg);
}
function Image_kiri(event){
    var image = URL.createObjectURL(event.target.files[0]);
    var imagediv = document.getElementById('preview_kiri');
    var newimg = document.createElement('img');
    newimg.src = image;
    newimg.width = 100;
    newimg.height = 100;
    imagediv.appendChild(newimg);
}
</script>
@endsection
@endif
@if($LoggedUserInfo['jabatan'] != "umkm")
@include('backend.404.index')
@endif
