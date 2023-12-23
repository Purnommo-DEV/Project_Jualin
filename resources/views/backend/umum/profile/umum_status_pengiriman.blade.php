<div class ="row">
    <div class ="col-sm-3">
        <div class="input-group ">
            <input type="search" class="form-control form-control" placeholder="Type your keywords here" value="Lorem ipsum">
            <div class="input-group-append">
                <div class="cari2"><button type="submit" class="btn  btn-default">
                    <i class="fa fa-search"></i>
                </button></div>
            </div>
        </div>
    </div>
    <div class ="col-sm-3">
        <div class="filer2">
            <select class ="form-control">
            <option>Filter Jenis barang atau jasa</option>
        </select>
        </div>
    </div>
    <div class ="col-sm-3">
        <input type ="date" class ="form-control">
    </div>

    <div class ="col-sm-3"></div>
</div>
    <div class="row">
        <div class="col-12">

                    <h6 class="card-title p-3">Status Pengiriman</h6>
                    <div class="pengiriman">
                        <ul class="nav nav-pills ml-auto p-2">
                            <li class="nav-item"><a class="nav-link active" href="#semua" data-toggle="tab">Semua</a></li>
                            <li class="nav-item"><a class="nav-link " href="#berhasil_sampai" data-toggle="tab">Berhasil Kirim</a></li>
                            <li class="nav-item"><a class="nav-link" href="#di_proses" data-toggle="tab">Di Proses</a></li>
                            <li class="nav-item"><a class="nav-link" href="#berhasil_dikirim" data-toggle="tab">Sedang Dikirim</a></li>
                            <li class="nav-item"><a class="nav-link" href="#dibatalkan" data-toggle="tab">Di Batalkan</a></li>
                        </ul>
                    </div>
            <hr>
                </div><!-- /.card-header -->
                <div class="card-body">
                    <div class="tab-content">
                        <div class="tab-pane active" id="semua">
                            @include('backend.umum.profile.status_pengiriman.semua')
                        </div>
                        <div class="tab-pane" id="berhasil_sampai">
                            @include('backend.umum.profile.status_pengiriman.berhasil_sampai')
                        </div>

                        <div class="tab-pane" id="di_proses">
                            @include('backend.umum.profile.status_pengiriman.di_proses')
                        </div>

                        <div class ="tab-pane" id ="berhasil_dikirim">
                            @include('backend.umum.profile.status_pengiriman.berhasil_dikirim')
                        </div>

                        <div class ="tab-pane" id ="dibatalkan">
                            @include('backend.umum.profile.status_pengiriman.dibatalkan')
                        </div>
                    </div>
                    <!-- /.tab-content -->
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->
