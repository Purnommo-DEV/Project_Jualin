 @extends('layout.header')

@section('content')
    <!-- End Most Popular Area -->
    <div class="product-area most-popular section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title">
                        <h2>Baru Update</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="owl-carousel popular-slider">
                        <!-- Start Single Product -->
                        @foreach($produk as $produks)
                        <div class="single-product">
                            <div class="product-img">
                                <a href="product-details.html">
                                    <img class="default-img" src="foto_produk/{{$produks->foto_produk1}}" alt="#">
                                    <img class="hover-img" src="foto_produk/{{$produks->foto_produk2}}" alt="#">
                                    <span class="out-of-stock">Hot</span>
                                </a>
                                <div class="button-head">
                                    <div class="product-action">
                                        <a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>
                                        <a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Add to Wishlist</span></a>
                                        <a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a>
                                    </div>
                                    <div class="product-action-2">
                                        <a title="Add to cart" href="{{route('keranjang')}}">Add to cart</a>
                                    </div>
                                </div>
                            </div>
                            <div class="product-content">
                                <h3><a href="product-details.html">{{$produks->nama_produk}}</a></h3>
                               <div class="row">
                                 
                                       <img src="../elshop/images/piagam.png" >
                                       <h4>{{$produks->umkm}}</h4>
                                  
                               </div>
                                <div class="product-price">
                                    <span class="old">$60.00</span>
                                    <span>{{$produks->harga_produk}}</span>
                                </div>
                                <div class="rowa">
                                    <div class="col-5">
                                           <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                             
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
                        @endforeach
                        <!-- End Single Product -->
                        <!-- Start Single Product -->
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



