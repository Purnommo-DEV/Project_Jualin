@extends('layout.header')

@section('content')
    <div class ="container">
        <a href ="" class ="btn btn-primary"><small><i class="fa fa-arrow-left"></i> Kembali</small></a>
        <div style="height: 40px;"></div>
        <div class ="row">
            <div class ="col-sm-2"></div>
            <div class ="col-sm-8">
                <div class ="row">
                    <div class ="col-sm-4">
                        <div style="height: 100px;"></div>
                        <div class ="row  mb-5">
                            <div class ="col-sm-3">
                                <img src="{{asset('eshopper/images/product-details/1.jpg')}}" width="50px" height="50px">
                            </div>
                            <div class ="col-sm-9">
                                <small style="font-size: 10px;"><b>Sepok Kopi Pekampung - Kemasan 100 gram</b></small><br>
                                <small style="font-size: 10px;"> 1 barang x Rp 13.000</small>
                            </div>
                        </div>
                    </div>
                    <div class ="col-sm-4">
                        <div class="product-image-wrapper">
                            <div class="single-products">
                                <div class="productinfo ">
                                    <img src="{{asset('eshopper/images/home/gallery3.jpg')}}" alt="" />
                                    <div style="height: 10px;"></div>
                                    <h5><a href="{{route('detail_produk')}}">Kopi Sepok Kemasan</a></h5>
                                    <span><small>Toko Budi</small></span><br>
                                    <span><small>Diskon 25%</small></span>
                                    <div class="product-price">
                                        <span>Rp 13.500/Item</span>
                                    </div>
                                    <span>
                                                        <small>
                                        <i class = "fa fa-star checked1"></i>
                                        <i class = "fa fa-star checked2"></i>
                                        <i class = "fa fa-star checked3"></i>
                                        <i class = "fa fa-star checked4" ></i>
                                        <i class = "fa fa-star checked5"></i>
                                        (Terjual)
                                    </small>
                                                    </span>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class ="col-sm-4">
                        <div class ="card p-3">

                            <h3><b>UMKM Premium</b></h3>
                            <Div style="height: 10px;"></Div>
                            <small>Benefit untuk anda</small>
                            <div style="height: 15px;"></div>
                            <small>Keuntungan 01</small>
                            <div style="height: 10px;"></div>
                            <small>Keuntungan 02</small>
                            <div style="height: 10px;"></div>
                            <small>Keuntungan 03</small>
                            <div style="height: 10px;"></div>
                            <small>Keuntungan 04</small>
                            <div style="height: 10px;"></div>
                            <small>Keuntungan 05</small>
                            <div style="height: 20px;"></div>
                            <h3><center>Rp 50.000</center></h3>
                            <div style="height: 20px;"></div>
                            <a href="" class ="btn btn-primary"><small>Jadi Premium Sekarang</small></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class ="col-sm-2"></div>
        </div>
    </div>
@endsection
