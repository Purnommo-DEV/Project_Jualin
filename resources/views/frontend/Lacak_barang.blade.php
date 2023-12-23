@extends('layout.header')

@section('content')
    <div class ="container">
        <div class ="card p-3">
            <h5><b><center>Lacak Barang</center></b></h5>
        </div>
        <div class ="row ml-1 mr-1 mt-3" style="background-color: lightgray;">
            <div class ="col-sm-3 col-12">
                <b>Nama Barang</b>
            </div>
            <div class ="col-sm-6 col-12">

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
        <div class ="card p-3">
            <h5><b>Pembayaran & Pengiriman</b></h5>
            <div class ="row">
                <div class ="col-4" style="border-right: 1px solid;">
                    <small><b> Juali kurir - Regular (Estimasi Tiba 23 - 27 mei)</b></small><br>
                    <small>No Resi 10000990025575</small><br>
                    <a href ="" class ="btn btn-primary"><center>Lacak di maps</center></a>
                </div>
                <div class ="col-4" style="border-right: 1px solid;">
                    <small>Dikirim Kepada Hutomo</small><br>
                    <small>(Alamat  User)</small>

                </div>
                <div class ="col-4">
                    <small>Total Harga (1 Barang)</small><br>
                    <small><b>Rp 149.000</b></small><br><br>
                    <small>Total Ongkos kirim (500 gr)</small><br>
                    <small><b>Rp 37.000</b></small><br><br>
                    <small>Total Harga </small><br>
                    <small><b>Rp 186.800</b></small><br><br>
                    <small>Metode Pembayaran</small><br>
                    <small><b>LinkAja</b></small><br><br>
                </div>
            </div>
        </div><br>
        <h5><b>Status Pesanan</b></h5>
        <div class ="card">
            <div class ="row">
                <div class ="col-sm-3 col-12 " style="border-right: 1px solid;">
                    <div class ="">
                        <div class ="alert alert-primary p-3" style="height: 40px;width: 70%;margin: 0 auto;margin-top: 20px;">
                            <small><center>Admin Jualin</center></small>
                        </div>
                    </div>

                </div>
                <div class ="col-sm-6 col-12 p-5">
                    <small> Terima kasih sudah berbelanja di Jualin</small>
                </div>
                <div class ="col-sm-3 col-12 p-5">
                    <small> Minggu, 14 mei 16:04 WIB</small>
                </div>
            </div>
            <div class ="row">
                <div class ="col-sm-3 col-12 " style="border-right: 1px solid;">
                    <div class ="">
                        <div class ="alert alert-success p-3" style="height: 40px;width: 70%;margin: 0 auto;margin-top: 20px;">
                            <center><small>System</small></center>
                        </div>
                    </div>

                </div>
                <div class ="col-sm-6 col-12 p-5">
                    <small> Yeay! Barang sudah Sampai</small>
                </div>
                <div class ="col-sm-3 col-12 p-5">
                    <small> Minggu, 14 mei 16:04 WIB</small>
                </div>
            </div>
            <div class ="row">
                <div class ="col-sm-3 col-12 " style="border-right: 1px solid;">
                    <div class ="">
                        <div class ="alert alert-success p-3" style="height: 40px;width: 70%;margin: 0 auto;margin-top: 20px;">
                            <center><small>Meluncurkan Ke lokasi kamu</small></center>
                        </div>
                    </div>

                </div>
                <div class ="col-sm-6 col-12 p-5">
                    <small> Terima kasih sudah berbelanja di Jualin</small>
                </div>
                <div class ="col-sm-3 col-12 p-5">
                    <small> Minggu, 14 mei 16:04 WIB</small>
                </div>
            </div>
            <div class ="row">
                <div class ="col-sm-3 col-12 " style="border-right: 1px solid;">
                    <div class ="">
                        <div class ="alert alert-secondary p-3" style="height: 40px;width: 70%;margin: 0 auto;margin-top: 20px;">
                            <Center><small>Admin Jualin</small></Center>
                        </div>
                    </div>

                </div>
                <div class ="col-sm-6 col-12 p-5">
                    <small> Barang kamu sedang dipacking. Segera Kirim</small>
                </div>
                <div class ="col-sm-3 col-12 p-5">
                    <small> Minggu, 14 mei 16:04 WIB</small>
                </div>
            </div>
            <div class ="row">
                <div class ="col-sm-3 col-12 " style="border-right: 1px solid;">
                    <div class ="">
                        <div class ="alert alert-secondary p-3" style="height: 40px;width: 70%;margin: 0 auto;margin-top: 20px;">
                            <center><small>Admin Jualin</small></center>
                        </div>
                    </div>

                </div>
                <div class ="col-sm-6 col-12 p-5">
                    <small>Pembayaran sudah diverifikasi. Pembayaran telah diterima Jualin dan pemesanan anda akan segera disiapkan </small>
                </div>
                <div class ="col-sm-3 col-12 p-5">
                    <small> Minggu, 14 mei 16:04 WIB</small>
                </div>
            </div>
        </div>
    </div>

@endsection
