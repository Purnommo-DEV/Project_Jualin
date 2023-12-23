@if($LoggedUserInfo['jabatan'] == "umkm")
    @extends('backend.umkm.layout.header')
    @section('title','UMKM Wallet')

    @section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header"></div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-4">
                                <div style="float:left;">
                                    <h4><b>@currency($pendapatan)</b></h4>
                                    <p>Isi Wallet Sekarang</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-8">
                                    <div style="float:left;">
                                        <img class="img-thumbnail"
                                            src="{{ asset('foto/kotak.png') }}" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12">
                                <div style="float:right;">

                                    <a href="{{ route('umkm_wallet_ke_2',$LoggedUserInfo['umkm'])}}">
                                        <button type="button" class="btn btn-primary">Ajukan
                                            Pencairan</button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">DataTable with default feature</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th scope="col">Tanggal Pencarian</th>
                                        <th scope="col">Bukti Transfer Pencairan Dana</th>
                                        <th scope="col">Nominal Pencairan</th>
                                        <th scope="col">Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                     @foreach ($data_pencairan as $data_pencairans)
                                    <tr>
                                        <th scope="row">{{$data_pencairans->tanggal_pengajuan}}</th>
                                        <td style="height: 10%"><img src="../foto_bukti_pencairan/{{$data_pencairans->bukti_transfer_dana}}" width="20%"></td>
                                        <td>@currency($data_pencairans->total_ppencairan)</td>
                                        <td>{{$data_pencairans->status}}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div> <!-- /.card-body -->
                </div>
            </div>
        </div>
    </div>
    @endsection
@endif
@if($LoggedUserInfo['jabatan'] != "umkm")
    @include('backend.404.index')
@endif
