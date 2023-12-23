@extends('layout.header')
@section('content')
    <section>
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <div class="left-sidebar">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('/')}}">Beranda</a></li>
                            <li class="breadcrumb-item active" aria-current="page">{{$produk->nama_produk}}</li>
                        </ol>
                        </nav>
                        <div class="panel-group category-products" id="accordian"><!--category-productsr-->

                            <div class="panel panel-default">
                               
              <h3 class="d-inline-block d-sm-none"> </h3>
              <div class="col-12">
                <img src="../foto_produk/{{$produk->foto_produk1}}" class="product-image" alt="Product Image">
              </div>
              <div class="col-12 product-image-thumbs">
                <div class="product-image-thumb active"><img src="../foto_produk/{{$produk->foto_produk2}}" alt="Product Image"></div>
                <div class="product-image-thumb" ><img src="../foto_produk/{{$produk->foto_produk3}}" alt="Product Image"></div>
                <div class="product-image-thumb" ><img src="../foto_produk/{{$produk->foto_produk4}}" alt="Product Image"></div>
                <div class="product-image-thumb" ><img src="../foto_produk/{{$produk->foto_produk5}}" alt="Product Image"></div>
                <div class="product-image-thumb" ><img src="../foto_produk/{{$produk->foto_produk1}}" alt="Product Image"></div>
              </div>
        
                            </div>
                        </div><!--/category-products-->


                    </div>
                </div>

                <div class="col-sm-8 padding-right">
                      <div class="col-sm-6">
                    <div class="product-details"><!--product-details-->
                    <b>{{$produk->nama_produk}}</b><br>
                    <small>Terjual 1000 pcs</small><br>
                    <h3>@currency($produk->harga_produk),- </h3>
                                     
               
                            {{-- detail --}}
                        
               
                        <div class="detail">
                         
                            <small class="sdetail">Kondisi : <b>Baru</b></small><br>
                            <small class="sdetail">berat : <b>2.500 gram</b></small><br>
                            <small class="sdetail">Kategori : <b>{{$produk->kategori}}</b></small><br>
                           
                            <hr class="garisa">
                                <div class = "rowa">
                                <div class = "col-sm-3">
                                    <img src="{{asset('eshopper/images/product-details/similar1.jpg')}}" width="100%">
                                </div>
                                <div class = "col-sm">
                                    <div class="row">
                                        <div class="col-2">
                                            <img src="{{asset('elshop/images/piagam.png')}}" alt="">
                                        </div>
                                        <div class="col-9">
                                            <small><span>{{$produk->nama_produk}}<span></small><br>
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
                      </div>
                      <div class="col-sm-5 produk_data">
                        <div class="product-information">
                            <!--/product-information-->
                            <div class="row">
                            <h5>Atur Jumlah dan Catatan</h5>
                        </div>
                        {{-- qty --}}
                            <div class="row">
                                <div class="qty">
                                <input type="hidden" class="produk_id" value="{{$produk->id}}">
                                <div class="col-xs-1">
                                <button class="input-group-text decrement-btn">-</button>
                            </div>
                            <div class="col-xs-5">
                                <input type="text" name="kuantitas" class="form-control qty-input text-center" value="1">
                            </div>
                            <div class="col-xs-1" >
                                <button class="input-group-text increment-btn" style="">+</button>
                            </div>
                        </div>
                            </div>
                        {{-- akhir qty --}}
                           <div class="row">
                            <input type="text" class="form-control" placeholder="masukan catatan">
                           </div>
                            <span>
                                <form method="POST" action="{{route('produk_save_ke_keranjang')}}">
                                    @csrf
                               
                                       
                            </span>
                            <div class="row">
                                <div class="dharga">
                                <div class="col-xs-3"><h6>Subtotal</h6></div>
                                <div class="col-xs-9"><span>@currency($produk->harga_produk)</span></div>
                            </div>   
                            </div>
                            <div class="row">
                                    <input type="hidden" name="id_pembeli" value="{{$LoggedUserInfo['id']}}">
                                    <input type="hidden" name="nama_produk" value="{{$produk->nama_produk}}">
                                    <input type="hidden" name="nama_umkm" value="{{$produk->umkm}}">
                                    <input type="hidden" name="total" value="{{$produk->harga_produk}}">
                                <button type="submit" class="btn btn-atas cart tambahKeKeranjangBtn"> <i class="fas fa-plus"></i>
                                    Add to cart
                                    </button>
                         
                            <button type="button" class="btn  btn-primary btn-fefault cart">
                                <i class="fa fa-shopping-cart"></i>
                                Langsung beli
                            </button>
                            </div>
                        </form>
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
                    </div><!--/product-details-->



                </div>
                {{--  tab-pane  --}}
           <div class="row">
                <ul class="nav nav-pills">
                     			<li class="nav-item active"><a class="nav-link active" href="#deproduk"
                            data-toggle="tab">Deskripsi</a></li>
                             <li class="nav-item"><a class="nav-link" href="#review"
                         data-toggle="tab">Review</a></li>
                          <li class="nav-item"><a class="nav-link" href="#produkl"
                         data-toggle="tab">Produk Lainnya</a></li>
                                        
                    </ul> 
                    <div class="tab-content">
                        {{--  deskripsi  --}}
                         <div class="active tab-pane" id="deproduk">
                            <div class="deskripsi">
                                <div class="container">
                                     <small>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam commodi vitae, ducimus enim accusamus non magni assumenda tempora ipsum! Mollitia harum illo ex aspernatur dignissimos quibusdam quas commodi non odit?
                                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Aut, quae facere, alias dolores, adipisci recusandae in rerum eligendi quod velit eaque impedit sunt accusantium perspiciatis ipsum fuga maxime quis? Enim?></small><br>
                                </div>
                            </div>
                         </div>
                         {{--  akhir deskripsi  --}}
                         {{--  review  --}}
                         <div class="tab-pane" id="review">
                             <div class="review">
                                 <div class="container">
                                 <div class="row">
                                     <h2>Ulasan (61)</h2>                 
                                 </div>
                                 <div class="row">
                                    <h5> Sepok Kopi Kampung - Kemasan kotak 100 gram</h5>
                                 </div>
                                </div>
                                
                                          {{--  awal rating  --}}
                                          <div class="rating">
                                            <div class="col-lg-5">
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
                                                  </div></div>
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
                                                  </div></div>
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
                                                  </div></div>
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
                                                  </div></div>
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
                                                  </div></div>
                                                </div>
                                                 
                                            </div>
                                            </div>
                                            <div class="col-lg-5">
          
                                            </div>
                                         
                                      </div>
                                      {{--  akhir rating  --}}
                                        {{--  komenan   --}}
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
                                    <div class="isik">
                                    <div class="col-lg-8">
                                    <p>
                                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Velit illo dolor, labore sunt dolorem id, earum repudiandae obcaecati ab, quia voluptatibus. Nisi minus ipsa quia qui voluptas ut? Dolor, sint!
                                     
                                    </p>
                                </div>

                                <div class="col-lg-2"></div>
                            </div>
                                </div>
                                <div class="row">
                                <div class="foto">
                                   
                                 
                                        <img src="../elshop/images/hartabiak.png" alt="">
                                   
                                        <img src="../elshop/images/hartabiak.png" alt="">
                                
                                        <img src="../elshop/images/hartabiak.png" alt="">
                              
                             
                                </div>
                                </div>
                                <div class="row">
                                    <p>16 December 2020</p>
                                </div>
                                
                            </div>
                            {{--  akhir komenan  --}}
                             </div>

                         </div>
                         
                         {{--  akhir review  --}}
                         {{--  produk lainnya  --}}
                            <!-- Start Single Tab -->
                            <div class="tab-pane" id="produkl" role="tabpanel">
                                <div class="tab-single">
                                    <div class="row">
                                        @foreach ($produks as $produkss)
                                        @if ($produkss->id == $produkss->id)
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-12">

                        <div class="single-product">
                            <div class="product-img">
                                <a href="{{route('detail_produk',$produkss->id)}}">
                                    <img class="default-img" src="../foto_produk/{{$produkss->foto_produk1}}" alt="#">
                                    <img class="hover-img" src="../foto_produk/{{$produkss->foto_produk2}}" alt="#">
                                    <span class="out-of-stock">Hot</span>
                                </a>
                                <div class="button-head">
                                    <div class="product-action">
                                        <a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>
                                        <a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Add to Wishlist</span></a>
                                        <a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a>
                                    </div>
                                    <div class="product-action-2">
                                        <a title="Add to cart" href="">Add to cart</a>
                                    </div>
                                </div>
                            </div>
                            <div class="product-content">
                                <h3><a href="product-details.html">{{$produkss->nama_produk}}</a></h3>
                               <div class="row">
                                       <img src="{{asset('elshop/images/piagam.png')}}" style="width: 5%; height:5%">
                                       <h5>{{$produkss->umkm}}</h5>
                               </div>
                                <div class="product-price">
                                    <span class="old">$60.00</span>
                                    <span>@currency($produkss->harga_produk)</span>
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

                                        </div>
                                        @endif
                                        @endforeach
                                    </div>
                                </div>
                            </div>

    </section>
    <script>
        function togglePress(e) {
  const btn =e.target;
  const isPressed = btn.getAttribute("aria-pressed"); 
  if (isPressed == "false") {
    btn.setAttribute("aria-pressed", true);
  } else {
    btn.setAttribute("aria-pressed", false);
  }
  
}
document.querySelector("button").addEventListener("click", togglePress);
   
$(document).ready(function () {
  // MDB Lightbox Init
  $(function () {
    $("#panel").load("#panel");
  });
});
</script>
@endsection

