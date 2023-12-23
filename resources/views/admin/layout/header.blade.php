
            <ul class="navbar-nav ml-auto">
                <li class="nav-item dropdown">
                  @include('backend.admin.layout.navbar_notifikasi.pengajuan_iklan_produk')
                  @include('backend.admin.layout.navbar_notifikasi.pengajuan_premium')
                   @include('backend.admin.layout.navbar_notifikasi.verifikasi_pembelian')
                  @include('backend.admin.layout.navbar_notifikasi.verifikasi_produk_umkm')
                  @include('backend.admin.layout.navbar_notifikasi.verifikasi_umkm')
              </li>

                  <li class="nav-item dropdown user-menu">
                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
                        <img src="{{asset('adminlte/dist/img/user2-160x160.jpg')}}" class="user-image img-circle elevation-2" alt="User Image">
                        <span class="d-none d-md-inline">{{$LoggedUserInfo['username']}}</span>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                        <!-- User image -->
                        <li class="user-header bg-primary">
                            <img src="{{asset('adminlte/dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">

                            <p>
                                {{$LoggedUserInfo['username']}} - {{$LoggedUserInfo['jabatan']}}
                                <small>{{$LoggedUserInfo['email']}}</small>
                            </p>
                        </li>
                        <!-- Menu Body -->
                        <li class="user-body">
                            <div class="row">
                                <div class="col-4 text-center">
                                    <a href="#">Followers</a>
                                </div>
                                <div class="col-4 text-center">
                                    <a href="#">Sales</a>
                                </div>
                                <div class="col-4 text-center">
                                    <a href="#">Friends</a>
                                </div>
                            </div>
                            <!-- /.row -->
                        </li>
                        <!-- Menu Footer-->
                        <li class="user-footer">
                            <a href="#" class="btn btn-default btn-flat">Profile</a>
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-danger btn-flat float-right" data-toggle="modal" data-target="#exampleModal">
                                Logout
                            </button>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->

    </ul>
</nav>
