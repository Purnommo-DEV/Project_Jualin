<!-- Main Footer -->

    <!-- Main Footer -->
    <footer class="main-footer">
        <div class="container">
            
            <div class="row">
                <div class="col-md-8">
                    <div class="row">
                        <a class="lfooter" href="">
                        <img src="../elshop/images/jualins_logo.png" alt="">
                    </a>
                    </div>
                    <div class="row">       
     <strong> <a href="https://adminlte.io" style="text-decoration: none;margin-right: 25px;">Download Sekarang</a></strong>
        <strong> <a href="https://adminlte.io" style="text-decoration: none;margin-right:25px;">Lisense</a></strong>
        <div style="height: 10px;"></div>
        <strong> <a href="https://adminlte.io" style="text-decoration: none;margin-right: 25px;">Promo UMKM</a></strong>
        <strong> <a href="https://adminlte.io" style="text-decoration: none;margin-right:25px;">Daftar UMKM</a></strong>
        <strong> <a href="https://adminlte.io" style="text-decoration: none;margin-right: 25px;">Produk Terlaris</a></strong>
        <strong> <a href="https://adminlte.io" style="text-decoration: none;margin-right: 25px;">Syarat dan Ketentuan</a></strong>
        <strong> <a href="https://adminlte.io" style="text-decoration: none;margin-right: 25px;">Kebijakan Privasi</a></strong>
        <br><br>
    </div>

    </div>
    <div class="col-md-3">
        
            <small>Dapatkan Aplikasinya </small>
            <b></b>
            <ul>
    
           <li><a href=""><img src="../elshop/images/app_store.png" alt=""></a></li>
           <li><a href=""><img src="../elshop/images/playstore.png" alt=""></a></li>
        </ul>
     
    </div>
    </div>
    </div>
    </footer>
    <!-- Main Footer -->
    <footer class="bawah-footer">
        <div class="container">
        <strong>Copyright © 2020 Landify UI KIT - All Rights Reserved.</strong>
       .
       
    </div>
    </footer>


<!-- DataTables  & Plugins -->
<script src="{{asset('adminlte/plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('adminlte/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{asset('adminlte/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{asset('adminlte/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
<script src="{{asset('adminlte/plugins/datatables-buttons/js/dataTables.buttons.min.js')}}"></script>
<script src="{{asset('adminlte/plugins/datatables-buttons/js/buttons.bootstrap4.min.js')}}"></script>
<script src="{{asset('adminlte/plugins/jszip/jszip.min.js')}}"></script>
<script src="{{asset('adminlte/plugins/pdfmake/pdfmake.min.js')}}"></script>
<script src="{{asset('adminlte/plugins/pdfmake/vfs_fonts.js')}}"></script>
<script src="{{asset('adminlte/plugins/datatables-buttons/js/buttons.html5.min.js')}}"></script>
<script src="{{asset('adminlte/plugins/datatables-buttons/js/buttons.print.min.js')}}"></script>
<script src="{{asset('adminlte/plugins/datatables-buttons/js/buttons.colVis.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('adminlte/plugins/jquery/jquery.min.j')}}s"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- AdminLTE App -->

<script src="{{asset('adminlte/dist/js/adminlte.min.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{asset('adminlte/dist/js/demo.js')}}"></script>
<!-- Summernote -->
<script src="{{asset('adminlte/plugins/summernote/summernote-bs4.min.js')}}"></script>
<script>
    $(document).ready(function () {
        $(document).on('click', '.viewBarangBtn', function () {
            var data_id = $(this).val();
            $('#viewBarangModal').modal('show');
            $.ajax({
                type: "GET",
                url: "/view_checkout_barang/" + data_id,
                success: function (response) {
                    //console.log(response.data.status);
                    $('#pesanan_id').val(response.data.pesanan_1);
                    $('#id').val(data_id);
                }
            });
        });
    });
</script>
<script>
    $(document).ready(function () {
        $(document).on('click', '.tampilMetode', function () {
            var data_id = $(this).val();
            $('#btnMetode').modal('show');
            $.ajax({
                type: "GET",
                url: "/edit_backend_admin_metode_pembayaran/" + data_id,
                success: function (response) {
                    //console.log(response.data.status);
                    $('#id').val(data_id);
                    $('#logo').val(response.data.logo);
                }
            });
        });
    });
</script>
</body>
</html>
