@extends('layout.header')

@section('content')
    <section class="shop checkout section">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-12">
                    <a href=""><u><i class="fas fa-arrow-left"></i> Kembali</u></a><br><br>
                    <b> Pencairan Hasil Penjualan</b><br>
                    <small><b>Rp 130.000</b></small><br><br>
                    <select class ="form-control w-50">
                        <option>LinkAja</option>
                    </select>
                </div>
                <div class="col-lg-4 col-12">
                    <div class="order-details">
                        <!-- Order Widget -->
                        <div class="single-widget">
                            <div class ="container">
                                <h4>Ringkasan Pencairan</h4>
                            </div>

                            <div class="content">
                                <ul>
                                    <li>Total Pencapaian<span>Rp 120.000</span></li>
                                    <li>Pembagian Hasil<span>Rp 10.000</span></li>
                                    <li class="last">Total<span><b>Rp 130.000</b></span></li>
                                </ul>
                            </div>
                        </div>

                        <div class="single-widget get-button">
                            <div class="content">
                                <div class="button">
                                    <a href="#" class="btn"><small>proceed to checkout</small></a>
                                </div>
                            </div>
                        </div>
                        <!--/ End Button Widget -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/ End Checkout -->

@endsection
