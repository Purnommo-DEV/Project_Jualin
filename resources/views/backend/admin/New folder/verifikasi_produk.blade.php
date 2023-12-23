@if($LoggedUserInfo['jabatan'] == "admin")
@extends('backend.admin.layout.datatable_header')
@section('Verifikasi Produk')
@section('content')
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="../../index3.html" class="brand-link">
        <img src="{{asset('adminlte/dist/img/AdminLTELogo.png')}}"
        alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>
    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{asset('adminlte/dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block"></a>
            </div>
        </div>
        <!-- SidebarSearch Form -->
        <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div>
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <a class="nav-link" href="{{route('admin_dashboard')}}" >
                        <i class="fas fa-align-justify mr-1"> </i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link active" href="{{route('backend_admin_verifikasi_produk')}}">
                        <i class="fas fa-user-check mr-1"></i>
                        <p>
                            Verifikasi Produk UMKM
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="{{route('backend_admin_verifikasi_pembelian')}}" >
                        <i class="fas fa-clipboard-check mr-1"></i>
                        <p>
                            Verifikasi Pembelian
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link " href="{{route('backend_admin_pengajuan_pro_umkm')}}" >
                        <i class="fas fa-clipboard-list mr-1"></i>
                        <p>
                            Pengajuan Pro UMKM
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="{{route('backend_admin_pengajuan_iklan_produk')}}" >
                        <i class="fas fa-clipboard-list mr-1"></i>
                        <p>
                            Pengajuan iklan produk
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="{{route('backend_admin_managemen_user')}}" >
                        <i class="fas fa-user-tie mr-1"></i>
                        <p>
                            Manajemen User
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="{{route('backend_admin_manajemen_kategori_produk')}}" >
                        <i class=" far fa-image mr-1"></i>
                        <p>
                            Kategori Produk
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="{{route('backend_admin_notifikasi')}}" >
                        <i class="fas fa-bell mr-1"></i>
                        <p>
                            Notifikasi
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('backend_verifikasi_umkm')}}">
                        <i class="far fa-check-square mr-1"></i>
                        <p>
                            Verifikasi UMKM
                        </p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>

<div class="content-wrapper">
    <div class="content-header">
        <div class="container">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0"> Verifikasi Produk UMKM</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{route('admin_dashboard')}}">Dashboard</a></li>
                        <li class="breadcrumb-item"><a href="{{route('backend_admin_verifikasi_produk')}}">Verifikasi Produk UMKM</a></li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <div class="content">
        <div class=" ml-3 mr-3">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Verifikasi Produk UMKM</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th><Small><b>No</b></Small></th>
                                <th><small><b>Umkm</b></small></th>
                                <th><small><b>Nama Produk</b></small></th>
                                <th><small><b>Deskripsi Produk</b></small></th>
                                <th><small><b>Total Stok</b></small> </th>
                                <th><small><b>Harga_Produk</b></small> </th>
                                <th><small><b>Gambar Produk</b></small></th>
                                <th><small><b>Status</b></small> </th>
                            </tr>
                        </thead>
                        <tbody>
                          <tr>
                            @foreach($verifikasi_produk as $index=>$datas)
                
                              
                            <td>{{ $index+1 }}</td>
                            <td>{{ $datas->umkm }}</td>
                            <td>{{ $datas->nama_produk }}</td>
                            <td>{!! $datas->deskripsi_produk !!}</td>
                            <td>{{ $datas->total_stok }}</td>
                            <td>@currency($datas->harga_produk)</td>
                            <td>{{ $datas->foto_produk }}</td>
                            <td>
                                @if($datas->status_verifikasi=="Telah Di Verifikasi")
                                <button class ="btn btn-primary btn-sm">{{ $datas->status_verifikasi }}</button>
                                @else
                                <a class="btn btn-danger btn-sm" data-toggle="modal" href='#m_edit-{{ $datas->id}}'><i class="ft ft-edit"></i>{{ $datas->status_verifikasi }}</a>
                                <div class="modal fade" id="m_edit-{{ $datas->id }}">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title">Status</h4>
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            </div>
                                            <form method="post" action ="{{ url('admin/update__produk',$datas->id) }}">
                                                @csrf
                                                <div class="modal-body">
                                                    <h4>Apa Anda Sudah Yakin?</h3>
                                                        <input type ="text" name ="status_verifikasi" value ="Telah Di Verifikasi" hidden>
                                                        <input type ="text" name ="status_notifikasi" value ="aksi" hidden>
                        
                                                    </div>
                                                    <div class="modal-footer">
                                                     <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                     <button type="submit" class="btn btn-primary">Yakin</button>
                                                 </div>
                                                 </form>
                                             </div>
                                         </div>
                                     </div>
                                 </div>

                                 @endif
                                 <a class="btn btn-secondary btn-sm" data-toggle="modal" href='#m_detail-{{ $datas->id }}'>
                                    <i class ="fa fa-eye"></i> Detail</a>
                                    <div class="modal fade" id="m_detail-{{ $datas->id }}">
                                        <div class="modal-dialog modal-xl">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h4 class="modal-title">Detail Produk</h4>
                                                </div>
                                                <div class="modal-body">

                                                    <div class="row">
                                                        <div class="col-6">
                                                            <div class="form-group">
                                                                <label>Nama Barang</label>
                                                                <p>{{ $datas->nama_produk }}</p>
                                                            </div>
                                                            <div class="form-group">
                                                              <label>Kategori</label>
                                                              <p>{{ $datas->kategori }}</p>
                                                          </div>
                                                          <div class="form-group">
                                                            <label>Harga Barang</label>
                                                            <p>{{ $datas->harga_produk }}</p>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Stok Barang</label>
                                                            <p>{{ $datas->total_stok }}</p>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Ukuran Barang</label>
                                                            <p>{{ $datas->ukuran }}</p>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Berat Barang</label>
                                                            <p>{{ $datas->berat }}</p>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Deskripsi</label>
                                                            <p>{{ $datas->deskripsi_produk }}</p>
                                                        </div>
                                                    </div>
                                                    <div class="col-4">
                                                        <div class="form-group">
                                                            <label>Foto Normal</label><br>
                                                            <img src = "foto_produk/{{ $datas->foto_produk1 }}"width ="200px"  height="200px"   >
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Foto Atas</label><br>
                                                            <img src = "foto_produk/{{ $datas->foto_produk2 }}" width ="200px"   height="200px" >
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Foto Bawah</label><br>
                                                            <img src ="foto_produk/{{ $datas->foto_produk3 }}" width ="200px" height="200px">
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Foto Kanan</label><br>
                                                            <img src = "foto_produk/{{ $datas->foto_produk4 }}" width="200px" height="200px">
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Foto kiri</label><br>
                                                            <img src ="foto_produk/{{ $datas->foto_produk5 }}" width="200px" height="200px">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                   <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                               </form>
                                           </div>
                                       </div>
                                   </div>
                               </div>
                           </td>
                       </tr>
                      
                          
                       @endforeach
                   </tbody>
               </table>
           </div>
           <!-- /.card-body -->
       </div>
   </div><!-- /.container-fluid -->
</div>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->
</div>

@endsection
@endif
@if($LoggedUserInfo['jabatan'] != "admin")
@include('backend.404.index')
@endif
