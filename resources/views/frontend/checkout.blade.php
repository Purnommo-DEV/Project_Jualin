@extends('layout.header')

@section('content')
    <!-- Start Checkout -->
    <section class="shop checkout section">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-12">
                    <div class="checkout-form">

                        <!-- Form -->
                        <form class="form" method="post" action="#">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-12">

                                    <div class="form-group">
                                        <label>Nama Penerima<span>*</span></label>
                                        <input type="text" name="name" placeholder="Masukan Nama" required="required">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-12">
                                    <div class = "card">
                                        <div class = "card-body">
                                            <label for="btncheck2">
                                                <div class = "row">
                                                    <div class = "col-10">
                                                        <h5>Kupon Diskon 50%</h5>
                                                        <small>Promo hanya berlaku di official store dan hanya pembelian grosir</small><br>
                                                        <small>Berlaku 3 hari lagi buruan dipakai</small>
                                                    </div>
                                                    <div class = "col-2">
                                                        <input type="checkbox" class="btn-check" id="btncheck2" autocomplete="off">
                                                    </div>
                                                </div>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-12">
                                    <div class="form-group">
                                        <label>Alamat Lengkap<span>*</span></label>
                                        <input type="email" name="email" placeholder="Masukan Alamat" required="required">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-12">
                                    <div class = "card">
                                        <div class = "card-body">
                                            <label for="btncheck3">
                                                <div class = "row">
                                                    <div class = "col-10">
                                                        <h5>Kupon Diskon 50%</h5>
                                                        <small>Promo hanya berlaku di official store dan hanya pembelian grosir</small><br>
                                                        <small>Berlaku 3 hari lagi buruan dipakai</small>
                                                    </div>
                                                    <div class = "col-2">
                                                        <input type="checkbox" class="btn-check" id="btncheck3" autocomplete="off">
                                                    </div>
                                                </div>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-12">
                                    <div class="form-group">
                                        <label>No Handphone<span>*</span></label>
                                        <input type="number" name="number" placeholder="Masukan No HP" required="required">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-12">
                                    <div class = "card" >
                                        <div class = "card-body">
                                            <label for="btncheck4">
                                            <div class = "row">
                                                    <div class = "col-10">
                                                        <h5>Kupon Diskon 50%</h5>
                                                        <small>Promo hanya berlaku di official store dan hanya pembelian grosir</small><br>
                                                        <small>Berlaku 3 hari lagi buruan dipakai</small>
                                                    </div>
                                                    <div class = "col-2">
                                                        <input type="checkbox" class="btn-check" id="btncheck4" autocomplete="off">
                                                    </div>
                                            </div>
                                            </label>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-12">
                                    <div class="form-group">

                                       <a href="{{route('halaman_pembayaran')}}" class="btn btn-primary w-100">Konfirmasi</a>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <!--/ End Form -->
                    </div>
                </div>
                <div class="col-lg-4 col-12">
                    <div class = "card">
                        <div class = "card-body">
                            <label style="width: 100%;" for="btncheck5">
                                <div class = "row">
                                    <div class = "col-10">
                                        <small>BCA Virtual Account</small><br>
                                    </div>
                                    <div class = "col-2">
                                        <input type="checkbox" class="btn-check" style="float:right;" id="btncheck5" autocomplete="off">
                                    </div>
                                </div>
                            </label>
                        </div>
                    </div>
                    <div class = "card">
                        <div class = "card-body">
                            <label style="width: 100%;" for="btncheck6">
                                <div class = "row">
                                    <div class = "col-10">
                                        <small>Mandiri Vitual Account</small><br>
                                    </div>
                                    <div class = "col-2">
                                        <input type="checkbox" class="btn-check" style="float:right;" id="btncheck6" autocomplete="off">
                                    </div>
                                </div>
                            </label>
                        </div>
                    </div>
                    <div class = "card">
                        <div class = "card-body">
                            <label style="width: 100%;" for="btncheck7">
                                <div class = "row">
                                    <div class = "col-10">
                                        <small>BRIVA</small><br>
                                    </div>
                                    <div class = "col-2">
                                        <input type="checkbox" class="btn-check" style="float:right;" id="btncheck7" autocomplete="off">
                                    </div>
                                </div>
                            </label>
                        </div>
                    </div>
                    <div class = "card">
                        <div class = "card-body">
                            <label style="width: 100%;" >
                                <div class = "row">
                                    <div class = "col-10">
                                        <small><b>Digital Payment</b></small><br>
                                    </div>
                                    <div class = "col-2">

                                    </div>
                                </div>
                            </label>
                        </div>
                    </div>
                    <div class = "card">
                        <div class = "card-body">
                            <label style="width: 100%;" for="btncheck8">
                                <div class = "row">
                                    <div class = "col-10">
                                        <small>Gopay</small><br>
                                    </div>
                                    <div class = "col-2">
                                        <input type="checkbox" class="btn-check" style="float:right;" id="btncheck8" autocomplete="off">
                                    </div>
                                </div>
                            </label>
                        </div>
                    </div>
                    <div class = "card">
                        <div class = "card-body">
                            <label style="width: 100%;" for="btncheck9">
                                <div class = "row">
                                    <div class = "col-10">
                                        <small>LinkAja</small><br>
                                    </div>
                                    <div class = "col-2">
                                        <input type="checkbox" class="btn-check" style="float:right;" id="btncheck9" autocomplete="off">
                                    </div>
                                </div>
                            </label>
                        </div>
                    </div>
                    <div class = "card">
                        <div class = "card-body">
                            <label style="width: 100%;" for="btncheck10">
                                <div class = "row">
                                    <div class = "col-10">
                                        <small>OVO</small><br>
                                    </div>
                                    <div class = "col-2">
                                        <input type="checkbox" class="btn-check" style="float:right;" id="btncheck10" autocomplete="off">
                                    </div>
                                </div>
                            </label>
                        </div>
                    </div>
                    <div class = "card">
                        <div class = "card-body">
                            <label style="width: 100%;" >
                                <div class = "row">
                                    <div class = "col-10">
                                        <small><b>Mini Market</b></small><br>
                                    </div>
                                    <div class = "col-2">

                                    </div>
                                </div>
                            </label>
                        </div>
                    </div>
                    <div class = "card">
                        <div class = "card-body">
                            <label style="width: 100%;" for="btncheck11">
                                <div class = "row">
                                    <div class = "col-10">
                                        <small>Alfamart</small><br>
                                    </div>
                                    <div class = "col-2">
                                        <input type="checkbox" class="btn-check" style="float:right;" id="btncheck11" autocomplete="off">
                                    </div>
                                </div>
                            </label>
                        </div>
                    </div>
                    <div class = "card">
                        <div class = "card-body">
                            <label style="width: 100%;" for="btncheck12">
                                <div class = "row">
                                    <div class = "col-10">
                                        <small>Indomaret</small><br>
                                    </div>
                                    <div class = "col-2">
                                        <input type="checkbox" class="btn-check" style="float:right;" id="btncheck12" autocomplete="off">
                                    </div>
                                </div>
                            </label>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </section>

    <!--/ End Checkout -->

@endsection
