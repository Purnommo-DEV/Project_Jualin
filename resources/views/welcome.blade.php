@extends('layout.header')

@section('content')
    <section id="slider" ><!--slider-->
        <div class="container" style="">
            <div class="row">
                <div class="col-sm-12">
                    <div id="slider-carousel" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            @foreach ($slider as $index=>$val)
                        <li data-target="#slider-carousel" data-slide-to="{{$index+1}}"></li>
                            @endforeach
                            
                        </ol>
                        <div class="carousel-inner">
                            @foreach($slider as $val)
                             <div class="item {{$val->status}}">
                                <div class="col-sm-6 w-100">
                                    <h1><span></span>JUALIN</h1>
                                    <h2>Punya Produk ?</h2>
                                    <p>Biar Kami Yang Jualin</p>
                                    <button type="button" class="btn btn-default get">Get it now</button>
                                </div>
                                <div class="col-sm-6 ">
                                    <img src="slider/{{$val->nama_slider}}" class="girl img-responsive" alt="" />
                                   
                                </div>
                            </div>
                            @endforeach
                        </div>

                        <a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
                            <i class="fa fa-angle-left"></i>
                        </a>
                        <a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
                            <i class="fa fa-angle-right"></i>
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </section><!--/slider-->
    {{--  promo  --}}
    <section id="promo" class="promo">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h2>Promo Hari Ini</h2>
                    <br>
                </div>
                <div class="col" >
                    <a href="{{('promo')}}" >
                        <h4 style="margin-left: 60%">Lihat Semua Promo</h4>
                    </a>
                </div>
            </div>
             <div class="pproduk">
                <div class="row">
                    @foreach ($produk as $produks)
                    @if($produks->status_verifikasi=="Telah Di Verifikasi")
                    <div class="col-5 col-md-2">
                        <a href="" >
                            <div class="promoh" >
                            <img src="foto_produk/{{$produks->foto_produk1}}" alt="">
                            
                            <p>{{$produks->nama_produk}}</p>
                            </div>
                            
                        </a>
                    </div>
                    @endif
                    @endforeach
                </div>
            </div>
        </div>
    </section>

        

    {{--  akhir promo  --}}
    <!-- Start Product Area -->
    <div class="product-area ">
        <div class="container">
        <div class="kategori">
            <div class="row">
                <div class="col">
                    <h2>Kategori Produk </h2>
                </div>
                <div class="col">
                    <a href="#">
                        <h4 style="float: right; color:#007bff;">Lihat Semua ></h4>
                    </a>
                </div>
            </div>
            <div class="row">
            @foreach ($kategori as $kategoris)
               <div class="col-3 col-md-2">
                   <a href="{{route('kategori_produk',$kategoris->kategori)}}">
                    <img src="/images/{{$kategoris->gambar}}" class="img-thumbnail" alt="...">
                  <p>  {{$kategoris->kategori}} </p>
                   </a>
               </div>
            @endforeach
            
                </div>
                </div>
            </div>
        </div>
    </div>

    <div class="product-area most-popular">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h2>Produk Terlaris </h2>
                </div>
                <div class="col">
                    <a href="#">
                        <h4 style="float: right; color:#007bff;">Lihat Semua ></h4>
                    </a>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="owl-carousel popular-slider">
                        <!-- Start Single Product -->
                        @foreach($produk as $produks)
                        @if($produks->status_verifikasi=="Telah Di Verifikasi")
                        <div class="single-product produk_data">
                            <div class="product-img">
                                <a href="{{route('detail_produk',$produks->id)}}">
                                    <img class="default-img" src="../foto_produk/{{$produks->foto_produk1}}" alt="#">
                                    <img class="hover-img" src="../foto_produk/{{$produks->foto_produk2}}" alt="#">
                                    <span class="out-of-stock">Hot</span>
                                </a>
                                <div class="button-head">
                                    <div class="product-action">
                                        <a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>
                                        <a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Add to Wishlist</span></a>
                                        <a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a>
                                    </div>
                                    <div class="product-action-2">
                                        <input type="hidden" class="produk_id" value="{{$produks->id}}">
                                        <input type="hidden" class="nama_umkm" value="{{$produks->umkm}}">
                                        <input type="hidden" class="form-control qty-input text-center" value="1">
                                        <a class="tambahKeKeranjangBtn">Add to cart</a>
                                    </div>
                                </div>
                            </div>
                            <div class="product-content">
                                <h3><a href="{{route('detail_produk',$produks->id)}}">{{$produks->nama_produk}}</a></h3>
                               <div class="row">
                                       <img src="{{asset('elshop/images/piagam.png')}}" style="width: 5%; height:5%">
                                       <h5>{{$produks->umkm}}</h5>
                               </div>
                                <div class="product-price">
                                    <span class="old">$60.00</span>
                                    <span>@currency($produks->harga_produk)</span>
                                </div>
                                <div class="rowa">
                                    <div class="col-5">
                                        <small>
                                        <i class = "fa fa-star checked1"></i>
                                        <i class = "fa fa-star checked2"></i>
                                        <i class = "fa fa-star checked3"></i>
                                        <i class = "fa fa-star checked4" ></i>
                                        <i class = "fa fa-star checked5"></i>
                                        </small>
                                    </div>
                                    <div class="col-3">
                                       <h6><span>4.05</span></h6>
                                    </div>
                                    <div class="col-4">
                                        <h6>(100 Terjual)</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endif
                        @endforeach
                        <!-- End Single Product -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Most Popular Area -->
    <div class="product-area most-popular ">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h2>Baru Update</h2>
                </div>
                <div class="col">
                  
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="owl-carousel popular-slider">
                        <!-- Start Single Product -->
                        @foreach($produk as $produks)
                        @if($produks->status_verifikasi=="Telah Di Verifikasi")
                        <div class="single-product produk_data">
                            <div class="product-img">
                                <a href="{{route('detail_produk',$produks->id)}}">
                                    <img class="default-img" src="../foto_produk/{{$produks->foto_produk1}}" alt="#">
                                    <img class="hover-img" src="../foto_produk/{{$produks->foto_produk2}}" alt="#">
                                    <span class="out-of-stock">Hot</span>
                                </a>
                                <div class="button-head">
                                    <div class="product-action">
                                        <a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>
                                        <a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Add to Wishlist</span></a>
                                        <a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a>
                                    </div>
                                    <div class="product-action-2">
                                        <input type="hidden" class="produk_id" value="{{$produks->id}}">
                                        <input type="hidden" class="nama_umkm" value="{{$produks->umkm}}">
                                        <input type="hidden" class="form-control qty-input text-center" value="1">
                                        <a class="tambahKeKeranjangBtn">Add to cart</a>
                                    </div>
                                </div>
                            </div>
                            <div class="product-content">
                                <h3><a href="{{route('detail_produk',$produks->id)}}">{{$produks->nama_produk}}</a></h3>
                               <div class="row">
                                       <img src="{{asset('elshop/images/piagam.png')}}" style="width: 5%; height:5%">
                                       <h5>{{$produks->umkm}}</h5>
                               </div>
                                <div class="product-price">
                                    <span class="old">$60.00</span>
                                    <span>@currency($produks->harga_produk)</span>
                                </div>
                                <div class="rowa">
                                    <div class="col-5">
                                        <small>
                                        <i class = "fa fa-star checked1"></i>
                                        <i class = "fa fa-star checked2"></i>
                                        <i class = "fa fa-star checked3"></i>
                                        <i class = "fa fa-star checked4" ></i>
                                        <i class = "fa fa-star checked5"></i>
                                        </small>
                                    </div>
                                    <div class="col-3">
                                       <h6><span>4.05</span></h6>
                                    </div>
                                    <div class="col-4">
                                        <h6>(100 Terjual)</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endif
                        @endforeach
                        <!-- End Single Product -->
                    </div>
                </div>
            </div>
        </div>
    </div>

     <section id="moreproduk" class="moreproduk">
         <div class="container">
            <a href=""><button type="button" class="btn btn-primary">Muat Produk Lebih Banyak</button></a>
            </div>
        </section>
@endsection



