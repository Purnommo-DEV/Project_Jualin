@extends('layout.header')

@section('content')
<section>
    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <div class="left-sidebar">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Beranda</a></li>
                            <li class="breadcrumb-item active" aria-current="page">{{$produk->nama_produk}}</li>
                        </ol>
                    </nav>
                    <div class="panel-group category-products" id="accordian">
                        <!--category-productsr-->
                        <div class="panel panel-default">
                            <div class="col-12 col-sm-6">
                                <h3 class="d-inline-block d-sm-none">LOWA Men’s Renegade GTX Mid Hiking Boots Review
                                </h3>
                                <div class="col-12">
                                    <img src="../elshop/images/prod-1.jpg" class="product-image" alt="Product Image">
                                </div>
                                <div class="col-12 product-image-thumbs">
                                    <div class="product-image-thumb active"><img src="../elshop/images/prod-1.jpg"
                                            alt="Product Image"></div>
                                    <div class="product-image-thumb"><img src="../elshop/images/prod-2.jpg"
                                            alt="Product Image"></div>
                                    <div class="product-image-thumb"><img src="../elshop/images/prod-3.jpg"
                                            alt="Product Image"></div>
                                    <div class="product-image-thumb"><img src="../elshop/images/prod-4.jpg"
                                            alt="Product Image"></div>
                                    <div class="product-image-thumb"><img src="../elshop/images/prod-5.jpg"
                                            alt="Product Image"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--/category-products-->


                </div>
            </div>

            <div class="col-sm-8 padding-right">
                <div class="col-sm-6">
                    <div class="product-details">
                        <!--product-details-->
                        <b>Sepok kopi kampung - Kemasan kotak 100 gram</b><br>
                        <small>Terjual 1000 pcs</small><br>
                        <h3> Rp 13.000,- </h3>

                        <div class="tab-content">
                            {{-- detail --}}

                            <div class="active tab-pane" id="deproduk">
                                <div class="detail">

                                    <small class="sdetail">Kondisi : <b>Baru</b></small><br>
                                    <small class="sdetail">berat : <b>2.500 gram</b></small><br>
                                    <small class="sdetail">Kategori : <b>minuman</b></small><br>
                                    <small>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam commodi
                                        vitae, ducimus enim accusamus non magni assumenda tempora ipsum! Mollitia harum
                                        illo ex aspernatur dignissimos quibusdam quas commodi non odit?
                                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Aut, quae facere,
                                        alias dolores, adipisci recusandae in rerum eligendi quod velit eaque impedit
                                        sunt accusantium perspiciatis ipsum fuga maxime quis? Enim?></small><br>
                                    <hr class="garisa">
                                    <div class="rowa">
                                        <div class="col-sm-3">
                                            <img src="{{ asset('eshopper/images/product-details/similar1.jpg') }}"
                                                width="100%">
                                        </div>
                                        <div class="col-sm">
                                            <div class="row">
                                                <div class="col-2">
                                                    <img src="../elshop/images/medal.png" alt="">
                                                </div>
                                                <div class="col-9">
                                                    <small><span> Kopi Kampung<span></small><br>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-1">
                                                    <i class="fas fa-medal"></i>
                                                </div>
                                                <div class="col-7">
                                                    <small><b>Premium Quality</b></small><br>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-1">
                                                    <i class="fas fa-map-marker-alt"></i>
                                                </div>
                                                <div class="col-10">
                                                    <small>Alamat</small><br>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <hr class="garisb">
                                    <div class="pengiriman">
                                        <div class="row">
                                            <h5>Pengiriman</h5>
                                        </div>
                                        <div class="pengirimanc">

                                            <div class="row">
                                                <div class="col-1"><i class="fas fa-map-marker-alt"></i></div>
                                                <div class="col-11"><small>Dikirim dari Pontianak barat</small></div>
                                            </div>
                                            <div class="row">
                                                <div class="col-1"><i class="fas fa-truck"></i></div>
                                                <div class="col-11"><small>Dikirim dari Pontianak barat</small></div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="tab-pane" id="review">
                                <div class="review">
                                    <div class="ulasan">
                                        <div class="row">
                                            <h3>Ulasan (61)</h3>
                                        </div>
                                        <div class="row">
                                            <h5>Sepok kopi kampung - Kemasan kotak 100 gram </h5>
                                        </div>
                                    </div>
                                    {{-- awal rating --}}
                                    <div class="rating">
                                        <div class="col-sm-3">
                                            <h1>4.4</h1>
                                            <h5>32 review</h5>
                                        </div>
                                        <div class="col-sm-1">
                                            <i class="fas fa-star"></i>
                                        </div>
                                        <div class="col-sm-7">
                                            <div class="row">
                                                <div class="col-sm-1">
                                                    <p>5</p>
                                                </div>
                                                <div class="col-sm-2">
                                                    <i class="fas fa-star"></i>
                                                </div>
                                                <div class="col-sm-7">
                                                    <div class="progress-group">
                                                        <div class="progress progress-sm">
                                                            <div class="progress-bar " style="width: 80%"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-1">
                                                    <p>5</p>
                                                </div>
                                                <div class="col-sm-2">
                                                    <i class="fas fa-star"></i>
                                                </div>
                                                <div class="col-sm-7">
                                                    <div class="progress-group">
                                                        <div class="progress progress-sm">
                                                            <div class="progress-bar " style="width: 80%"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-1">
                                                    <p>5</p>
                                                </div>
                                                <div class="col-sm-2">
                                                    <i class="fas fa-star"></i>
                                                </div>
                                                <div class="col-sm-7">
                                                    <div class="progress-group">
                                                        <div class="progress progress-sm">
                                                            <div class="progress-bar " style="width: 80%"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-1">
                                                    <p>5</p>
                                                </div>
                                                <div class="col-sm-2">
                                                    <i class="fas fa-star"></i>
                                                </div>
                                                <div class="col-sm-7">
                                                    <div class="progress-group">
                                                        <div class="progress progress-sm">
                                                            <div class="progress-bar " style="width: 80%"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-1">
                                                    <p>5</p>
                                                </div>
                                                <div class="col-sm-2">
                                                    <i class="fas fa-star"></i>
                                                </div>
                                                <div class="col-sm-7">
                                                    <div class="progress-group">
                                                        <div class="progress progress-sm">
                                                            <div class="progress-bar " style="width: 80%"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    {{-- akhir rating --}}
                                    {{-- komenan --}}
                                    <div class="komenan">
                                        <div class="row">
                                            <div class="col-2">
                                                <img src="../elshop/images/hartabiak.png" alt="">
                                            </div>
                                            <div class="col-10">
                                                <div class="row">
                                                    <h4>James Lawson</h4>
                                                </div>
                                                <div class="row">
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Velit illo
                                                dolor, labore sunt dolorem id, earum repudiandae obcaecati ab, quia
                                                voluptatibus. Nisi minus ipsa quia qui voluptas ut? Dolor, sint!
                                                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Velit illo
                                                dolor, labore sunt dolorem id, earum repudiandae obcaecati ab, quia
                                                voluptatibus. Nisi minus ipsa quia qui voluptas ut? Dolor, sint!
                                                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Velit illo
                                                dolor, labore sunt dolorem id, earum repudiandae obcaecati ab, quia
                                                voluptatibus. Nisi minus ipsa quia qui voluptas ut? Dolor, sint!
                                            </p>
                                        </div>
                                        <div class="foto">
                                            <div class="row">
                                                <div class="col">
                                                    <img src="../elshop/images/hartabiak.png" alt="">
                                                </div>
                                                <div class="col">
                                                    <img src="../elshop/images/hartabiak.png" alt="">
                                                </div>
                                                <div class="col">
                                                    <img src="../elshop/images/hartabiak.png" alt="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <p>16 December 2020</p>
                                        </div>

                                    </div>
                                    {{-- akhir komenan --}}
                                </div>

                            </div>


                        </div>
                    </div>
                </div>
                <div class="col-sm-5">
                    <div class="product-information">
                        <!--/product-information-->

                        <h2>Sepok kopi kampung</h2>

                        <img src="{{ asset('eshopper/images/product-details/rating.png') }}"
                            alt="" />
                        <span>
                            <span>Rp. 2.175.000</span>
                            <label>Jumlah:</label>
                            <input type="text" value="3" /><br><br>
                            <input type="text" class="form-control" placeholder="masukan catatan">
                            <form method="POST" action="{{route('produk_save_ke_keranjang')}}">
                                @csrf
                                <input type="hidden" name="id_pembeli" value="{{$LoggedUserInfo['id']}}">
                                <input type="hidden" name="nama_produk" value="{{$produk->nama_produk}}">
                                <input type="hidden" name="umkm" value="{{$produk->umkm}}">
                                <input type="hidden" name="total" value="{{$produk->harga_produk}}">
                                    <button type="submit" class="btn btn-atas  cart"> <i class="fas fa-plus"></i>
                                    Add to cart
                                    </button>
                            </form>
                            <button type="button" class="btn  btn-primary btn-fefault cart">
                                <i class="fa fa-shopping-cart"></i>
                                Langsung beli
                            </button>
                        </span>

                        <div class="row">
                            <div class="col-6">
                                <a href="">
                                    <i class="fas fa-comment-dots"></i>
                                    <h5>Chat Penjual</h5>
                                </a>
                            </div>

                            <div class="col-5">
                                <input type="checkbox" id="like" class="sr-only">
                                <label for="like" aria-hidden="true">❤</label>
                                <h5> + Whistlist</h5>
                            </div>
                        </div>
                    </div>
                    <!--/product-information-->
                </div>
            </div>
            <!--/product-details-->



        </div>
        <div class="row">
            <ul class="nav nav-pills">
                <li class="nav-item"><a class="nav-link active" href="#deproduk" data-toggle="tab">Detail</a></li>
                <li class="nav-item"><a class="nav-link" href="#review" data-toggle="tab">Review</a></li>

            </ul>

        </div>
        <div class="row">
        </div>
</section>
<script>
    function togglePress(e) {
        const btn = e.target;
        const isPressed = btn.getAttribute("aria-pressed");
        if (isPressed == "false") {
            btn.setAttribute("aria-pressed", true);
        } else {
            btn.setAttribute("aria-pressed", false);
        }

    }
    document.querySelector("button").addEventListener("click", togglePress);

</script>
@endsection
