@extends('layout.header')

@section('content')
    <div class ="container">
        <div class ="card p-3">
            <h5><b><center>Lacak Barang</center></b></h5>
        </div>
        <div class ="row ml-1 mr-1 mt-3" style="background-color: lightgray;">
            <div class ="col-sm-2 col-12">
                <b>Nama Barang</b>
            </div>
            <div class ="col-sm-7 col-12">
                <div class ="row">
                    <div class ="col-2">
                        <center><small>Belanja</small></center>
                    </div>
                    <div class ="col-2">
                        <small> 14 maret 2021</small>
                    </div>
                    <div class ="col-4">
                        <small>INV/20210314/MPL/11013543136</small>
                    </div>
                    <div class ="col-4">
                        <small>(Tiba pada : 23 Maret 2021)</small>
                    </div>
                </div><br>
            </div>
            <div class ="col-sm-3 col-12">
                <b>Penjual</b>
            </div>
        </div>
        <div class ="card p-3">
            <div class ="row">
                <div class ="col-sm-5">
                    <div class ="row">
                        <div class ="col-sm-3 col-12">
                            <img src ="{{asset('eshopper/images/product-details/1.jpg')}}" width="50px" height="50px">
                        </div>
                        <div class ="col-sm-9 col-12 " style="border-right: 1px solid">
                            <small><b>Sepok Kopi pakmpong - Kemasan 100 gram</b></small><br>
                            <small> 1 barang x Rp 13.000</small>
                        </div>
                    </div>
                </div>
                <div class ="col-sm-2" style="border-right: 1px solid; ">
                    <small><b>Total Belanja</b></small><br>
                    <small>Rp 100.000</small>
                </div>
                <div class ="col-sm-2" style="border-right: 1px solid;">
                    <small><b>Total Kualitas</b></small><br>
                    <small> 100 gram</small>
                </div>
                <div class ="col-sm-3">
                    <div class ="row">
                        <div class ="col-3">
                            <img src ="{{asset('eshopper/images/product-details/1.jpg')}}" width="50px" height="50px">
                        </div>
                        <div class ="col-9">
                            <small><b>Sepok kopi kampung</b></small>
                            <small>Pontianak Kota</small>
                        </div>
                    </div>

                </div>
            </div>
            <div style="height: 10px;"></div>
            <div class ="border"></div>
        </div>
        <div class ="mt-3">
            <div class ="row">
                <div class ="col-sm-4 col-12">
                    <b>Berikan Nilai Kualitas Produk</b><br>
                    <i class ="fa fa-star"></i>
                    <i class ="fa fa-star"></i>
                    <i class ="fa fa-star"></i>
                    <i class ="fa fa-star"></i>
                    <i class ="fa fa-star"></i>
                </div>
                <div class ="col-sm-4 col-12">
                    <b>Berikan Review</b><br>
                    <textarea class ="form-control" placeholder="Masukan Komentar anda">

                    </textarea>
                </div>
                <div class ="col-sm-4 col-12">
                    <b> Kirim Produk</b><br>
                    <input type ="file" class="form-control" >
                </div>
            </div>
            <button class ="btn btn-primary w-100">Konfirmasi</button>
        </div>
        <div class ="mt-5">
            <div class ="card p-3">
                <h5><b><center>Review Driver</center></b></h5>
            </div>

            <div class ="row">
                <div class ="col-sm-3 col-12">
                    <b>Driver</b><br>

                    <div class ="row">
                        <div class ="col-4">
                            <div style="border-right: 1px solid">

                            </div>
                            <img src ="{{asset('eshopper/images/product-details/1.jpg')}}" width="50px" height="50px">
                        </div>
                        <div class ="col-8">
                            <small><b>Mardani Mardan</b></small><br>
                            <small>KB 1234</small>
                        </div>
                    </div>
                    <div style="height: 30px;"></div>

                </div>
                <div class ="col-sm-9 col-12">
                    <div class ="card p-3">
                        <div class ="row">
                            <div class ="col-sm-8">
                                <div class ="row">
                                    <div class ="col-sm-3 col-12">
                                        <img src ="{{asset('eshopper/images/product-details/1.jpg')}}" width="50px" height="50px">
                                    </div>
                                    <div class ="col-sm-9 col-12 " style="border-right: 1px solid">
                                        <small><b>Sepok Kopi pakmpong - Kemasan 100 gram</b></small><br>
                                        <small> 1 barang x Rp 13.000</small>
                                    </div>
                                </div>
                            </div>
                            <div class ="col-sm-2" style="border-right: 1px solid; ">
                                <small><b>Total Belanja</b></small><br>
                                <small>Rp 100.000</small>
                            </div>
                            <div class ="col-sm-2" style="">
                                <small><b>Total Kualitas</b></small><br>
                                <small> 100 gram</small>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
            <Div class ="row">
                <div class="col-sm-3">
                    <small><b>Berikan Rating Driver</b></small><br>
                    <i class ="fa fa-star"></i>
                    <i class ="fa fa-star"></i>
                    <i class ="fa fa-star"></i>
                    <i class ="fa fa-star"></i>
                    <i class ="fa fa-star"></i>
                </div>
                <div class ="col-sm-6">
                    <b>Berikan Review</b><br>
                    <textarea class ="form-control" placeholder="Masukan Komentar anda">

                    </textarea>
                </div>
                <div class ="col-sm-3 col-12"></div>
            </Div>
            <button class ="btn btn-primary w-100">Konfirmasi</button>
        </div>
    </div>

@endsection
