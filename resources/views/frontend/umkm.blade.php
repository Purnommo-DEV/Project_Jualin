 @extends('layout.header')

@section('content')
	<div class="product-area most-popular">
        <div class="container">
            <div class="row">
				<div class="col-12">
					<div class="section-title">
						<h2>Daftar UMKM</h2>
					</div>
				</div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="owl-carousel popular-slider">
                        <!-- Start Single Product -->
                        @foreach($umkm as $umkms)
                        @if($umkms->status=="Telah Di Verifikasi")
						<div class="single-product">
							<div class="product-img">
								<a href="product-details.html">
									<img class="default-img" src="https://via.placeholder.com/550x750" alt="#">
									<img class="hover-img" src="https://via.placeholder.com/550x750" alt="#">
									{{-- <span class="out-of-stock">Hot</span> --}}
								</a>
								{{-- <div class="button-head">
									<div class="product-action">
										<a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>
										<a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Add to Wishlist</span></a>
										<a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a>
									</div>
									<div class="product-action-2">
										<a title="Add to cart" href="#">Add to cart</a>
									</div>
								</div> --}}
							</div>
							<div class="product-content">
								<center><h3><a href="product-details.html">{{$umkms->nama_umkm}}</a></h3></center>
								<div class="product-price">
									<center><button type="button" class="btn-sm btn-primary">Kunjungi Toko</button></center>
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



