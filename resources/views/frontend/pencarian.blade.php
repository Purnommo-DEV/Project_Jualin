@extends('layout.header')

@section('content')
    <section>
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <div class="left-sidebar">
                        <h2>Category</h2>
                        <div class="panel-group category-products" id="accordian"><!--category-productsr-->
                            @foreach($kategori as $kategoris)
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordian" href="#sportswear">
                                            {{$kategoris->kategori}}
                                        </a>
                                    </h4>
                                </div>
                            </div>
                            @endforeach
                        </div><!--/category-productsr-->
                        <div class="shipping text-center"><!--shipping-->
                            <img src="{{asset('images/home/shipping.jpg')}}" alt="" />
                        </div><!--/shipping-->

                    </div>
                </div>

                <div class="col-sm-9 padding-right">
                    <div class="features_items"><!--features_items-->
                        <h2 class="title text-center">Features Items</h2>
                        @foreach ($produk as $produks)
                        @if($produks->status_verifikasi=="Telah Di Verifikasi")
                        <div class="col-sm-4">
                            <div class="single-product produk_data">
                                <div class="product-img">
                                    <a href="{{route('detail_produk',$produks->id)}}">
                                        <img class="default-img" src="foto_produk/{{$produks->foto_produk1}}" alt="#">
                                        <img class="hover-img" src="foto_produk/{{$produks->foto_produk2}}" alt="#">
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
                                    <span><small>{{$produks->umkm}}</small></span>
                                    <span><small>Diskon 25%</small></span>
                                    <div class="product-price">
                                        <span>@currency($produks->harga_produk)/Item</span>
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
                        @endif
                        @endforeach
                    </div><!--features_items-->
                </div>
            </div>
        </div>
    </section>
@endsection
