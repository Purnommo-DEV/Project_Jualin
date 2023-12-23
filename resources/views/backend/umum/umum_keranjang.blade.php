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
                        <form method="POST" action="{{route('umum_check_out')}}">
                        <div class="card-body table-responsive p-0" style="height: 300px;">
                            
                            <table class="table table-head-fixed text-nowrap">
                                <thead>
                                </thead>
                                <tbody>
                                    @foreach ($keranjang as $keranjangs)
                                    @php $umkm = $keranjangs->umkm @endphp
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
                                    
                                    <td><span class="tag tag-success"><button class="btn-sm btn-danger btnItemDelete" type="button" data-cartid="{{$keranjangs->id}}" style="border:none; border-radius:60%;"><i class="fa fa-trash" style="color: aliceblue"></i></button></i></span></td>
                                   <td>
                                        @php $satuan = $keranjangs->harga_produk * $keranjangs->kuantitas; @endphp
                                        <button class="qtyMinus btn-sm btnItemUpdate" type="button" data-cartid="{{$keranjangs->id}}" style="background-color: #007bff; border-radius:60%;"><i class="fa fa-minus" style="color: aliceblue"></i></button>
                                        <input type="text" class="span1" name="produk_qty" data-min="1" data-max="{{$keranjangs->produk->total_stok}}" style="max-width: 30px; text-align:center" value="{{$keranjangs->produk_qty}}">
                                        <button class="qtyPlus btn-sm btnItemUpdate" type="button" data-cartid="{{$keranjangs->id}}" style="background-color: #007bff; border-radius:60%;"><i class="fa fa-plus" style="color: aliceblue"></i></button>
                                        <input type="hidden" name="total" value="{{$keranjangs->harga_produk}}" aria-hidden="true" hidden>
                                    </td>
                                </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class ="card-footer"></div>
                </div>
            </div>
            <div class ="col-sm-3">
                <div class ="card">
                    <div class ="card-header">
                        <b>Ringkasan Belanja</b>
                    </div>
                    <div class ="card-body">
                        <div class ="row">
                            <div class ="col-6">
                                <div style="float:left">
                                    Total Harga :
                                </div>
                            </div>
                            <div class ="col-6">
                                <div style ="float:right">
                                        @csrf
                                    <td colspan="2" align="right">
                                        <input type="hidden" name="pembeli_id"  value="{{$LoggedUserInfo['id']}}">
                                        <input type="hidden" name="alamat"  value="{{$LoggedUserInfo['alamat_rumah']}}">
                                        {{-- <input type="hidden" name="umkm"  value="{{$umkm}}"> --}}
                                        <input type="text" name="total_pembayaran" value="" style="text-align: right; width:105%; border:none" readonly>
                                        <input type="hidden" name=hiddentotal value=0>
                                    </td>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class ="card-footer">
                       <center><a href="{{route('umum_check_out')}}" type="button" class="btn btn-primary block" style="color:white">Checkout</a></center>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </form>
@endsection