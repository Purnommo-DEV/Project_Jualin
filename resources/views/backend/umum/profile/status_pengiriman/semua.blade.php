@foreach ($pesanBarang as $pesanBarangs)

<div class ="row" >
    <div class ="col-sm-9">
            <div class ="row">
                <i class="fas fa-shopping-bag"></i>
                <div class ="col-sm-1">
                    <small>Belanja</small>
                </div>
                <div class ="col-sm-1">
                    <small> 14 maret </small>
                </div>
                <div class ="col-sm-3">
                    <small>INV/20210314/MPL/11013543136</small>
                </div>
                <div class ="col-sm-2">
                    <div class ="border p2" style="border: 1px solid;border-radius: 10px; background-color:#cbf5dc; color:#5DC288; border-color:#5DC288">
                        {{-- <small><Center>Berhasil sampai</center></small> --}}
                    </div>
                </div>

            </div>
            <br>
            <div class ="row">
                <div class ="col-sm-1">
                    {{-- <img src ="" width="50px" height="50px"> --}}
                </div>
                <div class ="col-sm-8">
                    <b>{{$pesanBarangs->produk->umkm}}</b><br>
                    <small>Pontianak Kota</small>
                </div>
                <div class ="col-sm-3">
                    <b>Total Belanja</b><br>
                    @php
                        $total = $pesanBarangs->harga_produk * $pesanBarangs->kuantitas
                    @endphp
                    <small>@currency($total)</small>
                </div>

            </div>
       <hr>
       <div class="sepok3">
           <img src="/foto_produk/{{$pesanBarangs->produk->foto_produk1}}" width="80px" height="80px">
       </div>
       <div class="sepok4">
        <b>{{$pesanBarangs->produk->nama_produk}}</b><br>
        <small>{{$pesanBarangs->kuantitas}} barang x @currency($pesanBarangs->produk->harga_produk),-</small>
       </div>
    </div>

    <div class ="col-sm-3">
            <div style="height: 30px;"></div>
            <div class="sampai">
                <h2>{{$pesanBarangs->status}}</h2>
            </div>
        <div style="height: 10px;"></div>
            <div class ="text-center">
                <div class="berireview2">
                    <a href="{{route('umum_review_produk_driver',$pesanBarangs->id)}}" class ="btn btn-primary btn-sm">
                    Berikan Review
                    </a> 
                </div>
          </div>
    </div>

</div>
<div style="height:40px;">
</div>
@endforeach

