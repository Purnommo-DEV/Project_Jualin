@if($LoggedUserInfo['jabatan'] == "user_pengguna")
@extends('backend.umum.layout.header')
@section('title','Review Produk & Driver')
@section('content')

<div class ="container mt-3">
    <div class ="card">
        <div class = "card-header">
            <center><B>REVIEW PRODUK</B></center>
        </div>
    </div>
    <div class="card">
        <div class ="card-header">
            <div class ="row">
                <div class ="col-1">
                    <div class="brang8">
                        <h1>Nama Barang</h1>
                    </div>
                </div>
                <div class ="col-2">
                    <div class="wktublnja2">
                    <i class="fas fa-shopping-bag"></i>
                    <h1>Waktu Belanja : 14 Maret 2021</h1>
                    </div>
                   </div>
                <div class ="col-3">
                    <div class="nomorresi3">
                        <h1>INV/20210314/MPL/11013543136</h1>
                    </div>
                </div>
                <div class ="col-3">
                    <div class="tibe2">
                        <h1>(Tiba pada : 23 maret 2021)</h1>
                    </div>
                </div>
                <div class ="col-3">
                    <div class="buying2">
                        <h1>Penjual</h1>
                    </div>
                  </div>
            </div>
        </div>
        <div class ="card-body">
            <div class ="row">
                <div class ="col-sm-4">
                    <div class ="row">
                        <div class ="col-sm-3">
                            <img src ="../foto_produk/{{$keranjang->produk->foto_produk1}}" width="60px" height="60px">
                        </div>
                        <div class ="col-sm-9">
                            <div class="kmsan2">
                            <h2>{{$keranjang->produk->nama_produk}}</h2>
                            <h3>1 barang @currency($keranjang->produk->harga_produk),-</h3>
                            </div>
                         </div>
                    </div>
                </div>
                <div class ="col-sm-2">
                    <div class="totalblanja2">
                        <h2>Total Belanja</h2>
                    @php
                        $total = $keranjang->harga_produk * $keranjang->kuantitas
                    @endphp
                       <h3>@currency($total),-</h3>
                    </div>
                 </div>
                <div class ="col-sm-2">
                    <div class="totalkntitas2">
                        <h2>Total Kuantitas</h2>
                       <h3>{{$keranjang->kuantitas}} item</h3>
                    </div>
                 </div>
                <div class ="col-sm-4">
                    <div class ="row">
                        <div class ="col-sm-3">
                            <div class="bmrsepok2">
                                <img src ="" width="50px" height="50px">
                            </div>
                        </div>
                        <div class ="col-sm-9">
                            <div class="masan2">
                                <h2>{{$keranjang->umkm}}</h2>
                                <h3>Pontianak Kota</h3>
                            </div>
                         </div>
                    </div>
                </div>
            </div>
        </div>
        <form action="{{route('tambah_review_produk_driver')}}" method="post" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="id_produk" value="{{$keranjang->produk_id}}">
            <input type="hidden" name="id_user" value="{{$keranjang->user_id}}">
            <input type="hidden" name="umkm" value="{{$keranjang->umkm}}">
            <input type="hidden" name="kuantitas" value="{{$keranjang->kuantitas}}">
        <div class ="card-footer">
            <div class ="row">
                <div class ="col-sm-2">
                    <div class="nilaiklitas2">
                        <div class="rating-css">
                        <div class="star-icon">
                            <input type="radio" value="1" name="rating" checked id="rating1">
                            <label for="rating1" class="fa fa-star"></label>
                            <input type="radio" value="2" name="rating" id="rating2">
                            <label for="rating2" class="fa fa-star"></label>
                            <input type="radio" value="3" name="rating" id="rating3">
                            <label for="rating3" class="fa fa-star"></label>
                            <input type="radio" value="4" name="rating" id="rating4">
                            <label for="rating4" class="fa fa-star"></label>
                            <input type="radio" value="5" name="rating" id="rating5">
                            <label for="rating5" class="fa fa-star"></label>
                        </div>
                        </div>
                    </div>
                </div>
                <div class ="col-sm-8">
                    <div class="berreview2">
                        <h4>Berikan Review</h4>
                    </div>
                        <div class="form-floating">
                            <div class="catatan">
                                <textarea name="isi_review" class="form-control" placeholder="Masukan Alasan" id="floatingTextarea2" >
                                </textarea>
                            </div>
                         <label for="floatingTextarea2"></label>
                     </div>
                </div>
                <div class ="col-sm-2">
                    <div class="kirimfotop2">
                        <h4>Kirim Foto Produk</h4>
                    </div>
                    <div class="flifoto2">
                        <input type ="file" name ="foto_produk" value ="kirim foto">
                    </div>
                   <div class="plih2">
                       {{-- <h4>(Pilih foto file kamu)</h4> --}}
                   </div>
                </div>
            </div>
        </div>
        <input type="submit" class="btn btn-primary btn-block" value ="Konfirmasi">
        </form>
    </div>
    <div class =""></div>
    <div class ="card">
        <div class = "card-header">
            <center><B>REVIEW DRIVER</B></center>
        </div>
    </div>
    <div class ="row">
        <div class ="col-sm-3">
            <div class ="card">
                <div class ="card-header">
                    <b>Driver</b>
                </div>
                <div class="bilik2">
                    <div class ="card-body">
                        <div class ="row">
                            <div class ="col-sm-3">
                                <div class="gelas2">
                                    <img src="" width="50px" height="50px">
                                </div>
                            </div>
                            <div class ="col-sm-9">
                                <div class="nma2">
                                 <h5>Mardani Mardan</h5>
                                <h6>KB 1234 BK</h6>
                                </div>
                            </div>
                        </div>
                        <div class="rtingdrv2">
                            <h5>Berikan Rating Driver</h5>
                        </div>
                        <div style="height: 10px;">
                            <small>
                                <i class ="fa fa-star"></i>
                                <i class ="fa fa-star"></i>
                                <i class ="fa fa-star"></i>
                                <i class ="fa fa-star"></i>
                                <i class ="fa fa-star"></i>
                            </small></div>

                    </div>
                </div>


            </div>
        </div>
        <div class ="col-sm-9">
            <div class ="card">
                <div class ="card-body">
                    <div class ="row">
                        <Div class ="col-3">
                            <div class="ygdiantar2">
                                <h5>Barang yang diantarkan</h5>
                            </div>
                        </Div>
                        <Div class ="col-3">
                            <div class="wktublnja3">
                            <i class="fas fa-shopping-bag"></i>
                            <h5>Waktu belanja : 14 Maret 2021</h5>
                            </div>
                        </Div>
                        <Div class ="col-3">
                            <div class="nomorresi5">
                                <h5>INV/20210314/MPL/11013543136</h5>
                            </div>
                        </Div>
                        <Div class ="col-3">
                            <div class="tibe3">
                                <h5>(Tiba pada : 23 maret 2021)</h5>
                            </div>
                          </Div>
                    </div>
                    <div style="height: 15px"></div>
                    <div class ="row">
                        <div class ="col-sm-6">
                            <div class ="row">
                                <div class ="col-3">
                                    <div class="gelas3">
                                        <img src ="" width="60px" height="60px">
                                    </div>
                                </div>
                                <div class ="col-9">
                                    <div class="kmsan3">
                                        <h5>Sepok Kopi Pakmpong - Kemasan 100 gram</h5>
                                    <h6>1 barang Rp 13.000</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class ="col-sm-3">
                            <div class="totalblanja3">
                                <h5>Total Belanja</h5>
                            <h6>Rp 100.000,-</h6>
                            </div>
                        </div>
                        <div class ="col-sm-3">
                            <div class="totalkntitas3">
                                <h5>Total Kuantitas</h5>
                            <h6>100 item</h6>
                            </div>
                         </div>
                    </div>
                    <div style="height: 20px;"></div>
                    <b>Berikan Review</b><br>
                    <div class="form-floating">
                        <div class="catatan3">
                            <textarea class="form-control" placeholder="Masukan Alasan" id="floatingTextarea2" >
                            </textarea>
                        </div>
                        <label for="floatingTextarea2">Masukkan Alasan</label>
                     </div>
                </div>
                <input type="button" class ="btn btn-primary" value ="Konfirmasi">
            </div>
        </div>
    </div>
</div>
@endsection
@endif
@if($LoggedUserInfo['jabatan'] != "user_pengguna")
    @include('backend.404.index')
@endif