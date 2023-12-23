   <li class="nav-item dropdown user-menu">
    <a href="#" class="  nav-link nav-primary dropdown-toggle" data-toggle="dropdown">
      <i class="far fa-bell"></i>
      @foreach ($pengajuan_iklan_produk as $index =>$var)
      @if($var->status_notifikasi == "belum aksi")
      <span class="badge badge-warning navbar-badge">
        {{ $index+1 }}
      </span>
      @endif
      @endforeach
      <small>PENGAJUAN IKLAN PRODUK</small>
    </a>
    <ul class="dropdown-menu  dropdown-menu-left" style="width: 600px">          
      <li class="user-body">
        PENGAJUAN IKLAN PRODUK
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
          @foreach ($pengajuan_iklan_produk as $index=>$val)
          @if ($val->status_notifikasi == "belum aksi")
          <tr>
            <td>{{ $index+1 }}</td>
            <td>{{ $val->pemberitahuan}}</td>
            <td>{{ $val->created_at }}</td>
            <td>
             <a href="{{ route('detail_pengajuan_iklan_produk',$val->nama_produk) }}" class ="btn  btn-secondary btn-sm"><i class ="fa fa-eye"></i>  Detail</a>

           </td>

         </tr>
         @endif
         @endforeach
       </tbody>
     </table>
     <center><a href ="{{ route('backend_admin_pengajuan_iklan_produk') }}" class ="btn btn-secondary"><i class ="fa fa-eye"></i>Menampil Semuanya<a></center>
   </li>
 </ul>
</li>