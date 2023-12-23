@extends('backend.admin.layout.layout_detail')
@section('title','Pengajuan Premium')

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Detail Pengajuan Premium</h1>
        </div>
        <div class="col-sm-6">

        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>
  <!-- Main content -->
  <section class="content">
    <!-- Default box -->
    <div class="card">
     <div class="card-tools">
       <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item active">Detail Pengajuan premium</li>
      </ol>
    </div>
    <div class="card-body">
      <div class ="row">
        <div class ="col-6">
          <div class ="row">
            <div class ="col-4">
              <p><b>Username</b></p>
              <p><b>Nama Toko</b></p>
              <p><b>Email</b></p>
              <p><b>Jabatan</b></p>
              <p><b>No Handphone</b></p>
              <p><b>Alamat</b></p>
            </div>
            <div class ="col-1">
              <p><b>:</b></p>
              <p><b>:</b></p>
              <p><b>:</b></p>
              <p><b>:</b></p>
              <p><b>:</b></p>
              <p><b>:</b></p>
            </div>
            <div class ="col-7">
            
              @foreach ($detail_verifikasi_umkm as $var)
              @if ($detail_pengajuan_premium->umkm == $var->username)
                {{-- expr --}}
              @endif
                <p>{{ $var->username }}</p>
                <p>{{ $var->nama_umkm }}</p>
                <p>{{ $var->email }}</p>
                <p>{{ $var->jabatan }}</p>
                <p>{{ $var->kontak_wa }}</p>
                <p>{{ $var->alamat }}</p>
              @endforeach
            </div>
            <div class ="col-6">
            
            </div>
            </div>
          </div>
          <div class ="col-6">
                <div class="row">
                <div class ="col-4">
                  <p><b>Tgl Pengajuan Premium</b></p>
                  <p><b>Metode Pembayaran</b></p>
                  <p><b>Foto Bukti Pembayaran</b></p>
                </div>
                <div class ="col-1">
                  <p><b>:</b></p>
                  <p><b>:</b></p>
                  <p><b>:</b></p>
                </div>
                <div class ="col-7">
                  
                    <p>{{ $detail_pengajuan_premium->mengajukan_tanggal }}</p>
                    <p>{{ $detail_pengajuan_premium->metode_pembayaran }}</p>
                    <p>{{ $detail_pengajuan_premium->foto_bukti }}</p>
              
                  
                </div>
              </div>
          </div>
        </div>
      </div>
       <div class="card-footer">
     <a class="btn btn-warning btn-sm" data-toggle="modal" href='#m_edit-{{ $detail_pengajuan_premium->id }}'><i class="ft ft-edit"></i>Edit</a>
                                                <div class="modal fade" id="m_edit-{{ $detail_pengajuan_premium->id }}">
                                                    <div class="modal-dialog modal-lg">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h4 class="modal-title">Verifikasi umkm</h4>
                                                            </div>
                                                            <form method ="post" action ="">
                                                            <div class="modal-body">
                                                                <input type ="text" name ="status_notifikasi" value ="aksi" hidden>
                                                                <input type ="text" name ="status_pembayaran" value ="selesai bayar" hidden> 
                                                            </div>
                                                            <div class="modal-footer">
                                                              <input type ="submit" class ="btn btn-primary btn-sm">
                                                            </div>
                                                          </form>
                                                        </div>
                                                    </div>
                                                </div>
    </div>
    </div>
    <!-- /.card-body -->
   
  </div>


</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection
