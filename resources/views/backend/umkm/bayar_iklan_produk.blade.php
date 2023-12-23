@if($LoggedUserInfo['jabatan'] =="umkm")
@extends('backend.umkm.layout.header')
@section('title','Biaya Pengajuan Iklan Produk')
@section('content')
     <div class="container">
      <div class="rumus1">
        <h1>Selesaikan pembayaran dalam</h1>
       </div>
       <div class="kotak1">
        <div class="col-6">
        <center>
        <div class="card">{!!$qrcode!!}
            <br>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalPembayaran"> Bayar Sekarang</button>
        </div>
        </center>
       </div>
       </div>
    </div>
<div class="modal fade" id="modalPembayaran" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Upload Bukti Pembayaran</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="{{ route('backend_save_umkm_iklankan_produk') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group ">
                <input type="hidden" name="umkm" value="{{$datas->umkm}}" class="form-control">
            </div>
            <div class="form-group ">
                <input type="hidden" name="nama_produk" value="{{$datas->nama_produk}}" class="form-control">
            </div>
            <div class="form-group ">
                <input type="hidden" name="deskripsi" value="{{$datas->deskripsi_produk}}" class="form-control">
            </div>
            <div class="form-group ">
                <input type="hidden" name="iklan_di_rentan" value="NULL" class="form-control">
            </div>
            <div class="form-group ">
                <input type="file" name="foto_bukti">
            </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Bayar Sekarang</button>
      </div>
      </form>
    </div>
  </div>
</div>


    <script>
            function startTimer(duration, display) {
            var timer = duration,hours, minutes, seconds;
            setInterval(function () {
                hours   = parseInt(timer / 3600, 10)
                minutes = parseInt(timer / 1440, 10)
                seconds = parseInt(timer % 60, 10);

                hours   = hours   < 10 ? "0" + hours   : hours  ;
                minutes = minutes < 10 ? "0" + minutes : minutes;
                seconds = seconds < 10 ? "0" + seconds : seconds;

                display.textContent = hours + ":" + minutes + ":" + seconds;

                if (--timer < 0) {
                    timer = duration;
                }
            }, 1000);
        }

            window.onload = function () {
                var fiveMinutes = 1440 * 60 ,
                    display = document.querySelector('#time');
                startTimer(fiveMinutes, display);
            };
    </script>

    {{-- <script>
        function countdown(){
            var val ;
            var now = new Date().getTime();
            var year = today.getFullYear();
            var month = today.getMonth();
            var date = today.getDate();
            var hour = today.getHours();
            var minutes = today.getMinutes();
            var second = today.getSeconds();

            if(date == 1){
                var dates = 2;
            }
            if(date == 2){
                var dates = 3;
            }
            if(date == 3){
                var dates = 4;
            }
            if(date == 4){
                var dates = 5;
            }
            if(date == 6){
                var dates = 7;
            }
            if(date == 8){
                var dates = 9;
            }
            if(date == 9){
                var dates = 10;
            }if(date == 10){
                var dates = 11;
            }if(date == 11){
                var dates =12 ;
            }if(date == 12){
                var dates =13 ;
            }if(date == 13){
                var dates = 14;
            }
            if(date == 14){
                var dates =15;
            }
            if(date == 15){
                var dates =16;
            }
            if(date == 16){
                var dates =17;
            }
            if(date == 17){
                var dates =18;
            }
            if(date == 18){
                var dates =19;
            }
            if(date == 19){
                var dates =20;
            } if(date == 20){
                var dates =21;
            } if(date == 21){
                var dates =22;
            }
            if(date == 22){
                var dates =23;
            }
            if(date == 23){
                var dates =24;
            }if(date == 24){
                var dates =25;
            }
            if(date == 25){
                var dates =26;
            }
            if(date == 26){
                var dates =27;
            }
            if(date == 27){
                var dates =28;
            }if(date == 28){
                var dates =29;
            }if(date == 29){
                var dates =30;
            }if(date == 30){
                var dates =1;
            }if(date == 31){
                var dates =1;
            }
            var countdowndate = new date(year, month, dates).getTime();
            var currentTime = now.getTime();
            var eventTime = countdowndate.getTime();
            var remtime = eventTime - currentTime;
            var s = Math.floor(remtime/1000);
            var m = Math.floor(s / 60);
            var h = Math.floor (m / 60);
            var d = Math.floor(h /24);

            h %= 24;
            m %= 60;
            s %= 60;

            h = (h < 10) ? "0" +h:h;
            m = (m < 10) ? "0" + m:m;
            s = (m < 10) ? "0" + s:s;

            document.getElementById("hour").textContent = h;
            document.getElementById("minute").textContent= m;
            document.getElementById("second").textContent = s;

            setTimeout(countdown, 1000);
        }

      countdown();



    </script> --}}
@endsection
@endif
@if($LoggedUserInfo['jabatan'] != "umkm")
    @include('backend.404.index')
    @endif

