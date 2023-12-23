 <li class="nav-item dropdown user-menu">
    <a href="#" class="  nav-link nav-primary dropdown-toggle" data-toggle="dropdown">
        <i class="far fa-bell"></i>
        @foreach ($pengajuan_premium as $index => $var)
        @if($var->status_notifikasi =="belum aksi")
        <span class="badge badge-warning navbar-badge">{{ $index+1 }}</span>
        @endif
        @endforeach
        
        <small>PENGAJUAN PREMIUM UMKM</small>
    </a>
    <ul class="dropdown-menu  dropdown-menu-left" style="width: 600px">
        <li class="user-body">
            PENGAJUAN PREMIUM UMKM
        </li>
        <!-- Menu Footer-->
        <li class="user-footer">
           <table  class="table table-bordered table-striped w-100">
            <thead>
                <tr>
                    <th><small>No</small></td>
                    <th><Small><b>Pemberitahuan</b></Small></th>
                    <th width="20%"><small><b>Tanggal</b></small></th>
                    <th width="20%"><small><b>Aksi</b></small></th>
                </tr>
            </thead>
            <tbody >
              @foreach ($pengajuan_premium as $index => $val)
              <tr>
                <td>{{ $index+1 }}</td>
                <td> {{ $val->pemberitahuan }}</td>
                <td> {{ $val->created_at }}</td>
                <td>
                  <a href="{{ route('detail_pengajuan_premium',$val->id) }}" class ="btn btn-secondary btn-sm"><i class ="fa fa-eye"></i> Detail</a>
              </td>
          </tr>
          
          @endforeach
      </tbody>
  </table>
  <!-- /.row -->
   <center><a href class ="btn btn-secondary"><i class ="fa fa-eye"></i>Menampil Semuanya<a></center>
</li>
</ul>
</li>