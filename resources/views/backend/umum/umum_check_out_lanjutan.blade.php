@extends('backend.umum.layout.header')

@section('content')
    <div class ="container">
        <div class ="row">
            <div class ="col-sm-4">
                <div class ="card">
                    <div class ="card-header">
                        <b>Isi alamat pengiriman</b>
                    </div>
                    <div class ="card-body">
                        <small>Isi data lengkap anda</small>
                        <form>
                            <div class ="form-group">
                                <label><small>Nama Penerima</small></label>
                                <input type ="text" name ="nama_penerima" class ="form-control" placeholder="Nama Penerima">
                            </div>
                            <div class ="form-group">
                                <label><small>Alamat lengkap</small></label>
                                <input type ="text" name ="alamat" class ="form-control" placeholder="Alamat Lengkap">
                            </div>
                            <div class ="form-group">
                                <label><small>No Handphone</small></label>
                                <input type ="text" name ="no_handphone" class ="form-control" placeholder="No Handphone">
                            </div>
                            <a href ="{{route('umum_halaman_pembayaran')}}" class ="btn btn-primary">Konfirmasi</a>
                        </form>
                    </div>
                    <div class ="card-footer"></div>
                </div>
            </div>
                <div class ="col-sm-4">
                    <div class ="card">
                        <div class ="card-body">
                            <div class ="row">
                                <div class ="col-11">
                                    <b>Kupon Diskon 50%</b><br>
                                    <small>Promo hanya berlaku di official store dan hanya pembelian grosir
                                        Berlaku 3 hari lagi buruan pakai
                                    </small>
                                </div>
                                <div class ="col-1">
                                    <div class="form-group clearfix">

                                        <div class="icheck-primary d-inline">
                                            <input type="checkbox" id="checkboxPrimary2">
                                            <label for="checkboxPrimary2">
                                            </label>
                                        </div>

                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>
                    <div class ="card">
                        <div class ="card-body">
                            <div class ="row">
                                <div class ="col-11">
                                    <b>Kupon Diskon 50%</b><br>
                                    <small>Promo hanya berlaku di official store dan hanya pembelian grosir
                                        Berlaku 3 hari lagi buruan pakai
                                    </small>
                                </div>
                                <div class ="col-1">
                                    <div class="form-group clearfix">

                                        <div class="icheck-primary d-inline">
                                            <input type="checkbox" id="checkboxPrimary2">
                                            <label for="checkboxPrimary2">
                                            </label>
                                        </div>

                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>
                    <div class ="card">
                        <div class ="card-body">
                            <div class ="row">
                                <div class ="col-11">
                                    <b>Kupon Diskon 50%</b><br>
                                    <small>Promo hanya berlaku di official store dan hanya pembelian grosir
                                        Berlaku 3 hari lagi buruan pakai
                                    </small>
                                </div>
                                <div class ="col-1">
                                    <div class="form-group clearfix">

                                        <div class="icheck-primary d-inline">
                                            <input type="checkbox" id="checkboxPrimary2">
                                            <label for="checkboxPrimary2">
                                            </label>
                                        </div>

                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            <div class ="col-sm-4">
                <div class ="card">
                    <div class ="card-header"><b>Pilih metode pembayaran</b><br>

                    </div>
                    <div class ="card-body">
                        <h6><b>Virtual Account</b></h6>
                        <div class ="card" >
                            <div class ="card-body" style="margin: -10px;">
                                <div class ="row">
                                    <div class ="col-2"></div>
                                    <div class ="col-9">
                                        BCA Virtual Account
                                    </div>
                                    <div class = "col-1">
                                        <input type="checkbox" >
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class ="card" >
                            <div class ="card-body" style="margin: -10px;">
                                <div class ="row">
                                    <div class ="col-2"></div>
                                    <div class ="col-9">
                                        Mandiri Virtual Account
                                    </div>
                                    <div class = "col-1">
                                        <input type="checkbox" >
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class ="card" >
                            <div class ="card-body" style="margin: -10px;">
                                <div class ="row">
                                    <div class ="col-2"></div>
                                    <div class ="col-9">
                                        BRIVA
                                    </div>
                                    <div class = "col-1">
                                        <input type="checkbox" >
                                    </div>
                                </div>
                            </div>
                        </div>
                        <h6><b>Digital Payment</b></h6>
                        <div class ="card" >
                            <div class ="card-body" style="margin: -10px;">
                                <div class ="row">
                                    <div class ="col-2"></div>
                                    <div class ="col-9">
                                        Gopay
                                    </div>
                                    <div class = "col-1">
                                        <input type="checkbox" >
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class ="card" >
                            <div class ="card-body" style="margin: -10px;">
                                <div class ="row">
                                    <div class ="col-2"></div>
                                    <div class ="col-9">
                                            linkAja
                                    </div>
                                    <div class = "col-1">
                                        <input type="checkbox" >
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class ="card" >
                            <div class ="card-body" style="margin: -10px;">
                                <div class ="row">
                                    <div class ="col-2"></div>
                                    <div class ="col-9">
                                                OVO
                                    </div>
                                    <div class = "col-1">
                                        <input type="checkbox" >
                                    </div>
                                </div>
                            </div>
                        </div>
                        <h6><b>Mini Market</b></h6>
                        <div class ="card">
                            <div class ="card-body" style="margin: -10px;">
                                <div class ="row">
                                    <div class ="col-2"></div>
                                    <div class ="col-9">
                                        Alfamart
                                    </div>
                                    <div class = "col-1">
                                        <input type="checkbox" >
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class ="card">
                            <div class ="card-body" style="margin: -10px;">
                                <div class ="row">
                                    <div class ="col-2"></div>
                                    <div class ="col-9">
                                        Indomaret
                                    </div>
                                    <div class = "col-1">
                                        <input type="checkbox" >
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                    <div class ="card-footer"></div>
                </div>
            </div>
        </div>
    </div>
@endsection

