 <div class="dprodukatas">
                                        <div class="col">
                                            <a href="#">
                                            
                                            </a>
                                        </div>
                                    </div>
                                    @foreach($daftar_produk as $daftar_produks)
                                    @if($daftar_produks->umkm==$LoggedUserInfo['umkm'] && $daftar_produks->status_verifikasi=="Belum Di Verifikasi")
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
                    <h5>Sisa 1000 stok </h5>
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
        </div>
        <div class="tombol2">
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