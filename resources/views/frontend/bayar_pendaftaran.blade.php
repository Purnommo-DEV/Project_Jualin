@extends('layout.header')

@section('content')
    <!-- Start Checkout -->
    <section class="shop checkout section">
        <div class="container">
            <div class ="row">
                <div class ="col-lg-4 col-12">
                    <b>File Persyaratan</b>
                </div>
                <div class ="col-lg-4 col-12">
                    <b>Metode Pembayaran</b>
                </div>
                <div class ="col-lg-4 col-12">
                    <b>Ringkasan Belanja</b>
                </div>

            </div>
            <div class="row">
                <div class="col-lg-8 col-12">
                    <div class="checkout-form">
                        <!-- Form -->
                        <form class="form" method="post" action="#">
                            <div class="row">
                                <div class="col-lg-4 col-md-6 col-12">
                                    <Div class ="row ">
                                        <div class ="col-1"></div>
                                        <div class ="col"><small><b>Syarat 001</b></small></div>
                                        <div class ="col"><a href =""><small><u>Syarat 001.pdf</u></small></a></div>
                                    </Div>
                                    <div style="height: 10px;"></div>
                                    <Div class ="row">
                                        <div class ="col-1"></div>
                                        <div class ="col"><small><b>Syarat 001</b></small></div>
                                        <div class ="col"><a href =""><small><u>Syarat 001.pdf</u></small></a></div>

                                    </Div>
                                    <div style="height: 10px;"></div>
                                    <Div class ="row">
                                        <div class ="col-1"></div>
                                        <div class ="col"><small><b>Syarat 001</b></small></div>
                                        <div class ="col"><a href =""><small><u>Syarat 001.pdf</u></small></a></div>
                                    </Div>
                                    <div style="height: 10px;"></div>
                                    <Div class ="row">
                                        <div class ="col-1"></div>
                                        <div class ="col"><small><b>Syarat 001</b></small></div>
                                        <div class ="col"><a href =""><small><u>Syarat 001.pdf</u></small></a></div>
                                    </Div>
                                    <div style="height: 10px;"></div>
                                    <a href=""><u><small>Edit File</small></u></a>
                                </div>
                                <div class="col-lg-8 col-md-6 col-12">
                                    <div class ="container">
                                        <h2>(foto)</h2>
                                        <small><b>Quick Response Code Indonesia Standard (QRIS)</b></small>
                                    </div>
                                </div>

                            </div>
                        </form>
                        <!--/ End Form -->
                    </div>
                </div>
                <div class="col-lg-4 col-12">
                    <div class="order-details">
                        <!-- Order Widget -->
                        <div class="single-widget">
                            <h2>CART  TOTALS</h2>
                            <div class="content">
                                <ul>
                                    <li>Total Harga<span>Rp 50.000</span></li>
                                    <li>Total pajak<span>Rp 10.000</span></li>
                                    <li class="last">Total<span>Rp 60.000</span></li>
                                </ul>
                            </div>
                        </div>
                        <div class="single-widget get-button">
                            <div class="content">
                                <div class="button">
                                    <a href="#" class="btn">Bayar Sekarang</a>
                                </div>
                            </div>
                        </div>
                        <!--/ End Button Widget -->
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
