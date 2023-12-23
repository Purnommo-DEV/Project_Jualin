@extends('backend.Login_and_register.layout.header_login')

@section('content')

<body class="hold-transition register-page">
    <div class="register-box">
        <div class="card card-outline card-primary">
            <div class="card-header text-center">
                <a href="../../index2.html" class="h5">Daftarkan diri anda segera</a><br>
                <small class="login-box-msg">
                    untuk tujuan regulasi industri, detail data pribadi anda diperlukan
                </small>
            </div>
            <div class="card-body">
                <form action="{{ route('save_user') }}" method="post">
                
                @csrf
                  <div class="form-group ">
                    <label><small>NIK</small></label>
                    <input type="text" name="no_ktp" class="form-control" placeholder="No KTP">
                    
                </div>
                <div class="form-group ">
                    <label><small>Nama Personal/ UMKM/ Instansi</small></label>
                    <input type="text" name="username" class="form-control" placeholder="Nama Personal">
                    <span class ="text-danger">@error('username') {{$message}} @enderror</span>
                </div>
                    <div class="form-group ">
                        <label><small> Email</small></label>
                        <input type="email" name="email" class="form-control" placeholder="Email">
                        <span class="text-danger">@error('email') {{ $message }} @enderror</span>
                    </div>
                        <div class="form-group ">
                        <label><small> Alamat</small></label>
                        <input type="text" name="alamat_rumah" class="form-control" placeholder="Alamat">
                    </div>
                      <div class="form-group ">
                        <label><small>Tanggal Lahir</small></label>
                        <input type="date" name="tgl_lahir" class="form-control">
                    </div>
                    <div class="form-group ">
                        <label><small>Nomor Handphone</small></label>
                        <input type="number" name="nomor_hp" class="form-control" placeholder="Nomor Hp">
                        <span class="text-danger">@error('nomor_hp') {{ $message }} @enderror</span>
                    </div>
                    <div class="form-group ">
                        <label><small>Jenis Kelamin</small></label>
                        <input type="text" name="jenis_kelamin" class="form-control" placeholder="Jenis Kelamin">
                        
                    </div>
                    <div class="form-group ">
                        <label><small>Daftar Sebagai</small></label>
                        <select class="form-control" name="jabatan">
                            <option>---Pilih daftar sebagai---</option>
                            <option value="user_pengguna">User Pengguna</option>
                            <option value="umkm">UMKM</option>
                        
                        </select>
                        <span class="text-danger">@error('jabatan') {{ $message }} @enderror</span>
                    </div>
                    <input type="text" name="status" class="form-control" value="belum mendaftar" hidden>
                    <div class="form-group mb-3">
                        <label><small>Password</small></label>
                        <input type="password" name="password" class="form-control" placeholder="Password">
                        <span class="text-danger">@error('password') {{ $message }} @enderror</span>
                    </div>
                    <div class="row">
                        <div class="col-8">
                            <a href="{{ route('login') }}" class="text-center">Halaman Login</a>
                        </div>
                        <!-- /.col -->
                        <div class="col-4">
                            <button type="submit" class="btn btn-primary btn-block">Register</button>
                        </div>
                        <!-- /.col -->
                    </div>
                </form>
            </div>
            <!-- /.form-box -->
        </div><!-- /.card -->
    </div>
    <!-- /.register-box -->
