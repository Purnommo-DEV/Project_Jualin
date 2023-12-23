@extends('layout.header')

@section('content')
    <div class ="container">
        <div class ="row">
            <div class ="col-sm-9">
                <div class ="card">
                    <div class ="card-header">
                        <b>Keranjang</b>
                    </div>
                    <div class ="card-body"><!-- checkbox -->
                        <div class="form-group clearfix">
                            <div class="icheck-primary d-inline">
                                <input type="checkbox" id="checkboxPrimary1">
                                <label for="checkboxPrimary1">
                                    Pilih Semua
                                </label>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        
                        <div class="card-body table-responsive p-0" style="height: 300px;">
                            
                            <table class="table table-head-fixed text-nowrap">
                                <thead>
                                </thead>
                                <tbody>
                                    @php $total = 0; $satuan= 0; @endphp
                                    @foreach ($keranjang as $keranjangs)
                                    @php $umkm = $keranjangs->produk->umkm @endphp
                                <tr>
                                    <td>
                                        <div class="form-group clearfix">
                                            <div class="icheck-primary d-inline">
                                                <input type="checkbox" id="checkboxPrimary1">
                                                <label for="checkboxPrimary1">
                                                </label>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <img src ="/profile/404.png" width="50px" height="50px;">
                                    </td>
                                    <td><b>{{$keranjangs->produk->umkm}}</b><br>
                                        <small>Pontianak kota</small>
                                    </td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr class="produk_data">
                                    <td>
                                        <div class="form-group clearfix">
                                            <div class="icheck-primary d-inline">
                                                <input class="checkbox gst" type="checkbox" name="harga_produk" 
                                                value="{{$keranjangs->produk->harga_produk}}*{{$keranjangs->produk_qty}}"

                                                onClick="this.form.total_pembayaran.value=checkChoice(this);">
                                                
                                                <label for="checkboxPrimary1">
                                                </label>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                    <img src ="../foto_produk/{{$keranjangs->produk->foto_produk1}}" width="80px" height="80px;">
                                    </td>
                                    <td><b>{{$keranjangs->produk->nama_produk}}</b><br>
                                        <small>@currency($keranjangs->produk->harga_produk)</small>
                                    </td>
                                    
                                    {{-- <td><span class="tag tag-success"><button class="btn-sm btn-danger btnItemDelete" type="button" data-cartid="{{$keranjangs->id}}" style="border:none; border-radius:60%;"><i class="fa fa-trash" style="color: aliceblue"></i></button></i></span></td> --}}
                                    <td>
                                        <b>x{{$keranjangs->produk_qty}}</b>
                                    </td>
                                    <td>
                                        @php $satuan = $keranjangs->produk->harga_produk * $keranjangs->produk_qty; @endphp
                                        <b>@currency($satuan)</b>
                                    </td>
                                </tr>
                                @php $total += $keranjangs->produk->harga_produk * $keranjangs->produk_qty; @endphp
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class ="card-footer"></div>
                </div>
                    <!-- Total Amount -->
                    <div class="total-amount">
                        <div class="row">
                            <div class="col-sm-12">
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
                                                            Metode Pembayaran
                                                        </a>
                                                    </h4>
                                                </div>
                                                <div id="womens" class="panel-collapse collapse">
                                                    <div class="panel-body">
                                                        <ul>
                                                            @foreach ($metode as $metodes)
                                                            <li><a href="">{{$metodes->metode}}</a></li>
                                                            @endforeach
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!--/category-productsr-->
                                        {{-- <div class="shipping text-center"><!--shipping-->
                                            <img src="images/home/shipping.jpg" alt="" />
                                        </div> --}}
                                        <!--/shipping-->
                                    </div>
                                    <div class="checkbox">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--/ End Total Amount -->
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
                                    Total Harga : @currency($total)
                                </div>
                            </div>
                            <div class ="col-6">
                                <div style ="float:right">
                                    <form method="POST" action="{{route('check_out')}}">
                                        @csrf
                                    <td colspan="2" align="right">
                                        <input type="hidden" name="nama"  value="{{$LoggedUserInfo['username']}}">
                                        <input type="hidden" name="email"  value="{{$LoggedUserInfo['email']}}">
                                        <input type="hidden" name="alamat"  value="{{$LoggedUserInfo['alamat_rumah']}}">
                                        <input type="hidden" name="telpon"  value="{{$LoggedUserInfo['nomor_hp']}}">
                                        <input type="hidden" name="umkm"  value="{{$umkm}}">
                                        {{-- <input type="text" name="total_pembayaran" value="" 
                                        style="text-align: right; width:105%; border:none" readonly>
                                        <input type="hidden" name=hiddentotal value=0> --}}
                                    </td>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class ="card-footer">
                       <center><button type="submit" class="btn btn-primary block">Bayar Sekarangs</button></center>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </form>
@endsection