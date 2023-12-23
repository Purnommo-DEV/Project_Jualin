 <li class="nav-item dropdown user-menu">
                    <a href="#" class="  nav-link nav-primary dropdown-toggle" data-toggle="dropdown">
                    <i class="far fa-bell"></i>
                    @foreach ($verifikasi_pembelian as $index =>$var)
                    @if($var->status_notifikasi == "belum aksi")
                        <span class="badge badge-warning navbar-badge">1</span>
                        @endif
                    @endforeach
                     
                        <small>VERIFIKASI PEMBELIAN</small>
                  </a>
                  <ul class="dropdown-menu  dropdown-menu-right" style="width: 600px">
                    <li class="user-body">
                        VERIFIKASI_PEMBELIAN
                    </li>
                    <!-- Menu Footer-->
                    <li class="user-footer">
                    <table  class="table table-bordered table-striped w-100">
                            <thead>
                                <tr>
                                    <th width="5%"><small>No</small></th>
                                    <th><Small><b>Pemberitahuan</b></Small></th>
                                    <th width="20%"><small><b>Tanggal</b></small></th>
                                    <th width="20%"><small><b>Aksi</b></small></th>
                               
                                </tr>
                            </thead>
                            <tbody>
                              @foreach ($verifikasi_pembelian as $index=>$val)
                                @if ($val->status_notifikasi =="belum aksi")
                                    <tr>
                                        <td>{{ $index+1 }}</td>
                                        <td> {{ $val->pemberitahuan }}</td>
                                        <td>{{ $val->created_at }}</td>
                                        <td><a href="{{ route('detail_verifikasi_pembelian') }}" class ="btn btn-secondary btn-sm"><i class ="fa fa-eye"></i> Detail</a></td>
                                    </tr>
                                  
                                @endif
                              @endforeach
                            </tbody>
                        </table>
                        <!-- /.row -->
                    </li>
                </ul>
            </li>