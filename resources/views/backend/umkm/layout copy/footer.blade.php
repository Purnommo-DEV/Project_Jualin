<!-- Main Footer -->
<div class="container">
    <!-- Main Footer -->
    <footer class="main-footer">
        <div class="float-right ">
            <small>Dapatkan Aplikasinya </small>
            <b></b>
            <p>(App Store)</p>
            <div style="margin-top: -10px;"></div>
            <p>(Google Store)</p>
        </div>
        <strong> <a href="https://adminlte.io" style="text-decoration: none;margin-right: 25px;">Download
                Sekarang</a></strong>
        <strong> <a href="https://adminlte.io" style="text-decoration: none;margin-right:25px;">Lisense</a></strong>
        <div style="height: 10px;"></div>
        <strong> <a href="https://adminlte.io" style="text-decoration: none;margin-right: 25px;">Promo UMKM</a></strong>
        <strong> <a href="https://adminlte.io" style="text-decoration: none;margin-right:25px;">Daftar UMKM</a></strong>
        <strong> <a href="https://adminlte.io" style="text-decoration: none;margin-right: 25px;">Produk
                Terlaris</a></strong>
        <strong> <a href="https://adminlte.io" style="text-decoration: none;margin-right: 25px;">Syarat dan
                Ketentuan</a></strong>
        <strong> <a href="https://adminlte.io" style="text-decoration: none;margin-right: 25px;">Kebijakan
                Privasi</a></strong>
        <br><br>

    </footer>
    <!-- Main Footer -->
    <footer class="main-footer">
        <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
        All rights reserved.
        <div class="float-right d-none d-sm-inline-block">
            <b>Version</b> 3.1.0
        </div>
    </footer>
</div>

<!-- DataTables  & Plugins -->
<script src="{{asset('adminlte/plugins/datatables/jquery.dataTables.min.js') }}">
</script>
<script src="{{ asset('adminlte/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}">
</script>
<script
    src="{{ asset('adminlte/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}">
</script>
<script
    src="{{ asset('adminlte/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}">
</script>
<script src="{{ asset('adminlte/plugins/datatables-buttons/js/dataTables.buttons.min.js') }}">
</script>
<script src="{{ asset('adminlte/plugins/datatables-buttons/js/buttons.bootstrap4.min.js') }}">
</script>
<script src="{{ asset('adminlte/plugins/jszip/jszip.min.js') }}"></script>
<script src="{{ asset('adminlte/plugins/pdfmake/pdfmake.min.js') }}"></script>
<script src="{{ asset('adminlte/plugins/pdfmake/vfs_fonts.js') }}"></script>
<script src="{{ asset('adminlte/plugins/datatables-buttons/js/buttons.html5.min.js') }}">
</script>
<script src="{{ asset('adminlte/plugins/datatables-buttons/js/buttons.print.min.js') }}">
</script>
<script src="{{ asset('adminlte/plugins/datatables-buttons/js/buttons.colVis.min.js') }}">
</script>
<!-- AdminLTE App -->
<script src="{{ asset('adminlte/plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('adminlte/dist/js/adminlte.min.js') }}"></script>
<script src="{{asset('adminlte/plugins/toastr/toastr.min.js')}}"></script>
<script src="{{asset('adminlte/plugins/summernote/summernote-bs4.min.js')}}"></script>

<!-- AdminLTE for demo purposes -->
{{-- <script src="{{asset('adminlte/dist/js/demo.js') }}"></script> --}}
<script src="{{ asset('adminlte/plugins/bs-custom-file-input/bs-custom-file-input.min.js') }}"></script>
<script>
  $(function () {
    // Summernote
    $('.textarea').summernote()
  })
</script>
<script>
    $(document).ready(function () {
        $(document).on('click', '.iklanProdukBtn', function () {
            var data_id = $(this).val();
            $('#iklanProduk').modal('show');
            $.ajax({
                type: "GET",
                url: "/backend_umkm_iklankan_produk/" + data_id,
                success: function (response) {
                    //console.log(response.data.status);
                    $('#id').val(data_id);
                    $('#nama_produk').val(response.data.nama_produk);
                    $('#deskripsi_produk').val(response.data.deskripsi_produk);
                    $('#harga_produk').val(response.data.harga_produk);
                }
            });
        });
    });
</script>
<script>
    $(document).ready(function () {
        $(document).on('click', '.editBtn', function () {
            var data_id = $(this).val();
            $('#editModal').modal('show');
            $.ajax({
                type: "GET",
                url: "/edit_backend_umkm_produk/" + data_id,
                success: function (response) {
                    //console.log(response.data.status);
                    $('#id').val(data_id);
                    $('#nama_produk').val(response.data.nama_produk);
                    $('#deskripsi_produk').val(response.data.deskripsi_produk);
                    $('#harga_produk').val(response.data.harga_produk);
                    $('#total_stok').val(response.data.total_stok);
                    $('#ukuran').val(response.data.ukuran);
                    $('#berat').val(response.data.berat);
                    $('#foto_produk1').val(response.data.foto_produk1);
                    $('#foto_produk2').val(response.data.foto_produk2);
                    $('#foto_produk3').val(response.data.foto_produk3);
                    $('#foto_produk4').val(response.data.foto_produk4);
                    $('#foto_produk5').val(response.data.foto_produk5);
                }
            });
        });
    });
</script>

</body>

</html>
<!-- /.login-box -->
@if(Session::get('fail'))
    <script>
        toastr.error('{{Session::get('fail')}}')
    </script>
@endif
@if(Session::get('success'))
    <script>
        toastr.success('{{Session::get('success')}}')
    </script>
@endif
