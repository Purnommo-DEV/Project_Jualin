
<div class="pencairan">
@if($LoggedUserInfo['status_profil']==1 && $LoggedUserInfo['username'] == $verifikasi_umkm->username && $verifikasi_umkm->status == 'Telah Di Verifikasi')
        {{-- ajukan --}}
        <section id="ajukan" class="ajukan">
            <div class="container">
                <div class="col">
                    <div class="produkt">
                        <div class="row">
                            <h3>{{$totalProdukTerjual}}</h3>

                        </div>
                        <div class="row">
                            <h5>Produk Terjual</h5>
                        </div>
                        <div class="row">
                            <i class="fas fa-arrow-down"></i>
                            <h6><span>3,46%</span> Since last month</h6>
                        </div>
                    </div>
                </div>
                <div class="col-2">
                    <img src="../adminlte/dist/img/kotak.png" alt="">
                </div>
                <div class="col-3">
                    <a href="{{route('umkm_wallet',$LoggedUserInfo['umkm'])}}">
                        <button type="button" class="btn btn-primary">Ajukan
                            Pencairan</button>
                    </a>
                </div>
            </div>
        </section>
        {{-- akhir ajukan --}}
        {{-- bawah ajukan --}}
        <section id="bajukan" class="bajukan">
            <div class="container">
                <div class="row">
                    <div class="col-md-7 ">
                        <div class="dropdown">
                            <button class="btn btn-transparent dropdown-toggle" type="button" id="dropdownMenuButton"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Filter Jenis Barang Atau Jasa
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5">
                <div class="kalender">
                    <input type="date" name="dateofbirth" id="dateofbirth">
                </div>
            </div>
            </div>
        </div>  

        </section>
        
        @else
         {{-- Setelah Akun anda di Verifikasi, silahkan untuk melakukan Update Profil, Terima Kasih --}}
        @endif
        {{-- akhir bawah ajukan --}}
        {{-- card dproduk --}}
        {{-- akhir carddproduk --}}
        @foreach ($ulasan as $ulasans)
        @if($ulasans->umkm == $LoggedUserInfo['umkm'])
        <div class=" dpencairan">
            <div class="atas">
                <div class="row ">
                    <div class="col-1">
                        <i class="fas fa-shopping-bag"></i>
                    </div>
                    <div class="col-2 ">
                        <h6>Belanja</h6>
                    </div>
                    <div class="col-2 ">
                        <h6>14 Maret</h6>
                    </div>
                    <div class="col-3">
                        <h6>
                            INV/20211314/MPL/11013
                        </h6>
                    </div>
                    <div class="col-3">
                        <h6>
                            (Tiba pada : 23 Mar 2021)
                        </h6>
                    </div>
                    <div class="col-3">
                        <h6>
                            <span>
                                Berhasil Sampai
                            </span>
                        </h6>
                    </div>
                </div>
            </div>
            <div class="col-1">
               <img src="foto_produk/{{ $ulasans->foto_produk1}}" alt="">
            </div>
            <div class="isi">
                <div class="col-4">

                    <div class="tengah">
                        <div class="row">
                            <h3>{{$ulasans->nama_produk}}</h3>
                        </div>
                    </div>
                    <div class="bawah">
                        <div class="row">
                            <div class="col-5">
                                <h6>{{$ulasans->kuantitas}} barang x @currency($ulasans->harga_produk),- </h6>
                                @php
                                 $total_pemeblian = $ulasans->kuantitas * $ulasans->harga_produk
                                @endphp
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-3">

                    <div class="tengah">
                        <div class="row">
                            <h3>Total Belanja </h3>
                        </div>
                    </div>
                    <div class="bawah">
                        <div class="row">

                            <h6>@currency($total_pemeblian)</h6>


                        </div>
                    </div>
                </div>
                <div class="col-5">

                    <div class="tengah">
                        <div class="row">
                            <h3>Pembagian Hasil </h3>
                        </div>
                    </div>
                    <div class="bawah">
                        <div class="row">

                            <h6>Rp. 10.000</h6>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        @else
        {{-- Belum ada Transaksi --}}
        @endif
        @endforeach
    </div>