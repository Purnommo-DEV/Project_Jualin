@extends('backend.umum.layout.header')

@section('content')

<body>
<div class="container">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="https://picsum.photos/id/0/1080/500" height="300px" alt="First slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="https://picsum.photos/id/1/1080/500"  height="300px"  alt="Second slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="https://picsum.photos/id/2/1080/500" height="300px"  alt="Third slide">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <div class="nav-icon">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </div>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <div class="nav-icon">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </div>
        </a>
    </div>
    <div class ="card mt-5">
        <div class ="card-header">
            <h5>Kategori</h5>
        </div>
        <div class ="card-body">
            <div class ="row">
                <div class="col-sm-2">
                    <div class="position-relative p-3 bg-gray" style="height: 180px">
                        <div class="ribbon-wrapper ribbon-lg">
                            <div class="ribbon bg-primary ribbon-lg">
                                Laptop
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="position-relative p-3 bg-gray" style="height: 180px">
                        <div class="ribbon-wrapper ribbon-lg">
                            <div class="ribbon bg-primary">
                                Android
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="position-relative p-3 bg-gray" style="height: 180px">
                        <div class="ribbon-wrapper ribbon-lg">
                            <div class="ribbon bg-primary">
                                Makanan
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="position-relative p-3 bg-gray" style="height: 180px">
                        <div class="ribbon-wrapper ribbon-lg">
                            <div class="ribbon bg-primary ">
                                Elektronik
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-sm-2">
                <div class="position-relative p-3 bg-gray" style="height: 180px">
                    <div class="ribbon-wrapper ribbon-lg">
                        <div class="ribbon bg-primary">
                            Elektronik
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-sm-2">
            <div class="position-relative p-3 bg-gray" style="height: 180px">
                <div class="ribbon-wrapper ribbon-lg">
                    <div class="ribbon bg-primary">
                        Elektronik
                    </div>
                </div>

            </div>
        </div>
            </div>
        </div>

    </div>
    <div class ="card mt-5">
        <div class ="card-header">
            <h5>Produk Terlaris</h5>
        </div>
        <div class ="card-body">
            <div class ="row">
                <div class ="col-sm-2 col-12">
                    <a href ="{{route('umum_detail_produk')}}" >
                        <div class ="card" style="border-radius: 0px;">
                            <div class ="card-body" style="margin: -20px;">
                                <img src ="https://picsum.photos/id/0/1080/500" width="100%" height="120px"><br>
                                <div style="margin: 10px;">
                                    <small>Kopi sepok Kampung</small><br>
                                    <small style="color:darkorange;"><i class ="fa fa-store"></i> Nama Toko</small><br>
                                    <small style="color: orange">Diskon 10%</small><br>
                                    <small><b>13.500/ Item</b></small><br>
                                    <small>
                                        <i class ="fa fa-star"></i>
                                        <i class ="fa fa-star"></i>
                                        <i class ="fa fa-star"></i>
                                        <i class ="fa fa-star"></i>
                                        <i class ="fa fa-star"></i>

                                        (Terjual)</small>
                                </div>

                            </div>

                        </div>
                    </a>
                </div>
                <div class ="col-sm-2 col-12">
                    <a href ="{{route('umum_detail_produk')}}" >
                        <div class ="card" style="border-radius: 0px;">
                            <div class ="card-body" style="margin: -20px;">
                                <img src ="https://picsum.photos/id/0/1080/500" width="100%" height="120px"><br>
                                <div style="margin: 10px;">
                                    <small>Kopi sepok Kampung</small><br>
                                    <small style="color:darkorange;"><i class ="fa fa-store"></i> Nama Toko</small><br>
                                    <small style="color: orange">Diskon 10%</small><br>
                                    <small><b>13.500/ Item</b></small><br>
                                    <small>
                                        <i class ="fa fa-star"></i>
                                        <i class ="fa fa-star"></i>
                                        <i class ="fa fa-star"></i>
                                        <i class ="fa fa-star"></i>
                                        <i class ="fa fa-star"></i>

                                        (Terjual)</small>
                                </div>

                            </div>

                        </div>
                    </a>
                </div>
                <div class ="col-sm-2 col-12">
                    <a href ="{{route('umum_detail_produk')}}" >
                        <div class ="card" style="border-radius: 0px;">
                            <div class ="card-body" style="margin: -20px;">
                                <img src ="https://picsum.photos/id/0/1080/500" width="100%" height="120px"><br>
                                <div style="margin: 10px;">
                                    <small>Kopi sepok Kampung</small><br>
                                    <small style="color:darkorange;"><i class ="fa fa-store"></i> Nama Toko</small><br>
                                    <small style="color: orange">Diskon 10%</small><br>
                                    <small><b>13.500/ Item</b></small><br>
                                    <small>
                                        <i class ="fa fa-star"></i>
                                        <i class ="fa fa-star"></i>
                                        <i class ="fa fa-star"></i>
                                        <i class ="fa fa-star"></i>
                                        <i class ="fa fa-star"></i>

                                        (Terjual)</small>
                                </div>

                            </div>

                        </div>
                    </a>
                </div>
                <div class ="col-sm-2 col-12">
                    <a href ="{{route('umum_detail_produk')}}" >
                        <div class ="card" style="border-radius: 0px;">
                            <div class ="card-body" style="margin: -20px;">
                                <img src ="https://picsum.photos/id/0/1080/500" width="100%" height="120px"><br>
                                <div style="margin: 10px;">
                                    <small>Kopi sepok Kampung</small><br>
                                    <small style="color:darkorange;"><i class ="fa fa-store"></i> Nama Toko</small><br>
                                    <small style="color: orange">Diskon 10%</small><br>
                                    <small><b>13.500/ Item</b></small><br>
                                    <small>
                                        <i class ="fa fa-star"></i>
                                        <i class ="fa fa-star"></i>
                                        <i class ="fa fa-star"></i>
                                        <i class ="fa fa-star"></i>
                                        <i class ="fa fa-star"></i>

                                        (Terjual)</small>
                                </div>

                            </div>

                        </div>
                    </a>
                </div>
                <div class ="col-sm-2 col-12">
                    <a href ="{{route('umum_detail_produk')}}" >
                        <div class ="card" style="border-radius: 0px;">
                            <div class ="card-body" style="margin: -20px;">
                                <img src ="https://picsum.photos/id/0/1080/500" width="100%" height="120px"><br>
                                <div style="margin: 10px;">
                                    <small>Kopi sepok Kampung</small><br>
                                    <small style="color:darkorange;"><i class ="fa fa-store"></i> Nama Toko</small><br>
                                    <small style="color: orange">Diskon 10%</small><br>
                                    <small><b>13.500/ Item</b></small><br>
                                    <small>
                                        <i class ="fa fa-star"></i>
                                        <i class ="fa fa-star"></i>
                                        <i class ="fa fa-star"></i>
                                        <i class ="fa fa-star"></i>
                                        <i class ="fa fa-star"></i>

                                        (Terjual)</small>
                                </div>

                            </div>

                        </div>
                    </a>
                </div>
                <div class ="col-sm-2 col-12">
                    <a href ="{{route('umum_detail_produk')}}" >
                        <div class ="card" style="border-radius: 0px;">
                            <div class ="card-body" style="margin: -20px;">
                                <img src ="https://picsum.photos/id/0/1080/500" width="100%" height="120px"><br>
                                <div style="margin: 10px;">
                                    <small>Kopi sepok Kampung</small><br>
                                    <small style="color:darkorange;"><i class ="fa fa-store"></i> Nama Toko</small><br>
                                    <small style="color: orange">Diskon 10%</small><br>
                                    <small><b>13.500/ Item</b></small><br>
                                    <small>
                                        <i class ="fa fa-star"></i>
                                        <i class ="fa fa-star"></i>
                                        <i class ="fa fa-star"></i>
                                        <i class ="fa fa-star"></i>
                                        <i class ="fa fa-star"></i>

                                        (Terjual)</small>
                                </div>

                            </div>

                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class ="card mt-5">
        <div class ="card-header">
            <h5>Baru Update</h5>
        </div>
        <div class ="card-body">
            <div class ="row">
                <div class ="col-sm-2 col-12">
                    <a href ="{{route('umum_detail_produk')}}" >
                        <div class ="card" style="border-radius: 0px;">
                            <div class ="card-body" style="margin: -20px;">
                                <img src ="https://picsum.photos/id/0/1080/500" width="100%" height="120px"><br>
                                <div style="margin: 10px;">
                                    <small>Kopi sepok Kampung</small><br>
                                    <small style="color:darkorange;"><i class ="fa fa-store"></i> Nama Toko</small><br>
                                    <small style="color: orange">Diskon 10%</small><br>
                                    <small><b>13.500/ Item</b></small><br>
                                    <small>
                                        <i class ="fa fa-star"></i>
                                        <i class ="fa fa-star"></i>
                                        <i class ="fa fa-star"></i>
                                        <i class ="fa fa-star"></i>
                                        <i class ="fa fa-star"></i>

                                        (Terjual)</small>
                                </div>

                            </div>

                        </div>
                    </a>
                </div>
                <div class ="col-sm-2 col-12">
                    <a href ="{{route('umum_detail_produk')}}" >
                        <div class ="card" style="border-radius: 0px;">
                            <div class ="card-body" style="margin: -20px;">
                                <img src ="https://picsum.photos/id/0/1080/500" width="100%" height="120px"><br>
                                <div style="margin: 10px;">
                                    <small>Kopi sepok Kampung</small><br>
                                    <small style="color:darkorange;"><i class ="fa fa-store"></i> Nama Toko</small><br>
                                    <small style="color: orange">Diskon 10%</small><br>
                                    <small><b>13.500/ Item</b></small><br>
                                    <small>
                                        <i class ="fa fa-star"></i>
                                        <i class ="fa fa-star"></i>
                                        <i class ="fa fa-star"></i>
                                        <i class ="fa fa-star"></i>
                                        <i class ="fa fa-star"></i>

                                        (Terjual)</small>
                                </div>

                            </div>

                        </div>
                    </a>
                </div>
                <div class ="col-sm-2 col-12">
                    <a href ="{{route('umum_detail_produk')}}" >
                        <div class ="card" style="border-radius: 0px;">
                            <div class ="card-body" style="margin: -20px;">
                                <img src ="https://picsum.photos/id/0/1080/500" width="100%" height="120px"><br>
                                <div style="margin: 10px;">
                                    <small>Kopi sepok Kampung</small><br>
                                    <small style="color:darkorange;"><i class ="fa fa-store"></i> Nama Toko</small><br>
                                    <small style="color: orange">Diskon 10%</small><br>
                                    <small><b>13.500/ Item</b></small><br>
                                    <small>
                                        <i class ="fa fa-star"></i>
                                        <i class ="fa fa-star"></i>
                                        <i class ="fa fa-star"></i>
                                        <i class ="fa fa-star"></i>
                                        <i class ="fa fa-star"></i>

                                        (Terjual)</small>
                                </div>

                            </div>

                        </div>
                    </a>
                </div>
                <div class ="col-sm-2 col-12">
                    <a href ="{{route('umum_detail_produk')}}" >
                        <div class ="card" style="border-radius: 0px;">
                            <div class ="card-body" style="margin: -20px;">
                                <img src ="https://picsum.photos/id/0/1080/500" width="100%" height="120px"><br>
                                <div style="margin: 10px;">
                                    <small>Kopi sepok Kampung</small><br>
                                    <small style="color:darkorange;"><i class ="fa fa-store"></i> Nama Toko</small><br>
                                    <small style="color: orange">Diskon 10%</small><br>
                                    <small><b>13.500/ Item</b></small><br>
                                    <small>
                                        <i class ="fa fa-star"></i>
                                        <i class ="fa fa-star"></i>
                                        <i class ="fa fa-star"></i>
                                        <i class ="fa fa-star"></i>
                                        <i class ="fa fa-star"></i>

                                        (Terjual)</small>
                                </div>

                            </div>

                        </div>
                    </a>
                </div>
                <div class ="col-sm-2 col-12">
                    <a href ="{{route('umum_detail_produk')}}" >
                        <div class ="card" style="border-radius: 0px;">
                            <div class ="card-body" style="margin: -20px;">
                                <img src ="https://picsum.photos/id/0/1080/500" width="100%" height="120px"><br>
                                <div style="margin: 10px;">
                                    <small>Kopi sepok Kampung</small><br>
                                    <small style="color:darkorange;"><i class ="fa fa-store"></i> Nama Toko</small><br>
                                    <small style="color: orange">Diskon 10%</small><br>
                                    <small><b>13.500/ Item</b></small><br>
                                    <small>
                                        <i class ="fa fa-star"></i>
                                        <i class ="fa fa-star"></i>
                                        <i class ="fa fa-star"></i>
                                        <i class ="fa fa-star"></i>
                                        <i class ="fa fa-star"></i>

                                        (Terjual)</small>
                                </div>

                            </div>

                        </div>
                    </a>

                </div>
                <div class ="col-sm-2 col-12">
                    <a href ="{{route('umum_detail_produk')}}" >
                        <div class ="card" style="border-radius: 0px;">
                            <div class ="card-body" style="margin: -20px;">
                                <img src ="https://picsum.photos/id/0/1080/500" width="100%" height="120px"><br>
                                <div style="margin: 10px;">
                                    <small>Kopi sepok Kampung</small><br>
                                    <small style="color:darkorange;"><i class ="fa fa-store"></i> Nama Toko</small><br>
                                    <small style="color: orange">Diskon 10%</small><br>
                                    <small><b>13.500/ Item</b></small><br>
                                    <small>
                                        <i class ="fa fa-star"></i>
                                        <i class ="fa fa-star"></i>
                                        <i class ="fa fa-star"></i>
                                        <i class ="fa fa-star"></i>
                                        <i class ="fa fa-star"></i>

                                        (Terjual)</small>
                                </div>

                            </div>

                        </div>
                    </a>

                </div>
            </div>
            <div class ="row">
                <div class ="col-sm-2 col-12">
                    <a href ="{{route('umum_detail_produk')}}" >
                        <div class ="card" style="border-radius: 0px;">
                            <div class ="card-body" style="margin: -20px;">
                                <img src ="https://picsum.photos/id/0/1080/500" width="100%" height="120px"><br>
                                <div style="margin: 10px;">
                                    <small>Kopi sepok Kampung</small><br>
                                    <small style="color:darkorange;"><i class ="fa fa-store"></i> Nama Toko</small><br>
                                    <small style="color: orange">Diskon 10%</small><br>
                                    <small><b>13.500/ Item</b></small><br>
                                    <small>
                                        <i class ="fa fa-star"></i>
                                        <i class ="fa fa-star"></i>
                                        <i class ="fa fa-star"></i>
                                        <i class ="fa fa-star"></i>
                                        <i class ="fa fa-star"></i>

                                        (Terjual)</small>
                                </div>

                            </div>

                        </div>
                    </a>
                </div>
                <div class ="col-sm-2 col-12">
                    <a href ="{{route('umum_detail_produk')}}" >
                        <div class ="card" style="border-radius: 0px;">
                            <div class ="card-body" style="margin: -20px;">
                                <img src ="https://picsum.photos/id/0/1080/500" width="100%" height="120px"><br>
                                <div style="margin: 10px;">
                                    <small>Kopi sepok Kampung</small><br>
                                    <small style="color:darkorange;"><i class ="fa fa-store"></i> Nama Toko</small><br>
                                    <small style="color: orange">Diskon 10%</small><br>
                                    <small><b>13.500/ Item</b></small><br>
                                    <small>
                                        <i class ="fa fa-star"></i>
                                        <i class ="fa fa-star"></i>
                                        <i class ="fa fa-star"></i>
                                        <i class ="fa fa-star"></i>
                                        <i class ="fa fa-star"></i>

                                        (Terjual)</small>
                                </div>

                            </div>

                        </div>
                    </a>
                </div>
                <div class ="col-sm-2 col-12">
                    <a href ="{{route('umum_detail_produk')}}" >
                        <div class ="card" style="border-radius: 0px;">
                            <div class ="card-body" style="margin: -20px;">
                                <img src ="https://picsum.photos/id/0/1080/500" width="100%" height="120px"><br>
                                <div style="margin: 10px;">
                                    <small>Kopi sepok Kampung</small><br>
                                    <small style="color:darkorange;"><i class ="fa fa-store"></i> Nama Toko</small><br>
                                    <small style="color: orange">Diskon 10%</small><br>
                                    <small><b>13.500/ Item</b></small><br>
                                    <small>
                                        <i class ="fa fa-star"></i>
                                        <i class ="fa fa-star"></i>
                                        <i class ="fa fa-star"></i>
                                        <i class ="fa fa-star"></i>
                                        <i class ="fa fa-star"></i>

                                        (Terjual)</small>
                                </div>

                            </div>

                        </div>
                    </a>
                </div>
                <div class ="col-sm-2 col-12">
                    <a href ="{{route('umum_detail_produk')}}" >
                        <div class ="card" style="border-radius: 0px;">
                            <div class ="card-body" style="margin: -20px;">
                                <img src ="https://picsum.photos/id/0/1080/500" width="100%" height="120px"><br>
                                <div style="margin: 10px;">
                                    <small>Kopi sepok Kampung</small><br>
                                    <small style="color:darkorange;"><i class ="fa fa-store"></i> Nama Toko</small><br>
                                    <small style="color: orange">Diskon 10%</small><br>
                                    <small><b>13.500/ Item</b></small><br>
                                    <small>
                                        <i class ="fa fa-star"></i>
                                        <i class ="fa fa-star"></i>
                                        <i class ="fa fa-star"></i>
                                        <i class ="fa fa-star"></i>
                                        <i class ="fa fa-star"></i>

                                        (Terjual)</small>
                                </div>

                            </div>

                        </div>
                    </a>
                </div>
                <div class ="col-sm-2 col-12">
                    <a href ="{{route('umum_detail_produk')}}" >
                        <div class ="card" style="border-radius: 0px;">
                            <div class ="card-body" style="margin: -20px;">
                                <img src ="https://picsum.photos/id/0/1080/500" width="100%" height="120px"><br>
                                <div style="margin: 10px;">
                                    <small>Kopi sepok Kampung</small><br>
                                    <small style="color:darkorange;"><i class ="fa fa-store"></i> Nama Toko</small><br>
                                    <small style="color: orange">Diskon 10%</small><br>
                                    <small><b>13.500/ Item</b></small><br>
                                    <small>
                                        <i class ="fa fa-star"></i>
                                        <i class ="fa fa-star"></i>
                                        <i class ="fa fa-star"></i>
                                        <i class ="fa fa-star"></i>
                                        <i class ="fa fa-star"></i>

                                        (Terjual)</small>
                                </div>

                            </div>

                        </div>
                    </a>

                </div>
                <div class ="col-sm-2 col-12">
                    <a href ="{{route('umum_detail_produk')}}" >
                        <div class ="card" style="border-radius: 0px;">
                            <div class ="card-body" style="margin: -20px;">
                                <img src ="https://picsum.photos/id/0/1080/500" width="100%" height="120px"><br>
                                <div style="margin: 10px;">
                                    <small>Kopi sepok Kampung</small><br>
                                    <small style="color:darkorange;"><i class ="fa fa-store"></i> Nama Toko</small><br>
                                    <small style="color: orange">Diskon 10%</small><br>
                                    <small><b>13.500/ Item</b></small><br>
                                    <small>
                                        <i class ="fa fa-star"></i>
                                        <i class ="fa fa-star"></i>
                                        <i class ="fa fa-star"></i>
                                        <i class ="fa fa-star"></i>
                                        <i class ="fa fa-star"></i>

                                        (Terjual)</small>
                                </div>

                            </div>

                        </div>
                    </a>

                </div>
            </div>
        </div>

    </div>
</div>
@endsection

