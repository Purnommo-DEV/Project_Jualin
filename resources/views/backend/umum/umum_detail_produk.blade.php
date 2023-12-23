@extends('backend.umum.layout.header')
@section('content')
    <div class ="container">
        <div class="content-wrapper">
            <!-- Main content -->
            <section class="content">
                <!-- Default box -->
                <div class ="row">
                    <div class ="col-sm-9 col-12">
                        <div class="card card-solid">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-12 col-sm-6">
                                        <b class="d-inline-block d-sm-none">LOWA Men’s Renegade GTX Mid Hiking Boots Review</b>
                                        <div class="col-12">
                                            <img src="{{asset('adminlte/dist/img/prod-1.jpg')}}" class="product-image" alt="Product Image">
                                        </div>
                                        <div class="col-12 product-image-thumbs">
                                            <div class="product-image-thumb active"><img src="{{asset('adminlte/dist/img/prod-1.jpg')}}" alt="Product Image"></div>
                                            <div class="product-image-thumb" ><img src="{{asset('adminlte/dist/img/prod-2.jpg')}}" alt="Product Image"></div>
                                            <div class="product-image-thumb" ><img src="{{asset('adminlte/dist/img/prod-3.jpg')}}" alt="Product Image"></div>
                                            <div class="product-image-thumb" ><img src="{{asset('adminlte/dist/img/prod-4.jpg')}}" alt="Product Image"></div>
                                            <div class="product-image-thumb" ><img src="{{asset('adminlte/dist/img/prod-5.jpg')}}" alt="Product Image"></div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6">
                                        <h3 class="my-3">Sepok Kopi kampong - kemasan kotak 100 gram</h3>
                                        <small>Terjual 1.000 pcs</small>
                                        <h5>Rp 13.000</h5>
                                        <hr>
                                        <nav class="w-100">
                                            <div class="nav nav-tabs" id="product-tab" role="tablist">
                                                <a class="nav-item nav-link active" id="product-desc-tab" data-toggle="tab" href="#product-desc" role="tab" aria-controls="product-desc" aria-selected="true">Produk</a>
                                                <a class="nav-item nav-link" id="product-comments-tab" data-toggle="tab" href="#product-comments" role="tab" aria-controls="product-comments" aria-selected="false">Review</a>
                                            </div>
                                        </nav>
                                        <div class="tab-content p-3" id="nav-tabContent">
                                            <div class="tab-pane fade show active" id="product-desc" role="tabpanel" aria-labelledby="product-desc-tab">
                                                Kondisi : <b>Baru</b><br>
                                                berat : <b>2.500 gram</b><br>
                                                Kategori : <B>Minuman</B><br>
                                                (Deskripsi Produk)
                                                <div style="height: 10px;"></div>
                                                <div class ="row">
                                                    <div class ="col-2">
                                                        <img src="{{asset('adminlte/dist/img/prod-1.jpg')}}" width="100%">
                                                    </div>
                                                    <div class ="col-9">
                                                        <small>Sepok Kopi kampong</small><br>
                                                        <small>Premium</small><br>
                                                        <small>Alamat</small>

                                                    </div>
                                                </div>
                                                <b>Pengiriman</b><br>
                                                    <small>Dikirim dari Pontianak Barat</small><br>
                                                <small>Ongkir Mulai dari 0 Rp</small>
                                            </div>
                                            <div class="tab-pane fade" id="product-comments" role="tabpanel" aria-labelledby="product-comments-tab"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-4">

                                </div>
                            </div>
                            <!-- /.card-body -->
                        </div>
                    </div>
                    <div class ="col-sm-3 col-12">
                        <div class ="card">
                            <div class ="card-header">
                                <b>Atur Jumlah dan Catatan</b>
                            </div>
                            <div class ="card-body">
                                <input type ="number" class ="form-control"><br>
                                <div class ="row">
                                    <div class ="col-sm-6">
                                        SubTotal
                                    </div>
                                    <div class ="col-sm-6">
                                        <b>Rp 2.175.000</b>
                                    </div>
                                </div>
                            </div>
                            <div class ="card-footer">
                                <nav style="" >
                                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                                        <li class="nav-item">
                                            <a href="{{route('umum_keranjang')}}"  class="nav-link active">
                                                <center>Masuk Keranjang</center>
                                            </a>
                                            <a href="#"  class="nav-link" style="border:1px solid">
                                                <center>Langsung Beli</center>
                                            </a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- /.card -->

            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
    </div>

@endsection
