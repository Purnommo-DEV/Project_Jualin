@extends('layout.header')

@section('content')
    <div class = "container">
        <div class="category-tab"><!--category-tab-->
            <div class="col-sm-12">
                <ul class="nav nav-tabs">
                    <li class="active"><a href="#profil" data-toggle="tab">Profil</a></li>
                    <li><a href="#status" data-toggle="tab">Status Pengiriman</a></li>
                    <li><a href="#History" data-toggle="tab">History Transaksi</a></li>
                    <li><a href="#return" data-toggle="tab">Return Barang</a></li>

                </ul>
            </div>
            <div class="tab-content">
                <div class="tab-pane fade active in" id="profil" >
                    <section>
                        <div class="container">
                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="left-sidebar">
                                        <h2>Kepok kopi kampung</h2>
                                        <div class="panel-group category-products" id="accordian"><!--category-productsr-->
                                            <div class="panel panel-default">
                                                <div class="view-product">
                                                    <img src="{{asset('eshopper/images/product-details/1.jpg')}}" alt="" />
                                                    <h3>ZOOM</h3>
                                                </div>
                                                <div id="similar-product" class="carousel slide" data-ride="carousel">

                                                    <!-- Wrapper for slides -->
                                                   <a href = "" class ="btn btn-outline-light w-100" style="color:white;">Pilih Foto</a>
                                                </div>
                                            </div>
                                        </div><!--/category-products-->


                                    </div>
                                </div>

                                <div class="col-sm-8 padding-right">
                                    <div class="product-details"><!--product-details-->
                                        <div class="col-sm-7">
                                            <small><b>Biodata data</b></small>
                                            <div class = "row">
                                                <div class ="col-5">
                                                    <small>Nama</small>
                                                </div>
                                                <div class = "col-1"><small>:</small></div>
                                                <div class = "col-6">(Nama User)</div>
                                                <div class ="col-5">
                                                    <small>Tanggal lahir</small>
                                                </div>
                                                <div class = "col-1"><small>:</small></div>
                                                <div class = "col-6"><small>(Tanggal lahir User)</small></div>
                                                <div class ="col-5">
                                                    <small>Jenis Kelamin</small>
                                                </div>
                                                <div class = "col-1"><small>:</small></div>
                                                <div class = "col-6"><small>Laki-laki</small></div>
                                                <div class ="col-5">
                                                    <small>Alamat Rumah</small>
                                                </div>
                                                <div class = "col-1"><small>:</small></div>
                                                <div class = "col-6"><small>(Alamat Rumah User)</small></div>
                                        </div>
                                            <small><b>Informasi Kontak</b></small>
                                            <div class = "row">
                                                <div class ="col-5">
                                                    <small>Email</small>
                                                </div>
                                                <div class = "col-1"><small>:</small></div>
                                                <div class = "col-6">(Email User)</div>
                                                <div class ="col-5">
                                                    <small>No Handphone</small>
                                                </div>
                                                <div class = "col-1"><small>:</small></div>
                                                <div class = "col-6"><small>(No handphone User)</small></div>
                                                <div class ="col-5">
                                                    <small>No Whatsapp</small>
                                                </div>
                                                <div class = "col-1"><small>:</small></div>
                                                <div class = "col-6"><small>(No Whatsapp User)</small></div>
                                            </div>
                                            <small><b>Akun</b></small>
                                            <div class = "row">
                                                <div class ="col-5">
                                                    <small>Username</small>
                                                </div>
                                                <div class = "col-1"><small>:</small></div>
                                                <div class = "col-6">(Username)</div>
                                                <div class ="col-5">
                                                    <small>Password</small>
                                                </div>
                                                <div class = "col-1"><small>:</small></div>
                                                <div class = "col-6"><small>(Password User)</small></div>
                                                <div class ="col-5">
                                                    <small>No KTP</small>
                                                </div>
                                                <div class = "col-1"><small>:</small></div>
                                                <div class = "col-6"><small>(No Ktp User)</small></div>
                                            </div>

                                        </div>
                                        <div class="col-sm-5">
                                            <button type="button" class="btn btn-light cart w-75">

                                                Edit data
                                            </button>
                                        </div>
                                    </div><!--/product-details-->
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="section-title">
                                        <h2>Produk Lainnya</h2>
                                    </div>
                                </div>
                                <div class="tab-single">
                                    <div class="row">
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-12">
                                            <div class="single-product">
                                                <div class="product-img">
                                                    <a href="{{route('detail_produk')}}">
                                                        <img class="default-img" src="https://via.placeholder.com/550x750" alt="#">
                                                        <img class="hover-img" src="https://via.placeholder.com/550x750" alt="#">
                                                    </a>
                                                    <div class="button-head">
                                                        <div class="product-action">
                                                            <a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>
                                                            <a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Add to Wishlist</span></a>
                                                            <a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a>
                                                        </div>
                                                        <div class="product-action-2">
                                                            <a title="Add to cart" href="#">Add to cart</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-content">
                                                    <h3><a href="{{route('detail_produk')}}">Kopi Sepok Kemasan</a></h3>
                                                    <span><small>Toko Budi</small></span>
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
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-12">
                                            <div class="single-product">
                                                <div class="product-img">
                                                    <a href="{{route('detail_produk')}}">
                                                        <img class="default-img" src="https://via.placeholder.com/550x750" alt="#">
                                                        <img class="hover-img" src="https://via.placeholder.com/550x750" alt="#">
                                                    </a>
                                                    <div class="button-head">
                                                        <div class="product-action">
                                                            <a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>
                                                            <a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Add to Wishlist</span></a>
                                                            <a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a>
                                                        </div>
                                                        <div class="product-action-2">
                                                            <a title="Add to cart" href="#">Add to cart</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-content">
                                                    <h3><a href="{{route('detail_produk')}}">Kopi Sepok Kemasan</a></h3>
                                                    <span><small>Toko Budi</small></span>
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
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-12">
                                            <div class="single-product">
                                                <div class="product-img">
                                                    <a href="{{route('detail_produk')}}">
                                                        <img class="default-img" src="https://via.placeholder.com/550x750" alt="#">
                                                        <img class="hover-img" src="https://via.placeholder.com/550x750" alt="#">
                                                    </a>
                                                    <div class="button-head">
                                                        <div class="product-action">
                                                            <a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>
                                                            <a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Add to Wishlist</span></a>
                                                            <a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a>
                                                        </div>
                                                        <div class="product-action-2">
                                                            <a title="Add to cart" href="#">Add to cart</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-content">
                                                    <h3><a href="{{route('detail_produk')}}">Kopi Sepok Kemasan</a></h3>
                                                    <span><small>Toko Budi</small></span>
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
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-12">
                                            <div class="single-product">
                                                <div class="product-img">
                                                    <a href="{{route('detail_produk')}}">
                                                        <img class="default-img" src="https://via.placeholder.com/550x750" alt="#">
                                                        <img class="hover-img" src="https://via.placeholder.com/550x750" alt="#">
                                                        <span class="new">New</span>
                                                    </a>
                                                    <div class="button-head">
                                                        <div class="product-action">
                                                            <a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>
                                                            <a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Add to Wishlist</span></a>
                                                            <a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a>
                                                        </div>
                                                        <div class="product-action-2">
                                                            <a title="Add to cart" href="#">Add to cart</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-content">
                                                    <h3><a href="{{route('detail_produk')}}">Kopi Sepok Kemasan</a></h3>
                                                    <span><small>Toko Budi</small></span>
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
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-12">
                                            <div class="single-product">
                                                <div class="product-img">
                                                    <a href="{{route('detail_produk')}}">
                                                        <img class="default-img" src="https://via.placeholder.com/550x750" alt="#">
                                                        <img class="hover-img" src="https://via.placeholder.com/550x750" alt="#">
                                                        <span class="new">New</span>
                                                    </a>
                                                    <div class="button-head">
                                                        <div class="product-action">
                                                            <a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>
                                                            <a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Add to Wishlist</span></a>
                                                            <a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a>
                                                        </div>
                                                        <div class="product-action-2">
                                                            <a title="Add to cart" href="#">Add to cart</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-content">
                                                    <h3><a href="{{route('detail_produk')}}">Kopi Sepok Kemasan</a></h3>
                                                    <span><small>Toko Budi</small></span>
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
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-12">
                                            <div class="single-product">
                                                <div class="product-img">
                                                    <a href="{{route('detail_produk')}}">
                                                        <img class="default-img" src="https://via.placeholder.com/550x750" alt="#">
                                                        <img class="hover-img" src="https://via.placeholder.com/550x750" alt="#">
                                                        <span class="new">New</span>
                                                    </a>
                                                    <div class="button-head">
                                                        <div class="product-action">
                                                            <a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>
                                                            <a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Add to Wishlist</span></a>
                                                            <a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a>
                                                        </div>
                                                        <div class="product-action-2">
                                                            <a title="Add to cart" href="#">Add to cart</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-content">
                                                    <h3><a href="{{route('detail_produk')}}">Kopi Sepok Kemasan</a></h3>
                                                    <span><small>Toko Budi</small></span>
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
                                </div>
                            </div>
                    </section>
                </div>

                <div class="tab-pane fade" id="status">
                    <form method="post">
                    <div class = "row">
                        <div class = "col-sm-3 col-12 ">
                            <div class ="border" style="background-color: white;">
                                <div class ="row">
                                    <div class ="col-9">
                                        <input type ="text" name="search" class ="form-control" placeholder="Cari Barang" style="height: 100%;width: 100%;border: none;"  >
                                    </div>
                                    <div class ="col-2">
                                        <button value="search" class ="btn btn-sm w-75" style="height: 100%;width: 100%;border: none;" type="submit"><center><i class="ti-search"></i></center></button>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class ="col-sm-3 col-12 ">
                            <div style="width: 100%;height: 100%">
                                <select class="w-100 h-100">
                                    <option value="divition"  selected="selected">New York</option>
                                    <option>Los Angeles</option>
                                    <option>Chicago</option>
                                    <option>Houston</option>
                                    <option>San Diego</option>
                                    <option>Dallas</option>
                                    <option>Charlotte</option>
                                </select>
                            </div>

                        </div>
                        <div class ="col-sm-3 col-12">
                            <div class ="border" style="height: 100%;width: 90%;">
                                <input type ="date" class ="form-control " style="border: none;" >
                            </div>
                        </div>
                        <div class ="col-3">

                        </div>
                    </div>
                    </form><br>
                                <div style="float: left;margin-right: 20px;">
                                    <small><b>Status Pengiriman</b></small>
                                </div>
                                    <div class ="card" style="float: left; width: 15%;border-radius: 10px;padding: 3px;margin-right: 20px;">
                                        <center>Belanja</center>
                                    </div>

                                <div class ="card" style="float: left; width: 15%;border-radius: 10px;padding: 3px;margin-right:20px;">
                                    <center>Belanja</center>
                                </div>

                                <div class ="card" style="float: left; width: 15%;border-radius: 10px;padding: 3px;margin-right: 20px;">
                                    <center>Belanja</center>
                                </div>

                                <div class ="card" style="float: left; width: 15%;border-radius: 10px;padding: 3px;margin-right: 20px;">
                                    <center>Belanja</center>
                                </div>
                    <br><br>
                 <div class ="row">
                     <div class = "col-sm-9 col-12">
                         <div class="card">
                             <div class ="row p-2">
                                 <div class ="col-2">
                                     <center><small>Belanja</small></center>
                                 </div>
                                 <div class ="col-2">
                                     <small> 14 maret 2021</small>
                                 </div>
                                 <div class ="col-3">
                                     <small>INV/20210314/MPL/11013543136</small>
                                 </div>
                                 <div class ="col-3">
                                     <small>(Tiba pada : 23 Maret 2021)</small>
                                 </div>
                                 <div class ="col-2">
                                     <center>
                                         <div class ="card" style="float:left;width:100%;border-radius: 10px;">
                                             <small><center>Berhasil Simpan</center></small>
                                         </div>
                                     </center>

                                 </div>
                             </div><br>
                             <div class ="container">
                                 <div class ="row">
                                     <div class ="col">
                                         <div class ="row" style="padding: 4px;">
                                             <div class ="col-1">
                                                 <img src ="{{asset('eshopper/images/product-details/1.jpg')}}" width="50px" height="50px">
                                             </div>
                                             <div class ="col-3">
                                                 <b>Sepok Kopi kampung</b><br>
                                                 <small>Pontianak Kota</small>
                                             </div>
                                             <div class ="col-4"></div>
                                             <div class ="col-4">
                                                 <b>Total Belanja</b><br>
                                                 <small>Rp 100.000</small>
                                             </div>
                                             <div class ="col-10">
                                                 <div class ="border mt-2"></div>
                                             </div>
                                         </div>


                                         <div class ="row" style="padding: 4px;">
                                             <div class ="col-2">
                                                 <img src ="{{asset('eshopper/images/product-details/1.jpg')}}" width="80px" height="80px">
                                             </div>
                                             <div class ="col-3">
                                                 <b>Sepok Kopi Pakmpong - Kemasan 100 gram</b><br>
                                                 <small>1 Barang x Rp 13.000</small>
                                             </div>
                                             <div class ="col-4"></div>
                                             <div class ="col-4">
                                             </div>

                                         </div>


                                     </div>
                                     <div class ="col-2">

                                     </div>

                                 </div>
                             </div>
                         </div>

                     </div>
                     <div class ="col-sm-3 col-12">
                         <div class ="p-5">
                             <small>Berhasil simpan</small><br>
                             <button class ="btn btn-outline-light"> Berikan Review</button>
                         </div>
                         <div class ="border mt-2"></div>
                     </div>
                 </div>
                    <div class ="border"></div>
                    <div class ="row">
                        <div class = "col-sm-9 col-12">
                            <div class="card">
                                <div class ="row p-2">
                                    <div class ="col-2">
                                        <center><small>Belanja</small></center>
                                    </div>
                                    <div class ="col-2">
                                        <small> 14 maret 2021</small>
                                    </div>
                                    <div class ="col-3">
                                        <small>INV/20210314/MPL/11013543136</small>
                                    </div>
                                    <div class ="col-3">
                                        <small>(Tiba pada : 23 Maret 2021)</small>
                                    </div>
                                    <div class ="col-2">
                                        <center>
                                            <div class ="card" style="float:left;width:100%;border-radius: 10px;">
                                                <small><center>Berhasil Simpan</center></small>
                                            </div>
                                        </center>

                                    </div>
                                </div><br>
                                <div class ="container">
                                    <div class ="row">
                                        <div class ="col">
                                            <div class ="row" style="padding: 4px;">
                                                <div class ="col-1">
                                                    <img src ="{{asset('eshopper/images/product-details/1.jpg')}}" width="50px" height="50px">
                                                </div>
                                                <div class ="col-3">
                                                    <b>Sepok Kopi kampung</b><br>
                                                    <small>Pontianak Kota</small>
                                                </div>
                                                <div class ="col-4"></div>
                                                <div class ="col-4">
                                                    <b>Total Belanja</b><br>
                                                    <small>Rp 100.000</small>
                                                </div>
                                                <div class ="col-10">
                                                    <div class ="border mt-2"></div>
                                                </div>
                                            </div>


                                            <div class ="row" style="padding: 4px;">
                                                <div class ="col-2">
                                                    <img src ="{{asset('eshopper/images/product-details/1.jpg')}}" width="80px" height="80px">
                                                </div>
                                                <div class ="col-3">
                                                    <b>Sepok Kopi Pakmpong - Kemasan 100 gram</b><br>
                                                    <small>1 Barang x Rp 13.000</small>
                                                </div>
                                                <div class ="col-4"></div>
                                                <div class ="col-4">
                                                </div>

                                            </div>


                                        </div>
                                        <div class ="col-2">

                                        </div>

                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class ="col-sm-3 col-12">
                            <div class ="p-5">
                                <a href="{{route('lacak_barang')}}" class ="btn btn-light mb-2" style="color: white"> Lacak Barang</a>
                                <button class ="btn btn-outline-light"> Batal Pemesanan</button>
                            </div>
                            <div class ="border mt-2"></div>
                        </div>
                    </div>


                </div>

                <div class="tab-pane fade" id="History">
                    <form method="post">
                        <div class = "row">
                            <div class = "col-sm-3 col-12 ">
                                <div class ="border" style="background-color: white;">
                                    <div class ="row">
                                        <div class ="col-9">
                                            <input type ="text" name="search" class ="form-control" placeholder="Cari Barang" style="height: 100%;width: 100%;border: none;"  >
                                        </div>
                                        <div class ="col-2">
                                            <button value="search" class ="btn btn-sm w-75" style="height: 100%;width: 100%;border: none;" type="submit"><center><i class="ti-search"></i></center></button>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class ="col-sm-3 col-12 ">
                                <div style="width: 100%;height: 100%">
                                    <select class="w-100 h-100">
                                        <option value="divition"  selected="selected">New York</option>
                                        <option>Los Angeles</option>
                                        <option>Chicago</option>
                                        <option>Houston</option>
                                        <option>San Diego</option>
                                        <option>Dallas</option>
                                        <option>Charlotte</option>
                                    </select>
                                </div>

                            </div>
                            <div class ="col-sm-3 col-12">
                                <div class ="border" style="height: 100%;width: 90%;">
                                    <input type ="date" class ="form-control " style="border: none;" >
                                </div>
                            </div>
                            <div class ="col-3">

                            </div>
                        </div>
                    </form><br>

                        <div class ="card">
                            <div class ="row">
                                <div class ="col-sm-9 col-12">
                                    <div class ="row p-2">
                                        <div class ="col-2">
                                            <center><small>Belanja</small></center>
                                        </div>
                                        <div class ="col-2">
                                            <small> 14 maret 2021</small>
                                        </div>
                                        <div class ="col-3">
                                            <small>INV/20210314/MPL/11013543136</small>
                                        </div>
                                        <div class ="col-3">
                                            <small>(Tiba pada : 23 Maret 2021)</small>
                                        </div>
                                        <div class ="col-2">
                                            <center>
                                                <div class ="card" style="float:left;width:100%;border-radius: 10px;">
                                                    <small><center>Berhasil Simpan</center></small>
                                                </div>
                                            </center>

                                        </div>
                                    </div><br>

                                <div class ="col-sm-3 col-12"></div>
                            </div>
                        </div>

                            <div class ="container">
                                <div class ="row  mb-5">
                                    <div class ="col-sm-1">
                                        <img src="{{asset('eshopper/images/product-details/1.jpg')}}" width="50px" height="50px">
                                    </div>
                                    <div class ="col-sm-4">
                                        <small><b>Sepok Kopi Pekampung - Kemasan 100 gram</b></small><br>
                                        <small> 1 barang x Rp 13.000</small>
                                    </div>
                                    <div class ="col-sm-2">
                                        <div class ="card" style="border-radius: 10px;padding: 3px;margin-right: 20px;">
                                            <center>Belanja</center>
                                        </div>
                                    </div>
                                    <div class ="col-sm-2">
                                        <center><b><small>Total Belanja</small></b></center>
                                        <center><small>Rp 100.000</small></center>
                                    </div>
                                    <div class ="col-sm-3">
                                        <small>Sudah memberikan Review</small>
                                    </div>

                                </div>
                            </div>

                        </div>
                    <div class ="card">
                        <div class ="row">
                            <div class ="col-sm-9 col-12">
                                <div class ="row p-2">
                                    <div class ="col-2">
                                        <center><small>Belanja</small></center>
                                    </div>
                                    <div class ="col-2">
                                        <small> 14 maret 2021</small>
                                    </div>
                                    <div class ="col-3">
                                        <small>INV/20210314/MPL/11013543136</small>
                                    </div>
                                    <div class ="col-3">
                                        <small>(Tiba pada : 23 Maret 2021)</small>
                                    </div>
                                    <div class ="col-2">
                                        <center>
                                            <div class ="card" style="float:left;width:100%;border-radius: 10px;">
                                                <small><center>Berhasil Simpan</center></small>
                                            </div>
                                        </center>

                                    </div>
                                </div><br>

                                <div class ="col-sm-3 col-12"></div>
                            </div>
                        </div>

                        <div class ="container">
                            <div class ="row  mb-5">
                                <div class ="col-sm-1">
                                    <img src="{{asset('eshopper/images/product-details/1.jpg')}}" width="50px" height="50px">
                                </div>
                                <div class ="col-sm-4">
                                    <small><b>Sepok Kopi Pekampung - Kemasan 100 gram</b></small><br>
                                    <small> 1 barang x Rp 13.000</small>
                                </div>
                                <div class ="col-sm-2">
                                    <div class ="card" style="border-radius: 10px;padding: 3px;margin-right: 20px;">
                                        <center>Belanja</center>
                                    </div>
                                </div>
                                <div class ="col-sm-2">
                                    <center><b><small>Total Belanja</small></b></center>
                                    <center><small>Rp 100.000</small></center>
                                </div>
                                <div class ="col-sm-3">
                                    <small>Sudah memberikan Review</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
                <div class="tab-pane fade" id="return">
                    <form method="post">
                    <div class = "row">
                        <div class = "col-sm-3 col-12 ">
                            <div class ="border" style="background-color: white;">
                                <div class ="row">
                                    <div class ="col-9">
                                        <input type ="text" name="search" class ="form-control" placeholder="Cari Barang" style="height: 100%;width: 100%;border: none;"  >
                                    </div>
                                    <div class ="col-2">
                                        <button value="search" class ="btn btn-sm w-75" style="height: 100%;width: 100%;border: none;" type="submit"><center><i class="ti-search"></i></center></button>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class ="col-sm-3 col-12 ">
                            <div style="width: 100%;height: 100%">
                                <select class="w-100 h-100">
                                    <option value="divition"  selected="selected">New York</option>
                                    <option>Los Angeles</option>
                                    <option>Chicago</option>
                                    <option>Houston</option>
                                    <option>San Diego</option>
                                    <option>Dallas</option>
                                    <option>Charlotte</option>
                                </select>
                            </div>

                        </div>
                        <div class ="col-sm-3 col-12">
                            <div class ="border" style="height: 100%;width: 90%;">
                                <input type ="date" class ="form-control " style="border: none;" >
                            </div>
                        </div>
                        <div class ="col-3">

                        </div>
                    </div>
                    </form><br>

                    <div class ="card">
                        <div class ="row">
                            <div class ="col-sm-9 col-12">
                                <div class ="row p-2">
                                    <div class ="col-2">
                                        <center><small>Belanja</small></center>
                                    </div>
                                    <div class ="col-2">
                                        <small> 14 maret 2021</small>
                                    </div>
                                    <div class ="col-3">
                                        <small>INV/20210314/MPL/11013543136</small>
                                    </div>
                                    <div class ="col-3">
                                        <small>(Tiba pada : 23 Maret 2021)</small>
                                    </div>
                                    <div class ="col-2">
                                        <center>
                                            <div class ="card" style="float:left;width:100%;border-radius: 10px;">
                                                <small><center>Berhasil Simpan</center></small>
                                            </div>
                                        </center>

                                    </div>
                                </div><br>

                                <div class ="col-sm-3 col-12"></div>
                            </div>
                        </div>

                        <div class ="container">
                            <div class ="row  mb-5">
                                <div class ="col-sm-1">
                                    <img src="{{asset('eshopper/images/product-details/1.jpg')}}" width="50px" height="50px">
                                </div>
                                <div class ="col-sm-4">
                                    <small><b>Sepok Kopi Pekampung - Kemasan 100 gram</b></small><br>
                                    <small> 1 barang x Rp 13.000</small>
                                </div>
                                <div class ="col-sm-2">
                                    <center><small><b>Total Belanja</b></small></center>
                                    <center><small>Rp 100.000</small></center>
                                </div>
                                <div class ="col-sm-2">
                                    <center><small><b>Total kualitas</b></small></center>
                                    <center><small>100 gram</small></center>
                                </div>
                                <div class ="col-sm-3">
                                    <a href ="{{route('aju_pengembalian')}}" class ="btn btn-primary"> Aju Pengembalian</a>
                                </div>

                            </div>
                        </div>

                    </div>
                    <div class ="card">
                        <div class ="row">
                            <div class ="col-sm-9 col-12">
                                <div class ="row p-2">
                                    <div class ="col-2">
                                        <center><small>Belanja</small></center>
                                    </div>
                                    <div class ="col-2">
                                        <small> 14 maret 2021</small>
                                    </div>
                                    <div class ="col-3">
                                        <small>INV/20210314/MPL/11013543136</small>
                                    </div>
                                    <div class ="col-3">
                                        <small>(Tiba pada : 23 Maret 2021)</small>
                                    </div>
                                    <div class ="col-2">
                                        <center>
                                            <div class ="card" style="float:left;width:100%;border-radius: 10px;">
                                                <small><center>Berhasil Simpan</center></small>
                                            </div>
                                        </center>

                                    </div>
                                </div><br>

                                <div class ="col-sm-3 col-12"></div>
                            </div>
                        </div>

                        <div class ="container">
                            <div class ="row  mb-5">
                                <div class ="col-sm-1">
                                    <img src="{{asset('eshopper/images/product-details/1.jpg')}}" width="50px" height="50px">
                                </div>
                                <div class ="col-sm-4">
                                    <small><b>Sepok Kopi Pekampung - Kemasan 100 gram</b></small><br>
                                    <small> 1 barang x Rp 13.000</small>
                                </div>
                                <div class ="col-sm-2">
                                    <center><small><b>Total Belanja</b></small></center>
                                    <center><small>Rp 100.000</small></center>
                                </div>
                                <div class ="col-sm-2">
                                    <center><small><b>Total kualitas</b></small></center>
                                    <center><small>100 gram</small></center>
                                </div>
                                <div class ="col-sm-3">
                                    <button class ="btn btn-primary btn-sm"> Aju Pengembalian</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </div>


        </div>

            </div>
        </div><!--/category-tab-->
    </div>

@endsection

