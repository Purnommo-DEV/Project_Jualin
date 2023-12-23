@foreach ($pemesanan as $pemesanans)

<div class ="row" >
    <div class ="col-sm-9">
            <div class ="row">
            </div>
            <br>
            <div class ="row">
                <div class ="col-sm-4">
                    <b>Nomor Pelacakan</b><br>
                    <small>{{$pemesanans->tracking_nomor}}</small>
                </div>
                <div class ="col-sm-4">
                    <b>Total Belanja</b><br>
                    <small>@currency($pemesanans->total_bayar)</small>
                </div>
                <div class ="col-sm-4">
                    <b>Status</b><br>
                    <small>Pending</small>
                </div>

            </div>
       <hr>
       <div class="sepok4">
        <b></b><br>
        <small> </small>
       </div>
    </div>

    <div class ="col-sm-3">
            <div style="height: 30px;"></div>
            <div class="sampai">
                <button type="button" value="{{ $pemesanans->id }}"class="btn btn-info viewBarangBtn btn-sm">View</button>
            </div>
        <div style="height: 10px;"></div>
            <div class ="text-center">
                <div class="berireview2">
                </div>
          </div>
    </div>

</div>
<div style="height:40px;">
</div>
@endforeach

    <div class="modal fade modal-lg" id="viewBarangModal" tabindex="-1" aria-labelledby="exampleModalLabel1" aria-hidden="true">
                    <div class="modal-content">
                    @foreach ($pesanBarang as $pesanBarangs)
                        <div class ="card">
                            <div class ="card-body">
                                <div class ="row">
                                    <div class ="col-sm-9">
                                        <div class ="row">
                                            <i class="fas fa-shopping-bag"></i>
                                            <div class ="col-sm-2">
                                                <small>Belanja</small>
                                            </div>
                                            <div class ="col-sm-2">
                                                <small> 14 maret </small>
                                            </div>
                                            <div class ="col-sm-3">
                                                <small>INV/20210314/MPL/11013543136</small>
                                            </div>
                                            <div class ="col-sm-3">
                                                <small><Center>(Tiba pada 23 Maret 2021)</center></small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class ="col-sm-3"></div>
                                </div>
                                <br>
                                <div class ="row">
                                    <div class ="col-sm-4">
                                        <div class ="row">
                                            <div class ="col-3">
                                                <img src ="" width="50px" height="50px">
                                            </div>
                                            <div class ="col-9">
                                                <small><b>{{ $pesanBarangs->produk_id }}</b></small><br>
                                                <Small>1 barang Rp 13.000</Small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class ="col-sm-2">
                                        <div class ="border p2" style="border: 1px solid;border-radius: 10px; background-color:#cbf5dc; color:#5DC288; border-color:#5DC288">
                                            <small><Center>Berhasil sampai</center></small>
                                        </div>

                                    </div>
                                    <div class ="col-sm-2">
                                        <center><small><b>Total Belanja</b></small><br>
                                            <Small>Rp 100.000</Small></center>
                                    </div>
                                    <div class ="col-sm-4">
                                        <center><small>Sudah Memberikan Review</small></center>
                                        </div>
                                    </div>

                                </div>
                        </div>
                    @endforeach
                    </div>
                </div>