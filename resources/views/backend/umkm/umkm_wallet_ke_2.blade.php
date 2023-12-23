@if($LoggedUserInfo['jabatan'] == "umkm")
    @extends('backend.umkm.layout.header')
    @section('title','UMKM Wallet')
    @section('content')
    <!-- Main content -->
    <div class="container">
        <section class="content">
            <div class="row">
                <div class="col-8">
                    <div class="card">
                        <div class="card-header">
                            <b> Pencairan Hasil Penjualan</b><br>
                            <b>@currency($pendapatan)</b><br>
                            @php $hasil_penjualan = $pendapatan - 10000 @endphp
                        </div>
                        <div class="card-body"></div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card">
                        <div class="card-header">
                            <b>Ringkasan pencairan</b>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-6">
                                    Total Pencairan
                                </div>
                                <div class="col-sm-6">
                                    @currency($pendapatan)
                                </div>
                                <div class="col-sm-6">
                                    Pembagian Hasil
                                </div>
                                <div class="col-sm-6">
                                    Rp 10.000
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-6">
                                    Total
                                </div>
                                <div class="col-6">
                                   @currency($hasil_penjualan)
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <form action="{{ route('umkm_ajukan_pencaian') }}" method="post"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="form-group ">
                                    <input type="hidden" name="nama_umkm" value="{{ $LoggedUserInfo['umkm'] }}">
                                    <input type="hidden" name="tanggal_pengajuan" value="{{$waktuSekarang}}">
                                    <input type="hidden" name="total_penjualan" value="{{$hasil_penjualan}}">
                                    <input type="hidden" name="total_ppencairan" value="{{$hasil_penjualan}}">
                                    <input type="hidden" name="status" value="Belum Di Verifikasi">
                                    <input type="hidden" name="status_notifikasi" value="belum aksi">
                                    <input type="hidden" name="pemberitahuan" value="UMKM Melakukan Pengajuan Pencairan Data">
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
            <div class="col-sm-9 col-12">
                <b>Metode Pembayaran</b><br>
                <select class="form-control">
                    <option> LinkAja</option>
                </select>
            </div>
    </div>
    </section>
    <!-- /.content -->
    </div>
    @endsection
@endif
@if($LoggedUserInfo['jabatan'] != "umkm")
    @include('backend.404.index')
@endif
