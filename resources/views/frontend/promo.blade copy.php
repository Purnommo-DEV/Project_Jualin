@extends('layout.header')


@section('content')
    <section id="slider"><!--slider-->
        <div class="container" style="">
            <div class="row">
                <div class="col-sm-12">
                    <div id="slider-carousel" class="carousel slide" data-ride="carousel">
                        <div class="bulatan1">
                            <ol class="carousel-indicators">
                                <li data-target="#slider-carousel" data-slide-to="0" class="active"></li>
                                <li data-target="#slider-carousel" data-slide-to="1"></li>
                                <li data-target="#slider-carousel" data-slide-to="2"></li>
                                <li data-target="#slider-carousel" data-slide-to="3"></li>
                                <li data-target="#slider-carousel" data-slide-to="4"></li>
                            </ol>
                        </div>


                        <div class="carousel-inner">
                            <div class="item active">
                                <div class="col-sm-6 w-100">
                                    <h1><span>E</span>-SHOPPER</h1>
                                    <h2>Free E-Commerce Template</h2>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                                    <button type="button" class="btn btn-default get">Get it now</button>
                                </div>
                                <div class="col-sm-6 ">
                                    <img src="{{asset('eshopper/images/home/girl1.jpg')}}" class="girl img-responsive" alt="" />
                                    <img src="{{asset('eshopper/images/home/pricing.png')}}"  class="pricing" alt="" />
                                </div>
                            </div>
                            <div class="item">
                                <div class="col-sm-6">
                                    <h1><span>E</span>-SHOPPER</h1>
                                    <h2>100% Responsive Design</h2>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                                    <button type="button" class="btn btn-default get">Get it now</button>
                                </div>
                                <div class="col-sm-6">
                                    <img src="{{asset('eshopper/images/home/girl2.jpg')}}" class="girl img-responsive" alt="" />
                                    <img src="{{asset('eshopper/images/home/pricing.png')}}"  class="pricing" alt="" />
                                </div>
                            </div>

                            <div class="item">
                                <div class="col-sm-6">
                                    <h1><span>E</span>-SHOPPER</h1>
                                    <h2>Free Ecommerce Template</h2>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                                    <button type="button" class="btn btn-default get">Get it now</button>
                                </div>
                                <div class="col-sm-6">
                                    <img src="{{asset('eshopper/images/home/girl3.jpg')}}" class="girl img-responsive" alt="" />
                                    <img src="{{asset('eshopper/images/home/pricing.png')}}" class="pricing" alt="" />
                                </div>
                            </div>

                            <div class="item">
                                <div class="col-sm-6">
                                    <h1><span>E</span>-SHOPPER</h1>
                                    <h2>Free Ecommerce Template</h2>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                                    <button type="button" class="btn btn-default get">Get it now</button>
                                </div>
                                <div class="col-sm-6">
                                    <img src="{{asset('eshopper/images/home/girl3.jpg')}}" class="girl img-responsive" alt="" />
                                    <img src="{{asset('eshopper/images/home/pricing.png')}}" class="pricing" alt="" />
                                </div>
                            </div>

                            <div class="item">
                                <div class="col-sm-6">
                                    <h1><span>E</span>-SHOPPER</h1>
                                    <h2>Free Ecommerce Template</h2>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                                    <button type="button" class="btn btn-default get">Get it now</button>
                                </div>
                                <div class="col-sm-6">
                                    <img src="{{asset('eshopper/images/home/girl3.jpg')}}" class="girl img-responsive" alt="" />
                                    <img src="{{asset('eshopper/images/home/pricing.png')}}" class="pricing" alt="" />
                                </div>
                            </div>

                        </div>

                        <a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
                            <i class="fa fa-angle-left"></i>
                        </a>
                        <a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
                            <i class="fa fa-angle-right"></i>
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </section><!--/slider-->
    <!-- Start Product Area -->
    <div class="product-area section">
        <div class="container">
            <div class="row">


    <div class="product-area most-popular">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title">
                       <!-- Button trigger modal -->
                       <div class="buton2">
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#staticBackdrop">
                            Filter
                          </button>
                       </div>


  <!-- Modal -->
  <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          ...
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Understood</button>
        </div>
      </div>
    </div>
  </div>

  <div class="buton3">
    <button type="button" class="btn btn-primary"  data-target="#staticBackdrop">
        Komputer & Laptop
      </button>
   </div>

   <div class="buton4">
    <button type="button" class="btn btn-primary"  data-target="#staticBackdrop">
        Fashion
      </button>
   </div>

   <div class="buton5">
    <button type="button" class="btn btn-primary"  data-target="#staticBackdrop">
        Kecantikan
      </button>
   </div>

   <div class="buton6">
    <button type="button" class="btn btn-primary"  data-target="#staticBackdrop">
        Makanan Ringan
      </button>
   </div>

    <div class="buton7">
    <button type="button" class="btn btn-primary"  data-target="#staticBackdrop">
        Makanan Berat
      </button>
   </div>

   <div class="buton8">
    <button type="button" class="btn btn-primary"  data-target="#staticBackdrop">
        Cemilan
      </button>
    </div>
    <div class="urtandrop2">
        <h1>Urutkan:</h1>
        <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-expanded="false">
              Paling Sesuai
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
              <a class="dropdown-item" href="#">Action</a>
              <a class="dropdown-item" href="#">Another action</a>
              <a class="dropdown-item" href="#">Something else here</a>
            </div>
          </div>
    </div>


                  </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="prmo2">
                        <div class="card-deck">
                            <div class="card">
                              <img src="eshopper/images/home/sepok.png" class="card-img-top" alt="...">
                              <div class="card-body">
                              <div class="spkkpi2">
                                <h5 class="card-title">Sepok Kopi Kampong</h5>
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
                            <div class="card">
                                <img src="eshopper/images/home/kursisantai.png" class="card-img-top" alt="...">
                                <div class="card-body">
                                <div class="krsi2">
                                  <h5 class="card-title">Kursi Santai</h5>
                                </div>
                                <div class="tkab3">
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
                              <div class="card">
                                <img src="eshopper/images/home/lcs.png" class="card-img-top" alt="...">
                                <div class="card-body">
                                <div class="spkkpi2">
                                  <h5 class="card-title">LCD Kit</h5>
                                </div>
                                <div class="tkab4">
                                  <p class="card-text">Anbu Tech Store</p>
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
                              <div class="card">
                                <img src="eshopper/images/home/sepatu.png" class="card-img-top" alt="...">
                                <div class="card-body">
                                <div class="spkkpi2">
                                  <h5 class="card-title">Nike Sport Shoes</h5>
                                </div>
                                <div class="tkab5">
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
                              <div class="card">
                                <img src="eshopper/images/home/laptop.png" class="card-img-top" alt="...">
                                <div class="card-body">
                                <div class="spkkpi2">
                                  <h5 class="card-title">Anbu Tech Laptop</h5>
                                </div>
                                <div class="tkab7">
                                <p class="card-text">Anbu Tech Store</p>
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
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="prmo3">
                                <div class="card-deck">
                                    <div class="card">
                                      <img src="eshopper/images/home/sepok.png" class="card-img-top" alt="...">
                                      <div class="card-body">
                                      <div class="spkkpi2">
                                        <h5 class="card-title">Sepok Kopi Kampong</h5>
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
                                    <div class="card">
                                        <img src="eshopper/images/home/kursisantai.png" class="card-img-top" alt="...">
                                        <div class="card-body">
                                        <div class="krsi2">
                                          <h5 class="card-title">Kursi Santai</h5>
                                        </div>
                                        <div class="tkab3">
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
                                      <div class="card">
                                        <img src="eshopper/images/home/lcs.png" class="card-img-top" alt="...">
                                        <div class="card-body">
                                        <div class="spkkpi2">
                                          <h5 class="card-title">LCD Kit</h5>
                                        </div>
                                        <div class="tkab4">
                                          <p class="card-text">Anbu Tech Store</p>
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
                                      <div class="card">
                                        <img src="eshopper/images/home/sepatu.png" class="card-img-top" alt="...">
                                        <div class="card-body">
                                        <div class="spkkpi2">
                                          <h5 class="card-title">Nike Sport Shoes</h5>
                                        </div>
                                        <div class="tkab5">
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
                                      <div class="card">
                                        <img src="eshopper/images/home/laptop.png" class="card-img-top" alt="...">
                                        <div class="card-body">
                                        <div class="spkkpi2">
                                          <h5 class="card-title">Anbu Tech Laptop</h5>
                                        </div>
                                        <div class="tkab7">
                                        <p class="card-text">Anbu Tech Store</p>
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
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="prmo4">
                                        <div class="card-deck">
                                            <div class="card">
                                              <img src="eshopper/images/home/sepok.png" class="card-img-top" alt="...">
                                              <div class="card-body">
                                              <div class="spkkpi2">
                                                <h5 class="card-title">Sepok Kopi Kampong</h5>
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
                                            <div class="card">
                                                <img src="eshopper/images/home/kursisantai.png" class="card-img-top" alt="...">
                                                <div class="card-body">
                                                <div class="krsi2">
                                                  <h5 class="card-title">Kursi Santai</h5>
                                                </div>
                                                <div class="tkab3">
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
                                              <div class="card">
                                                <img src="eshopper/images/home/lcs.png" class="card-img-top" alt="...">
                                                <div class="card-body">
                                                <div class="spkkpi2">
                                                  <h5 class="card-title">LCD Kit</h5>
                                                </div>
                                                <div class="tkab4">
                                                  <p class="card-text">Anbu Tech Store</p>
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
                                              <div class="card">
                                                <img src="eshopper/images/home/sepatu.png" class="card-img-top" alt="...">
                                                <div class="card-body">
                                                <div class="spkkpi2">
                                                  <h5 class="card-title">Nike Sport Shoes</h5>
                                                </div>
                                                <div class="tkab5">
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
                                              <div class="card">
                                                <img src="eshopper/images/home/laptop.png" class="card-img-top" alt="...">
                                                <div class="card-body">
                                                <div class="spkkpi2">
                                                  <h5 class="card-title">Anbu Tech Laptop</h5>
                                                </div>
                                                <div class="tkab7">
                                                <p class="card-text">Anbu Tech Store</p>
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
                                    </div>
                                    <div class="tahanbutton2">
                                        <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                                            <div class="btn-group mr-2" role="group" aria-label="First group">
                                              <button type="button" class="btn btn-secondary">1</button>
                                              <button type="button" class="btn btn-secondary">2</button>
                                              <button type="button" class="btn btn-secondary">3</button>
                                              <button type="button" class="btn btn-secondary">4</button>
                                            </div>
                                            <div class="btn-group mr-2" role="group" aria-label="Second group">
                                              <button type="button" class="btn btn-secondary">5</button>
                                              <button type="button" class="btn btn-secondary">6</button>
                                              <button type="button" class="btn btn-secondary">7</button>
                                            </div>
                                            <div class="btn-group" role="group" aria-label="Third group">
                                              <button type="button" class="btn btn-secondary">8</button>
                                            </div>
                                          </div>
                                    </div>





                        <!-- End Single Product -->
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection



