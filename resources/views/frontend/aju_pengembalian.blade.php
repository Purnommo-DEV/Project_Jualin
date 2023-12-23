@extends('layout.header')

@section('content')
    <div class ="mt-3 container">
        <h4><b>Aju Pengembalian</b></h4><br>
        <small><b><i class ="fa fa-plus"></i></b> isi data Lengkap</small><br><br>
        <h4>Ringkasan Produk</h4>
        <div class ="row  mt-5">
            <div class ="col-sm-1">
                <img src="{{asset('eshopper/images/product-details/1.jpg')}}" width="50px" height="50px">
            </div>
            <div class ="col-sm-4">
                <small><b>Sepok Kopi Pekampung - Kemasan 100 gram</b></small><br>
                <small> 1 barang x Rp 13.000</small>
            </div>
            <div class ="col-sm-2">
                <center><small><b>Total Belanja</b></small></center>
                <center><small>Rp 100.000</small></center>
            </div>
            <div class ="col-sm-2">
                <center><small><b>Total kualitas</b></small></center>
                <center><small>100 gram</small></center>
            </div>
            <div class ="col-sm-3">
                <a href ="{{route('aju_pengembalian')}}" class ="btn btn-primary"> Aju Pengembalian</a>
            </div>

        </div><br>
        <div class ="row">
            <div class ="col-sm-8 col-12">
                <div class ="row p-2">
                    <div class ="col-2">
                        <center><small>Belanja</small></center>
                    </div>
                    <div class ="col-2">
                        <small> 14 maret 2021</small>
                    </div>
                    <div class ="col-3">
                        <small>INV/20210314/MPL/11013543136</small>
                    </div>
                    <div class ="col-3">
                        <small>(Tiba pada : 23 Maret 2021)</small>
                    </div>
                    <div class ="col-2">
                        <center>
                            <div class ="card" style="float:left;width:100%;border-radius: 10px;">
                                <small><center>Berhasil Simpan</center></small>
                            </div>
                        </center>

                    </div>
                </div><br>
                <div class ="col-sm-4 col-12"></div>
            </div>
        </div>
        <h5><b>Alasan Pengembalian</b></h5>
        <div style="height: 20px;"></div>
        <textarea class ="form-control" style="height: 150px;">

        </textarea>
        <div class ="form-group">
            <label>Bukti Sendiri</label>
            <input type="file" class ="form-control w-25">
            <input type="submit" class ="btn btn-primary" value="Konfirmasi">
        </div>
    </div>
@endsection
