@extends('backend.umum.layout.header')

@section('content')
<div class = "row">
    <div class = "col-sm"></div>
    <div class = "col-sm">
        <p><b><center>Selesaikan pembayaran dalam</center></b></p>
        <p><center>(countdown Timer)</center></p>
        <p><center>Selesai akhir pembayaran</center></p>
        <p><b><center>Selasa, 16 maret 2021 10:46</center></b></p><br>
        <form method = "post">
            <input type ="text" class ="form-control" value="LinkAja" readonly>

        </form>
        <p><center>(Barcode)</center></p>
        <p><b><center>Scan QR Code</center></b></p>
        <div class = "col-sm">
        <center>
        <div class="card" style="border:none">
            <div class ="col">
                {!!$qrcode!!}
                <br>
            </div>
        </div>
        </div>
        </center>
        <div class = "col-sm"></div>
        <center>
            <div class ="col-sm">
                <a href ="" class ="btn btn-light">Kembali beranda</a>
            </div>
            <div class = "col-md"></div>
            <div class = "col-sm">
                <a href ="" class = "btn btn-primary">Belanja lagi</a>
            </div>
        </center>
    </div>
    <div class = "col-sm"></div>
</div>
</div>
@endsection
