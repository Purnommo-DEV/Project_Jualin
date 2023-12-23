@extends('backend.admin.layout.layout_detail')
@section('title','Pengajuan Iklan produk')
    
    @section('content')
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1></h1>
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
              <li class="breadcrumb-item active">Detail UMKM</li>
            </ol>
          
          </div>
        <div class="card-body">
          <div class="row">
               <div class ="col-sm-3">
        <div class ="card">
            <div class ="card-body">
                <img src ="" height="200px" width="200px">
            </div>
            <div class ="card-footer">
                <button class ="btn btn-primary btn-sm w-100">
                    Pilih Foto
                </button>
            </div>
        </div>
    </div>
     <div class ="col-sm-5">
        <b>Biodata diri</b>
        <hr>
        @foreach ($verifikasi_umkm as $val)
          {{-- expr --}}
        @endforeach
        <div class ="row">
            <div class ="col-3"><small>Username</small></div>
            <div class ="col-1">:</div>
            <div class ="col"><small><b>{{ $val->username }}</b></small></div>
        </div>
        
        <div class ="row">
            <div class ="col-3"><small>Jabatan</small></div>
            <div class ="col-1">:</div>
            <div class ="col"><small><b>{{ $val->jabatan }}</b></small></div>
        </div>
        <div class ="row">
            <div class ="col-3"><small>Alamat </small></div>
            <div class ="col-1">:</div>
            <div class ="col"><small><b>{{ $val->alamat }}</b></small></div>
        </div>
        <br>
        <b>Informasi Kontak</b>
        <hr>
        <div class ="row">
            <div class ="col-3"><small>Email</small></div>
            <div class ="col-1">:</div>
            <div class ="col"><small><b>{{ $val->email }}</b></small></div>
        </div>
        
        <div class ="row">
            <div class ="col-3"><small>No Whatsapp</small></div>
            <div class ="col-1">:</div>
            <div class ="col"><small><b>{{ $val->kontak_wa }}</b></small></div>
        </div>
        <br>
        <b>Akun</b>
        <hr>
        <div class ="row">
            <div class ="col-3"><small>Premium UMKM</small></div>
            <div class ="col-1">:</div>
            <div class ="col"><small><b>{{ $val->verifikasi_premium }}</b></small></div>
        </div>
       
        <div class ="row">
            <div class ="col-3"><small>No KTP</small></div>
            <div class ="col-1">:</div>
            <div class ="col"><small><b>123456789</b></small></div>
        </div>
    </div>
          </div>
        
      

    <div class ="col-sm-4">
        
    </div>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
          <a href="{{ route('admin_dashboard') }}" class ="btn btn-primary ">Kembali</a>
        </div>
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  @endsection
