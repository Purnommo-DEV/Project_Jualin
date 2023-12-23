@extends('backend.superadmin.layout.header_datatable')

@section('title','Kurir')

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
        <a href="#" class="d-block">Alexander Pierce</a>
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
                    <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library -->
                     <li class="nav-item">
                      <a class="nav-link" href="{{route('superadmin')}}" >
                        <i class="fas fa-align-justify mr-1"></i>
                        <p>
                          Dashboard
                        </p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link " href="{{route('superadmin_laporan_jumlah_produk')}}" >
                        <i class="far fa-clipboard mr-1"></i>
                        <p>
                          Laporan Jumlah Produk
                        </p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link " href="{{route('superadmin_laporan_jumlah_produk')}}" >
                        <i class="far fa-clipboard mr-1"></i>
                        <p>
                          Klaim Konsumen
                        </p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="{{route('superadmin_laporan_jumlah_umkm')}}" >
                        <i class="far fa-clipboard mr-1"></i>
                        <p>
                         Laporan Jumlah UMKM
                       </p>
                     </a>
                   </li>
                   <li class="nav-item">
                    <a class="nav-link " href="{{route('superadmin_laporan_jumlah_transaksi')}}" >
                      <i class="far fa-clipboard mr-1"></i>
                      <p style="font-size: 14px;">
                        Laporan Jumlah Transaksi
                      </p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link " href="{{route('superadmin_laporan_income')}}" >
                      <i class="far fa-clipboard mr-1"></i>
                      <p>
                        Laporan Income
                      </p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link " href="#produk_terlaris" >
                      <i class="fas fa-dolly mr-1"></i>
                      <p>
                        Produk Terlaris
                      </p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link " href="{{route('superadmin_review_produk')}}" >
                      <i class="fas fa-chalkboard-teacher mr-1"></i>
                      <p>
                        Review Produk
                      </p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link " href="{{route('superadmin_review_kurir')}}" >
                      <i class="fas fa-chalkboard-teacher mr-1"></i>
                      <p>
                        Review Kurir
                      </p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link  " href="{{route('superadmin_pengajuan_pencairan')}}" >
                      <i class="fas fa-people-carry mr-1"></i>
                      <p>
                        Pengajuan pencairan
                      </p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{route('superadmin_manajemen_user')}}" >
                      <i class="fas fa-user-tie mr-1"></i>
                      <p>
                        Manajemen User
                      </p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{route('tentang_jualin')}}" >
                      <i class="fas fa-user-tie mr-1"></i>
                      <p>
                        Tentang Jualin
                      </p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{route('slider_superadmin')}}" >
                      <i class="fas fa-user-tie mr-1"></i>
                      <p>
                        Slider
                      </p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active" href="{{route('kurir')}}" >
                      <i class="fas fa-user-tie mr-1"></i>
                      <p>
                        Kurir
                      </p>
                    </a>
                  </li>
                </ul>
              </nav>
              <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
          </aside>
          <!-- Content Wrapper. Contains page content -->
          <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">

            </section>

            <!-- Main content -->
            <section class="content">

              <!-- Default box -->
              <div class="card">
                <div class ="row">
                  <div class ="col-6">
                   <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-default">
                    <i class ="fa fa-plus"></i> Tambah
                  </button>
                </div>
              </div>
              <div class ="col-6">

              </div>
              <div class="card-tools">
               <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Kurir</li>
              </ol>
            </div>
            <div class="card-body">
           <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th width="5%"><Small><b>No</b></Small></th>
                                <th width="10%">Foto kurir</th>
                                <th><small><b>No KTP</b></small></th>
                                <th><small><b>Username</b></small></th>
                                <th><small><b>Email</b></small> </th>
                                <th><small><b>Jenis Kelamin</b></small> </th>
                                <th><small><b>Alamat</b></small> </th>
                                <th><small><b>Aksi</b></small> </th>
                            </tr>
                        </thead>
                        <tbody>
                          @foreach ($user_pengguna as $index => $val)
                          @if ($val->jabatan == "kurir")
                              <tr>
                              <td>{{ $index+1 }}</td>
                              <td><img src ="{{asset('foto_kurir/$val->foto_kurir')}}" width="100px" height="100px"> </td>
                              <td> {{ $val->no_ktp }}</td>
                              <td>{{ $val->username }}</td>
                              <td>{{ $val->email }}</td>
                              <td>{{ $val->jenis_kelamin }}</td>
                              <td>{{ $val->alamat_rumah }}</td>
                              <td width="10%">
                                   <a class="btn btn-warning btn-sm" data-toggle="modal" href='#m_edit-{{ $val->id }}'><i class="fa fa-edit"></i> Edit</a>
                                                <div class="modal fade" id="m_edit-{{ $val->id }}">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h4 class="modal-title">Edit Data Kurir</h4>
                                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                            </div>
                                                            <form method="post" action ="{{ route('update_kurir',$val->id) }}">
                                                              @csrf
                                                            <div class="modal-body">
                                                                <div class ="form-group">
                                                                  <label>No KTP</label>
                                                                  <Input type ="text" name ="no_ktp" class ="form-control" value ="{{ $val->no_ktp }}">
                                                                </div>
                                                                <div class ="form-group">
                                                                  <label>foto Kurir</label>
                                                                  <img src ="foto_kurir/{{ $val->foto_kurir }}"><br>
                                                                  <input type ="file" name ="foto_kurir" value ="{{ $val->foto_kurir }}" >
                                                                </div>
                                                                <div class ="form-group">
                                                                  <label>Username</label>
                                                                  <input type ="text" value ="{{ $val->username }}" name ="username" class ="form-control">
                                                                </div>
                                                                <div class ="form-group">
                                                                  <label>Email</label>
                                                                  <input type ="email" value ="{{ $val->email }}" name ="email" class ="form-control">
                                                                </div>
                                                                  <div class ="form-group">
                                                                  <label>Tanggal Lahir</label>
                                                                  <input type ="date" value ="{{ $val->tgl_lahir }}" name ="tgl_lahir" class ="form-control">
                                                                </div>
                                                                <div class ="form-group">
                                                                  <label>Jenis Kelamin</label>
                                                                  <input type ="text" name ="jenis_kelamin" class ="form-control" value ="{{ $val->jenis_kelamin }}">
                                                                </div>
                                                                <div class ="form-group">
                                                                  <label>Password</label>
                                                                  <input type="password" name="password" class ="form-control">
                                                                </div>
                                                            </div>
                                                            <div class ="modal-footer">
                                                                <button type="submit" class ="btn btn-warning"><i class ="fa fa-edit"></i> Update</button>
                                                            </div>
                                                          </form>
                                                        </div>
                                                    </div>
                                                </div>
                                                 <a class="btn btn-danger btn-sm" data-toggle="modal" href='#m_delete-{{ $val->id }}'><i class="fa fa-trash"></i> Delete</a>
                                                <div class="modal fade" id="m_delete-{{ $val->id }}">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h4 class="modal-title">Edit Data Kurir</h4>
                                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                            </div>
                                                           <form method="post" action = "{{ route('delete_kurir',$val->id) }}"
                                                          enctype="multipart/form-data"
                                                            >
                                                            @csrf
                                                            <div class="modal-body">
                                                              
                                                            </div>
                                                            <div class ="modal-footer">
                                                                <button type="submit" class ="btn btn-danger"><i class ="fa fa-trash"></i> Delete</button>
                                                            </div>
                                                          </form>
                                                        </div>
                                                    </div>
                                                </div>
                              </td>
                            </tr>
                          @endif
                          
                          @endforeach
                         
                        </tbody>

                    </table>

            </div>
            <!-- /.card-body -->
            <div class="card-footer">
              Footer
            </div>
            <!-- /.card-footer-->
          </div>
          <!-- /.card -->

        </section>
        <!-- /.content -->
      </div>
      <!-- /.content-wrapper -->

      <div class="modal fade" id="modal-default">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Tambah Data Kurir</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form method="post" action="{{ route('tambah_kurir') }}" enctype="multipart/form-data">
              @csrf
              <div class="modal-body">
                <div class ="form-group">
                    <label>Foto Kurir</label><br>
                    <input type="file" name="foto_kurir" >
                </div>
                <div class ="form-group">
                  <label>No KTP</label>
                  <input type ="text" name ="no_ktp" placeholder="No KTP" class ="form-control">
                </div>
                <div class ="form-group">
                  <label>Username</label>
                  <input type ="text" name ="username" placeholder="Username" class ="form-control">
                </div>
                <div class ="form-group">
                  <label>Tanggal Lahir</label>
                  <input type ="date" name ="tgl_lahir" class ="form-control">
                </div>
                <div class ="form-group">
                  <label>Email</label>
                  <input type ="text" name ="email" placeholder="Email" class ="form-control">
                </div>
                <div class ="form-group">
                  <label>Alamat Rumah</label>
                  <input type ="text" name ="alamat_rumah" placeholder="Alamat" class ="form-control">
                </div>
                <div class ="form-group">
                  <label>Jenis Kelamin</label>
                  <select name ="jenis_kelamin" class ="form-control">
                    <option>----Pilih Jenis Kelamin---</option>
                    <option>Laki-Laki</option>
                    <option>Perempuan</option>
                  </select>
                </div>
                <div class ="form-group">
                  <label>Password</label>
                  <input type ="password" name ="password" class ="form-control">
                </div>
                <input type ="text" name ="jabatan" value ="kurir" hidden>
              </div>
              <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save Kurir</button>
              </div>
            </form>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->
      @endsection