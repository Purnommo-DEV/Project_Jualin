 @extends('layout.header')

@section('content')
	<div class="product-area most-popular">
        <div class="container">
            <div class="row">
				<div class="col-12">
					<div class="section-title">
						<h2>Daftar Produk</h2>
					</div>
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
@endsection



