@extends('layout.header')

@section('content')

    <!-- Shopping Cart -->
    <div class="shopping-cart section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- Shopping Summery -->
                    <table class="table shopping-summery">
                        <thead>
                        <tr class="main-hading">
                            <th>PRODUCT</th>
                            <th>NAME</th>
                            <th class="text-center">UNIT PRICE</th>
                            <th class="text-center">QUANTITY</th>
                            <th class="text-center">TOTAL</th>
                            <th class="text-center"><i class="ti-trash remove-icon"></i></th>
                        </tr>
                        </thead>
                        <tbody>
                            @php $total = 0; $satuan= 0; @endphp
                        @foreach ($keranjang as $keranjangs)
                        <tr>
                            <td class="image" data-title="No"><img src="https://via.placeholder.com/100x100" alt="#"></td>
                            <td class="product-des" data-title="Description">
                                <p class="product-name"><a href="#">{{$keranjangs->nama_produk}}</a></p>
                                <p class="product-des">Maboriosam in a tonto nesciung eget  distingy magndapibus.</p>
                            </td>
                            <td class="price" data-title="Price"><span>@currency($keranjangs->harga_produk)</span></td>
                            <td class="qty" data-title="Qty"><!-- Input Order -->

                                <div class="input-group">
                                    <input id="signup-token" name="_token" type="hidden" value="{{csrf_token()}}">
                                    <input type="hidden" class="id" value="{{$keranjangs->id}}">
                                    @php $satuan = $keranjangs->harga_produk * $keranjangs->kuantitas; @endphp
                                    <form method="POST" action="{{route('umum_increment_kuantitas',$keranjangs->id)}}">
                                        @csrf
                                        <div class="input-group">
                                    {{-- <a href="{{('decrement_kuantitas')}}" class = "ti-minus"></a> --}}
                                        <input type="number" class="input-number" name="kuantitas"  data-min="1" data-max="{{$keranjangs->total_stok}}" value="{{$keranjangs->kuantitas}}">
                                        <input type="hidden" name="total"  value="{{$satuan}}">
                                             <button type="submit" class="btn btn-primary" style="background-color: #007bff;">Ubah Kuantitas</button>
                                     </div>
                                        {{-- <button type="submit" class="btn btn-primary"><small><i class="fas fa-edit" style="width: 2%; height:2%"></i></small></button> --}}                                        
                                    {{-- <a href="{{route('umum_increment_kuantitas',$keranjangs->id)}}" class = "ti-plus"></a> --}}
                                    </form>
                                </div>
                                <!--/ End Input Order -->
                            </td>
                            <td class="total-amount" data-title="Total"><span>@currency($satuan)</span></td>
                            <td class="action" data-title="Remove"><a href="#"><i class="ti-trash remove-icon"></i></a></td>
                        </tr>
                        @php $total += $keranjangs->harga_produk * $keranjangs->kuantitas; @endphp
                        @endforeach
                        </tbody>
                    </table>
                    <!--/ End Shopping Summery -->
                </div>
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
                                                <div id="sportswear" class="panel-collapse collapse">
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
                                        <input type="hidden" name="pembeli_id"  value="{{$LoggedUserInfo['id']}}">
                                        <input type="hidden" name="alamat"  value="{{$LoggedUserInfo['alamat_rumah']}}">
                                        <input type="hidden" name="total_pembayaran"  value="{{$total}}">
                                    {{-- <a href="{{route('umum_increment_kuantitas',$keranjangs->id)}}" class = "ti-plus"></a> --}}

                                        <li><b> Ringkasan Belanja </b></li>
                                        <li>Total Harga (1 Barang)<span>Rp. 13.000</span></li>
                                        
                                        <li>Total Ongkos Kirim<span>Rp. 41.000</span></li>
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
        </div>
    </div>
    <!--/ End Shopping Cart -->
@endsection
