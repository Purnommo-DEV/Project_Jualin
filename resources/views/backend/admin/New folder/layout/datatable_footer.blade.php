<footer class="main-footer">
    <div class="float-right d-none d-sm-block">
        <b>Version</b> 3.1.0
    </div>
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
</footer>

<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->
<!-- ./wrapper -->
<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
@yield('scripts')
<!-- Bootstrap 4 -->
<script src="{{asset('adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- ChartJS -->
<script src="{{asset('adminlte/plugins/chart.js/Chart.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('adminlte/dist/js/adminlte.min.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{asset('adminlte/dist/js/demo.js')}}"></script>
<!-- Page specific script -->
<!-- DataTables  & Plugins -->
<script src="{{asset('adminlte/plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('adminlte/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{asset('adminlte/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{asset('adminlte/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
<script src="{{asset('adminlte/plugins/datatables-buttons/js/dataTables.buttons.min.js')}}"></script>
<script src="{{asset('adminlte/plugins/sweetalert2/sweetalert.min.js')}}"></script>
<script src="{{asset('adminlte/plugins/toastr/toastr.min.js')}}"></script>

<!-- AdminLTE App -->
<script src="{{asset('adminlte/dist/js/adminlte.min.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{asset('adminlte/dist/js/demo.js')}}"></script>
<!-- Page specific script -->
{{-- <script type="text/javascript">
    $('body').on('click', '#submitForm', function(){
        var registerForm = $("#valKategori");
        var formData = registerForm.serialize();
        $( '#kategori-error' ).html( "" );
              
        $.ajax({
            type:"POST",
            url: "{{route('backend_admin_save_manajemen_kategori_produk')}}",
            data:formData,
            success:function(data) {
                console.log(data);
                if(data.errors) {
                    if(data.errors.kategori){
                        $( '#kategori-error' ).html( data.errors.kategori[0] );
                    }
                }
                if(data.success) {
                    $('#success-msg').removeClass('hide');
                    setInterval(function(){ 
                        $('#SignUp').modal('hide');
                        $('#success-msg').addClass('hide');
                    }, 3000);
                }
            },
        });
    });
</script> --}}
<script>
    $(function () {
        $("#example1").DataTable({
            "responsive": true, "lengthChange": false, "autoWidth": false,
        });
        $("#example2").DataTable({
            "responsive": true, "lengthChange": false, "autoWidth": false,
        });
    });
</script>
<script>
    $(document).ready( function () {
        $('#datatable').DataTable();
        $('.delete').click(function(){
            var kategori_id = $(this).attr('kategori-id');
            swal({
                title: "Yakin ?",
                text: "Menghapus Data ?",
                icon: "warning",
                buttons: true,
                dangerMode: true,
            })
            .then((willDelete) => {
                if (willDelete) {
                    window.location = "/hapus_backend_admin_manajemen_kategori_produk/"+kategori_id;
                }
            });
        });
    });
</script>
<script>
    $(document).ready(function () {
        $(document).on('click', '.btnIklan', function () {
            var data_id = $(this).val();
            $('#editIklan').modal('show');
            $.ajax({
                type: "GET",
                url: "/edit_backend_admin_iklan_produk/" + data_id,
                success: function (response) {
                    $('#id').val(data_id);
                    $('#status_pembayaran').val(response.data.status_pembayaran);
                }
            });
        });
    });
</script>
<script>
    $(document).ready(function () {
        $(document).on('click', '.btnPengajuan', function () {
            var data_id = $(this).val();
            $('#editPengajuan').modal('show');
            $.ajax({
                type: "GET",
                url: "/edit_backend_pengajuan_akun_premium/" + data_id,
                success: function (response) {
                    $('#id').val(data_id);
                    $('#status_pembayaran').val(response.data.status_pembayaran);
                }
            });
        });
    });
</script>
<script>
    $(document).ready(function () {
        $(document).on('click', '.editBtnKategori', function () {
            var data_id = $(this).val();
            $('#editBtnKategoriModal').modal('show');
            $.ajax({
                type: "GET",
                url: "/edit_backend_admin_manajemen_kategori_produk/" + data_id,
                success: function (response) {
                    //console.log(response.data.status);
                    $('#kategori').val(response.data.kategori);
                    $('#gambar').val(response.data.gambar);
                    $('#id').val(data_id);
                }
            });
        });
    });
</script>
<script>
    $(document).ready(function () {
        $(document).on('click', '.editbtn', function () {
            var data_id = $(this).val();
            $('#editModal').modal('show');

            $.ajax({
                type: "GET",
                url: "/edit_backend_admin_verifikasi_umkm/" + data_id,
                success: function (response) {
                    //console.log(response.data.status);
                    $('#status').val(response.data.status);
                    $('#id').val(data_id);
                }
            });
        });
    });
</script>
<script>
    $(document).ready(function () {
        $(document).on('click', '.syaratBtn', function () {
            var data_id = $(this).val();
            $('#syaratModal').modal('show');
            $.ajax({
                type: "GET",
                url: "/edit_backend_admin_verifikasi_umkm/" + data_id,
                success: function (response) {
                    //console.log(response.data.status);
                    $('#syarat_01').val(response.data.syarat_01);
                    $('#id').val(data_id);
                }
            });
        });
    });
</script>
<script>
    $(document).ready(function () {
        $(document).on('click', '.editBtnStatus', function () {
            var data_id = $(this).val();
            $('#editStatusProduk').modal('show');
            $.ajax({
                type: "GET",
                url: "/edit_backend_admin_verifikasi_produk/" + data_id,
                success: function (response) {
                    //console.log(response.data.status);
                    $('#status_verifikasi').val(response.data.status_verifikasi);
                    $('#status_notifikasi').val(response.data.status_notitifikasi);
                    $('#id').val(data_id);
                }
            });
        });
    });

</script>
<script type="text/javascript">
  $.ajaxSetup({
    headers:{
      'X-CSRF-TOKEN' : $('meta [name = "csrf-token"]').attr('content')
  }

});
   function allData(){
        $.ajax({
            type: "GET",
            dataType : "json",
            url : "admin/notifikasi_data",
            success:function(response){
                var data =""
                $.each(response, function(key, value){
                    if(value.status == "belum aksi"){
                    data = data + "<tr>"
                    data = data + "<td>"+value.Dari +"  "+value.Pemberitahuan+"</td>"
                    data = data + "<td>"+value.created_at.substring(0,10)+"</td>"
               
                    
                    if(value.keterangan == "verifikasi produk umkm"){
                         data = data + "<td>"
                        data  = data + "<a href='{{ url('admin/verifikasi_produk') }}' class ='btn btn-primary'><small>Verifikasi produk</small></a>"
                         data = data + "</td>"
                    }
                    if(value.keterangan == "verifikasi premium umkm"){
                        data = data + "<td>"
                        data  = data + "<a href='{{ url('admin/verifikasi_produk') }}' class ='btn btn-primary'><small>Verifikasi Premium</small></a>"
                         data = data + "</td>"
                    }
                    }
                   
                    data = data + "</tr>"
                });

                $('tbody').html(data);
            }
        });
    }
     allData();
</script>
</body>
</html>
