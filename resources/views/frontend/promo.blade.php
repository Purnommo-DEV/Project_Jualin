@extends('layout.header')


@section('content')
    <!-- Start Product Area -->
    <div class="product-area section">
        <div class="container">
            <div class="row">
                <div class="prmo2">
                    <div class="card-deck">
                @foreach($produk as $produks)
                <div class="col-3">
                    <div class="card">
                        <img src="/foto_produk/{{$produks->foto_produk1}}" class="card-img-top" alt="...">
                        <div class="card-body">
                        <div class="spkkpi2">
                          <h5 class="card-title">{{$produks->nama_produk}}</h5>
                        </div>
                        <div class="tkab2">
                            <img src="eshopper/images/home/piagam.png" alt="">
                          <p class="card-text">Toko Abu</p>
                        </div>
                        <div class="dskn2">
                          <p class="card-text">Diskon 50%</p>
                          <h2>Rp 26.000,-</h2>
                          <img src="eshopper/images/home/garis2.png" alt="">
                        </div>
                        <div class="hrgitem5">
                            <h2>Rp 13.000,-/item</h2>
                        </div>
                       <div class="nlaiprd2">
                          <i class ="fa fa-star"></i>
                          <i class ="fa fa-star"></i>
                          <i class ="fa fa-star"></i>
                          <i class ="fa fa-star"></i>
                          <i class ="fa fa-star"></i>
                          <h2>4.05</h2>
                          <h3>(100 Terjual)</h3>
                        </div>
                       </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
            </div>


@endsection



