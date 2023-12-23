@extends('backend.Login_and_register.layout.header_login')

@section('content')
    <body class="hold-transition login-page">
    <div class="login-box">
        <!-- /.login-logo -->
        <div class="card card-outline card-primary">
            <div class="card-header text-center">
                <a href="../../index2.html" class="h5">Login dengan Akun anda</a><br>
                <small class="login-box-msg">For the purpose of industry regulation
                    your detail are required
                </small>
            </div>
            <div class="card-body">

                <form action="{{route('check')}}" method="post">
                    @csrf
                        <div class ="form-group">
                            <label><small>Email</small></label>
                            <input type="email"name ="email" class="form-control" placeholder="email">
                            <span class ="text-danger">@error('email') {{ $message }} @enderror</span>
                    </div>
                        <div class ="form-group">
                            <label><small>Password</small></label>
                            <input type="password" name="password" class="form-control" placeholder="Password">
                            <span class ="text-danger">
                                @error('password') {{$message}} @enderror
                            </span>
                        </div>

                    <div class="row">
                        <div class="col-8">
                           Belum ada account?<br><a href="{{route('register')}}" class ="">Register</a>
                        </div>
                        <!-- /.col -->
                        <div class="col-4">
                            <button type="submit" class="btn btn-primary btn-block">Login</button>
                        </div>
                        <!-- /.col -->
                    </div>
                </form>

            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>

@endsection



