 <div class="uproduk">
@foreach ($ulasan as $ulasans)
@if($ulasans->umkm == $LoggedUserInfo['umkm'])
        <div class="dproduk">
            <div class="col-1">
                <img src="foto_produk/{{ $ulasans->foto_produk1}}" alt="">
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
                        <h3>{{$ulasans->nama_produk}}</h3>
                    </div>
                </div>
                <div class="bawah">
                    <div class="row">
                        <div class="col-5">
                            <h6>Sisa {{$ulasans->total_stok}} stok </h6>
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
                        <h3>Deskripsi Prouk</h3>
                    </div>
                    <div class="row">
                        <p>{{$ulasans->deskripsi_produk}}
                        </p>
                    </div>

                </div>

            </div>
            <div class="col">
                <hr>
            </div>
            <div class="col">

                <div class="tombolu">
                    <a href="">
                        <button type="button" class="btn btn-block btn-outline-primary ">Lihat Semua
                            Review</button>
                    </a>
                </div>
                <div class="sampingu">
                    <div class="row">
                        <h3>Total Review</h3>
                    </div>
                    <div class="row">

                        <h3><span> </span></h3>
                    </div>
                </div>

            </div>        
        </div>
        @else
        {{-- Belum ada Review Produk --}}
        @endif
@endforeach