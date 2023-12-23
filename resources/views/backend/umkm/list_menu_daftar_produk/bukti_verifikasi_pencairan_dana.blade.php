@foreach ($bukti_verifikasi_pencairan as $bukti_verifikasi_pencairans)
    

{{-- <div class="dprodukatas">
    <div class="col">
            @if($bukti_verifikasi_pencairans->status == "Belum Di Verifikasi")
            <div class="dproduk" style="border:none">
                <div class="col-8">
                <h6 style="color:black; text-align:center;">
                    Belum Melakukan Pengajuan Pencairan Dana atau Pengajuan Pencairan Dana Anda Belum di Verifikasi Oleh Admin
                    </h6>
                </div>
                <div class="col">
                </div>
            </div>
            @else
            @endif
        </a>
    </div>
</div> --}}

@if($bukti_verifikasi_pencairans->status == "Telah Di Verifikasi")
<div class="dproduk">
    <div class="col-1">
        <img src="foto_bukti_pencairan/{{ $bukti_verifikasi_pencairans->bukti_transfer_dana}}" alt="">
    </div>
    <div class="col-10">
        <div class="atas">
            <div class="row ">
                <div class="col-1">
                    <i class="fas fa-shopping-bag"></i>
                </div>
                <div class="col-2 ">
                    <h6>14 Maret</h6>
                </div>
                <div class="col-8">
                    <h6>
                        INV/20211314/MPL/11013
                    </h6>
                </div>
            </div>
        </div>
        <div class="tengah">
            <div class="row">
                <h3> </h3>
            </div>
        </div>
        <div class="bawah">
            <div class="row">
                <div class="col-5">
                    <h6> </h6>
                </div>
                <div class="col-5">
                    <h5></h5>
                </div>
                <div class="col-4">
                </div>
            </div>
        </div>
        <div class="deskripsi">
            <div class="row">
                <h3>Deskripsi </h3>
            </div>
            <div class="row">
                <h3>Pencairan Dana</h3>
            </div>
            <div class="row">
                <p> </p>
            </div>
        </div>
    </div>
    <div class="col">
        <hr>
    </div>
    <div class="col">
        <div class="tombol">
        </div>
        <div class="tombol2">
            <button type="button" value=" "
                class="btn btn-primary editBtn">Edit Produk
            </button>
        </div>
        <div class="samping">
            <div class="row">
                <h3>Harga</h3>
            </div>
            <div class="row">
                <h3><span>, - /Item</span></h3>
            </div>
        </div>
    </div>
</div>
@else
@endif
@endforeach