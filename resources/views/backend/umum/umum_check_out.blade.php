@extends('backend.umum.layout.header')

@section('content')
    <div class ="container">
        <div class ="row">
            <div class ="col-sm-9">
                <div class ="card">
                    <div class ="card-header">
                        <b>Barang yang dibeli</b>
                    </div>
                    <div class ="card-body"><!-- checkbox -->
                        <div class="form-group clearfix">
                            <div class="icheck-primary d-inline">
                                <input type="checkbox" id="checkboxPrimary1" checked>
                                <label for="checkboxPrimary1">
                                    Pilih Semua
                                </label>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body table-responsive p-0">
                            <table class="table table-head-fixed text-nowrap">
                                <thead>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>
                                        <div class="form-group clearfix">
                                            <div class="icheck-primary d-inline">
                                                <input type="checkbox" id="checkboxPrimary1" checked>
                                                <label for="checkboxPrimary1">

                                                </label>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <img src ="" width="50px" height="50px;">
                                    </td>
                                    <td><b>Sepok kopi Kampong</b><br>
                                        <small>Pontianak kota</small>
                                    </td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-group clearfix">
                                            <div class="icheck-primary d-inline">
                                                <input type="checkbox" id="checkboxPrimary1" checked>
                                                <label for="checkboxPrimary1">

                                                </label>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <img src ="" width="80px" height="80px;">
                                    </td>
                                    <td><b>Sepok kopi Kampong</b><br>
                                        <small>Pontianak kota</small>
                                    </td>
                                    <td colspan="6"></td>
                                    <td colspan="5"></td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class ="card-footer"></div>
                </div>
                {{-- <b>Pengiriman dan Metode Pembayaran</b><br>
                <select class ="form-control">
                    <option>
                        <small><b>(Rumah)</b> Febriotama (+628 6780 0464 82)</small><br>
                        <small>Jln. HM Swignyo No. 10A Kec. Pontianak Kota, kota pontianak, Kalimantan Barat, 78244</small>
                    </option>
                    <option>
                        <small><b>(Rumah)</b> Febriotama (+628 6780 0464 82)</small><br>
                        <small>Jln. HM Swignyo No. 10A Kec. Pontianak Kota, kota pontianak, Kalimantan Barat, 78244</small>
                    </option>
                    <option>
                        <small><b>(Rumah)</b> Febriotama (+628 6780 0464 82)</small><br>
                        <small>Jln. HM Swignyo No. 10A Kec. Pontianak Kota, kota pontianak, Kalimantan Barat, 78244</small>
                    </option>
                </select>
                <select class ="form-control">
                    <option>
                        <small>Jualin Kurir</small><br>
                        <small>Rp 10.000 - Rp 41.000</small>
                    </option>
                </select>
                <select class ="form-control">
                    <option>
                        LinkAja
                    </option>
                </select> --}}
            </div>
                        <div class="row">
                <div class="col-12">
                    <!-- Total Amount -->
                    <div class="total-amount">
                        <div class="row">
                            <div class="col-lg-8 col-md-5 col-12">
                                <div class="left">
                                    <div class="left-sidebar">
                                        <div class="panel-group category-products" id="accordian"><!--category-productsr-->
                                            <div class="panel panel-default ">
                                                <div class="panel-heading">
                                                    <h4 class="panel-title">
                                                        <a data-toggle="collapse" data-parent="#accordian" href="#sportswear">
                                                            <span class="badge pull-right"><i class="fa fa-plus"></i></span>
                                                            <small><b>(Rumah)</b> - {{$LoggedUserInfo['username']}} ({{$LoggedUserInfo['nomor_hp']}})</small><br>
                                                            <small>{{$LoggedUserInfo['alamat_rumah']}}</small>
                                                        </a>
                                                    </h4>
                                                </div>
                                                {{-- <div id="sportswear" class="panel-collapse collapse">
                                                    <div class="panel-body">
                                                        <ul>
                                                            <li>
                                                                <small><b>(Rumah)</b> - Febriotema (08112233445566)</small><br>
                                                                <small>Jln. HM Swignyo No. 10A Kec. Pontianak kota, Kota pontianak, kal</small>
                                                            </li>
                                                            <li>
                                                                <small><b>(Rumah)</b> - Febriotema (08112233445566)</small><br>
                                                                <small>Jln. HM Swignyo No. 10A Kec. Pontianak kota, Kota pontianak, kal</small>
                                                            </li>
                                                            <li>
                                                                <small><b>(Rumah)</b> - Febriotema (08112233445566)</small><br>
                                                                <small>Jln. HM Swignyo No. 10A Kec. Pontianak kota, Kota pontianak, kal</small>
                                                            </li>
                                                            <li>
                                                                <small><b>(Rumah)</b> - Febriotema (08112233445566)</small><br>
                                                                <small>Jln. HM Swignyo No. 10A Kec. Pontianak kota, Kota pontianak, kal</small>
                                                            </li>
                                                            <li>
                                                                <small><b>(Rumah)</b> - Febriotema (08112233445566)</small><br>
                                                                <small>Jln. HM Swignyo No. 10A Kec. Pontianak kota, Kota pontianak, kal</small>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div> --}}
                                            </div>
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <h4 class="panel-title"><a href="#">
                                                            <small><b>Jualin Kurir (1 - 2 jam)</b></small><br>
                                                            <small>Rp 10.000 - Rp 41.000</small>
                                                        </a></h4>
                                                </div>
                                            </div>

                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <h4 class="panel-title">
                                                        <a data-toggle="collapse" data-parent="#accordian" href="#womens">
                                                            <span class="badge pull-right"><i class="fa fa-plus"></i></span>
                                                            Links
                                                        </a>
                                                    </h4>
                                                </div>
                                                <div id="womens" class="panel-collapse collapse">
                                                    <div class="panel-body">
                                                        <ul>
                                                            <li><a href="">Links</a></li>
                                                            <li><a href="">Links</a></li>
                                                            <li><a href="">Links</a></li>
                                                            <li><a href="">Links</a></li>
                                                            <li><a href="">Links</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!--/category-productsr-->
                                        <div class="shipping text-center"><!--shipping-->
                                            <img src="images/home/shipping.jpg" alt="" />
                                        </div><!--/shipping-->
                                    </div>
                                    <div class="checkbox">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-7 col-12">
                                <div class="right">
                                    <ul>  

                                    <form method="POST" action="{{route('umum_check_out')}}">
                                        @csrf
                                    {{-- <a href="{{('decrement_kuantitas')}}" class = "ti-minus"></a> --}}
                                        <input type="text" name="pembeli_id"  value="{{$LoggedUserInfo['id']}}">
                                        <input type="text" name="alamat"  value="{{$LoggedUserInfo['alamat_rumah']}}">
                                        <input type="text" name="total_pembayaran"  value="{{$total}}">
                                    {{-- <a href="{{route('umum_increment_kuantitas',$keranjangs->id)}}" class = "ti-plus"></a> --}}

                                        <li><b> Ringkasan Belanja </b></li>
                                        <li class="last">Total Tagihan <span>
                                            @currency($total)</span></li>
                                    </ul>
                                    <div class="button5">
                                        <button type="submit" class="btn">Bayar</button>
                                    </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--/ End Total Amount -->
                </div>
            </div>
            <div class ="col-sm-3">
                <div class ="card">
                    <div class ="card-header">
                        <b>Ringkasan Belanjas</b>
                    </div>
                    <div class ="card-body">
                        <div class ="row">
                            <div class ="col-6">
                                <div style="float:left">
                                    Total Harga
                                </div>
                            </div>
                            <div class ="col-6">
                                <div style ="float:right">
                                    Rp 13.000
                                </div>
                            </div>
                        </div>
                        <div class ="row">
                            <div class ="col-6">
                                <div style="float:left">
                                    Total Ongkos
                                </div>
                            </div>
                            <div class ="col-6">
                                <div style ="float:right">
                                    Rp 41.000
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class ="row">
                            <div class ="col-6">
                                <div style="float:left">
                                    Total Tagihan
                                </div>
                            </div>
                            <div class ="col-6">
                                <div style ="float:right">
                                    Rp 44.000
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class ="card-footer">
                        <a href="{{route('umum_check_out_lanjutan')}}"  class="nav-link active">
                            <center>Bayar Sekarang</center>
                        </a>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
