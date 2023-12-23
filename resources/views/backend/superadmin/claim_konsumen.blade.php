@if($LoggedUserInfo['jabatan'] == "superadmin")
@extends('backend.superadmin.layout.header')

    @section('title', 'klaim_konsumen')
@section('content')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Klaim Konsumen</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{route('superadmin')}}">Dashboard</a></li>
                            <li class="breadcrumb-item active">Klaim Konsumen</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">


                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Klaim Konsumen</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">

                                                      <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th><Small><b>No</b></Small></th>
                                <th><small><b>Username</b></small></th>
                                <th><small><b>Email</b></small></th>
                                <th><small><b>Jabatan</b></small></th>
                                <th><small><b>Kontak WA</b></small> </th>
                                <th><small><b>Status</b></small> </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($user_pengguna as $index=>$datas)
                                <tr>

                                    <td>{{ $index+1 }}</td>
                                    <td>{{ $datas->username }}</td>
                                    <td>{{ $datas->email }}</td>
                                    <td>{{ $datas->jabatan }}</td>
                                    <td>{{ $datas->nomor_hp }}</td>
                                    <td>{{ $datas->status }}</td>
                            </tr>
                            @endforeach
                        </tbody>

                    </table>


                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>

    <!-- /.content-wrapper -->

@endsection
@endif
@if($LoggedUserInfo['jabatan'] != "superadmin")
    @include('backend.404.index')
    @endif
