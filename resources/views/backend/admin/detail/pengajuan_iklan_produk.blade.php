@extends('backend.admin.layout.layout_detail')
@section('title','Pengajuan Iklan produk')

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">


  <!-- Main content -->
  <section class="content mt-3">

    <!-- Default box -->
    <div class="card">

      <div class ="row">
        <div class ="col-6">

        </div>
        <div class ="col-6">
          <div class="card-tools">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Detail Pengajuan Iklan Produk</li>
            </ol>
          </div>
        </div>

        
      </div>
      @foreach ($pengajuan_iklan_produk as $val)
      <div class="card-body">
        <div class ="row">
          <div class ="col-6">
            <div class ="row">
              <div class="col-4">
                <p><b>Nama Toko</b></p>
                <p><b>Nama Produk</b></p>
                <p><b>Total Pembayaran</b></p>
                <p><b>foto Bukti Pembayaran</b></p>
                <div style="height: 100px"></div>
                <p><b>Deskripsi Produk</b></p>
              </div>
              <div class ="col-1">
                <p><b>:</b></p>
                <p><b>:</b></p>
                <p><b>:</b></p>
                <p><b>:</b></p>
                <div style="height: 100px"></div>
                <p><b>:</b></p>
              </div>
              <div class="col-7">
                <p>{{ $val->umkm }}</p>
                <p>{{ $val->nama_produk }}</p>
                <p>{{ $val->total_pembayaran }}</p>
                <p><img src="foto_produk/{{ $val->foto_produk1 }}" width="100px" height="100px"></p>
                <div style="height: 22px;" ></div>
                <p>sadasdasd</p>
              </div>
            </div>
          </div>
          <div class ="col-6">
            @foreach ($verifikasi_produks as $var)
            @if ($var->nama_produk == $val->nama_produk)
            <div class ="row">
              <div class="col-4">

                <p><b>Kategori</b></p>
                <p><b>Harga Produk</b></p>
                <p><b>Total stok</b></p>
                <p><b>Ukuran</b></p>
                <p><b>Berat</b></p>
                <p><b>Kondisi</b></p>
                 <p><b>Foto Produk</b></p>
              </div>
              <div class ="col-1">
                <p><b>:</b></p>
                <p><b>:</b></p>
                <p><b>:</b></p>
                <p><b>:</b></p>
                <p><b>:</b></p>
                <p><b>:</b></p>
                
              </div>
              <div class="col-7">
                <p>{{ $var->kategori  }}</p>
                <p>{{ $var->harga_produk }}</p>
                <p>{{ $var->total_stok }}</p>
                <p>{{ $var->ukuran }}</p>
                <p>{{ $var->berat }}</p>
                <p>Baru</p>
                <p><img src="foto_produk/ {{ $var->foto_produk1 }}" width="100px" height="100px"></p>

              </div>
            </div>
            @endif

            @endforeach

          </div>
        </div>
      </div>

      <!-- /.card-body -->
      <div class="card-footer">
       <a class="btn btn-primary" data-toggle="modal" href='#m_edit-{{ $val->id }}'>Verifikasi</a>
       <div class="modal fade" id="m_edit-{{ $val->id }}">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Verifikasi</h4>
            </div>
            <form method="post" action="{{ route('update_detail_pengajuan_iklan_produk',$val->id) }}">
              @csrf
            <div class="modal-body">
                    <h3>Apa Anda Yakin?</h3>
              <input type ="text" name ="status_pembayaran" value ="selesai bayar" hidden>
              <input type ="text" name ="status_notifikasi" value ="aksi" hidden>

            </div>
            <div class="modal-footer">
             <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
             <button type="submit" class="btn btn-primary">Save</button>
           </form>
         </div>
       </div>
     </div>
   </div>
 </div>
 <!-- /.card-footer-->
</div>
@endforeach      

<!-- /.card -->

</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->


@endsection
