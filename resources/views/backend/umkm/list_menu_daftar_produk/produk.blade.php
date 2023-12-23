 <div class="dprodukatas">
    <div class="col">
            @if($LoggedUserInfo['status_profil']==1)
            <button type="button" data-toggle="modal" data-target="#tmbProduk"
            class="btn btn-primary">Tambah Produk</button>
            @else
            <div class="dproduk" style="border:none">
                <div class="col-8">
                <h6 style="color:black; text-align:center;">
                    Setelah Akun anda di Verifikasi, silahkan untuk melakukan Update Profil, Terima Kasih
                    </h6>
                </div>
                <div class="col">
                </div>
            </div>
            @endif
        </a>
    </div>
</div>
@foreach($daftar_produk as $daftar_produks)
@if($daftar_produks->umkm==$LoggedUserInfo['umkm'] && $daftar_produks->status_verifikasi=="Telah Di Verifikasi")
<div class="dproduk">
    <div class="col-1">
        <img src="foto_produk/{{ $daftar_produks->foto_produk1}}" alt="">
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
                <h3>{{ $daftar_produks->nama_produk}}</h3>
            </div>
        </div>
        <div class="bawah">
            <div class="row">
                <div class="col-5">
                    <h6>Sisa {{ $daftar_produks->total_stok}} stok </h6>
                </div>
                <div class="col-5">
                    <h5></h5>
                </div>
                <div class="col-4">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
            </div>
        </div>
        <div class="deskripsi">
            <div class="row">
                <h3>Deskripsi Produk</h3>
            </div>
            <div class="row">
                <p>{!! $daftar_produks->deskripsi_produk!!}</p>
            </div>
        </div>
    </div>
    <div class="col">
        <hr>
    </div>
    <div class="col">
        <div class="tombol">
            <a class="" data-toggle="modal" href='#iklankanProduk-{{ $daftar_produks->id}}'>
                <button type="button" class="btn btn-block ">Iklankan
                Produk</button>
            </a>
        </div>
        <div class="modal fade" id="iklankanProduk-{{ $daftar_produks->id}}">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Iklan Produks</h4>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="row">
                                    <div class="col-3">
                                        <img src="foto_produk/{{ $daftar_produks->foto_produk1}}" width="50px" height="50px">
                                    </div>
                                    <div class="col-9">
                                        <small><b>{{ $daftar_produks->nama_produk}}</b></small><br>
                                        <small>Pontianak Kota</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="card" style="border-radius: 0px;">
                                    <div class="card-body"
                                    style="margin: -20px;">
                                    <img src="foto_produk/{{ $daftar_produks->foto_produk1}}"
                                    width="100%" height="120px"><br>
                                    <div style="margin: 10px;">
                                        <small>{{ $daftar_produks->nama_produk}}</small><br>
                                        <small style="color:darkorange;"><i class="fa fa-store"></i>
                                            {{ $daftar_produks->umkm}}</small><br>
                                            <small style="color: orange">Diskon10%</small><br>
                                            <small><b>@currency($daftar_produks->harga_produk), - /Item</b></small><br>
                                            <small>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>

                                            (Terjual)</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <Div class="card" style="background-color: cornflowerblue; color:white;">
                                    <div class="card-header">
                                        <b>Iklan Produk</b><br>
                                        <small>Benefit untuk anda</small>
                                    </div>
                                    <div class="card-body">
                                        <small>Keuntungan 01</small><br>
                                        <small>Keuntungan 02</small><br>
                                        <small>Keuntungan 03</small><br>
                                        <small>Keuntungan 04</small><br>
                                        <small>Keuntungan 05</small><br>
                                    </div>
                                    <div class="card-footer">
                                        <h3><b>Rp 50.000/ 1 hari</b></h3><br>
                                        <a href="{{route('backend_bayar_iklan_produk',$daftar_produks->id)}}" class="btn btn-primary w-100">Bayar Sekarang</a>
                                    </div>
                                </div>
                                <div class="col-sm-2"></div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">

                    </div>
                </div>
            </div>
        </div>
        <div class="tombol2">
            <button type="button" value="{{ $daftar_produks->id }}"
                class="btn btn-primary editBtn">Edit Produk
            </button>
        </div>
        <div class="samping">
            <div class="row">
                <h3>Harga</h3>
            </div>
            <div class="row">
                <h3><span>@currency($daftar_produks->harga_produk), - /Item</span></h3>
            </div>
        </div>
    </div>
</div>
@else
@endif
@endforeach