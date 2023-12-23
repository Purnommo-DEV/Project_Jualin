 <!-- Google Font: Source Sans Pro -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
<!-- Font Awesome -->
<link rel="stylesheet" href="{{asset('adminlte/plugins/fontawesome-free/css/all.min.css')}}">
<!-- Theme style -->
<link rel="stylesheet" href="{{asset('adminlte/dist/css/adminlte.min.css')}}">
<!-- summernote -->
<link rel="stylesheet" href="{{asset('adminlte/plugins/summernote/summernote-bs4.min.css')}}">
<!-- CodeMirror -->
<link rel="stylesheet" href="{{asset('adminlte/plugins/codemirror/codemirror.css')}}">
<link rel="stylesheet" href="{{asset('adminlte/plugins/codemirror/theme/monokai.css')}}">
<!-- SimpleMDE -->
<link rel="stylesheet" href="{{asset('adminlte/plugins/simplemde/simplemde.min.css')}}">
<!-- My CSS -->
<link rel="stylesheet" href="{{asset('frontend/style.css')}}">

<div class ="container pt-3">
    <div class ="card">
        <div class="card-header">
            <h6><b>Ajukan Pengembalian</b></h6>
        </div>
        <Div class ="card-cody p-3">
            <div class="datalengkap">
                <h5>Isi data lengkap</h5>
            </div>
            <div class="rinkasan2">
                <h4>Ringkasan Produk</h4>
            </div>
            <div style="height: 10px;"></div>
            <div class ="row">
                <div class ="col-sm-6 col-12">
                    <div class ="row">
                        <div class ="col-2">
                            <img src ="" width="60px" height="60px">
                        </div>
                        <div class ="col-10">
                            <div class="masukanalasan">
                                <h1>Sepok kopi Pakmpong - Kemasan 100 gram</h1><br>
                            </div>
                        <div class="barang1">
                            <h1>1 barang x Rp 13.000,-</h1>
                        </div>
                        </div>
                    </div>
                </div>
                <div class ="col-sm-3 col-12">
                    <div class="belanja2">
                        <h2>Total Belanja</h2>
                    </div>
                    <div class="belanja3">
                        <h2>Rp 100.000,-</h2>
                    </div>
                 </div>
                <div class ="col-sm-3 col-12">
                    <div class="kuantitas2">
                        <h3>Kuantitas</h3>
                    </div>
                    <div class="kuantitas3">
                        <h3>Rp 100 item</h3>
                    </div>
                </div>
            </div>
            <div style="height: 10px;"></div>
            <div class ="row">
                <Div class ="col-sm-9">
                    <div class ="row">
                        <div class="tasshoping">
                            <i class="fas fa-shopping-bag"></i>
                        </div>
                         <div class ="col-sm-2">
                            <small>Waktu Belanja :</small>
                        </div>
                        <div class ="col-sm-2">
                            <small> 14 maret 2021</small>
                        </div>
                        <div class ="col-sm-3">
                            <small>INV/20210314/MPL/11013543136</small>
                        </div>
                        <div class ="col-sm-3">
                           <Small>Tiba pada : 23 maret 2021</Small>
                        </div>

                    </div>
                </Div>
                <Div class ="col-sm-3"></Div>
            </div>
            <div style="height: 15px;"></div>
            <b>Alasan Pengembalian</b>
            <div style ="height: 10px;"></div>
             <div class="form-floating">
                    <textarea class="form-control" placeholder="Masukan Alasan" id="floatingTextarea2" style="height: 200px"></textarea>
                    <label for="floatingTextarea2"></label>
                 </div>
            <b>Bukti Barang</b>
            <div style="height: 10px;"></div>
            <form>
                <div class ="form-group">
                    <input type ="file" name="foto" >
                </div>
                <div class="masukanalasan2">
                    <input type="button" class ="btn btn-primary" value ="Konfirmasi">
                </div>
              </form>
        </Div>

        <div class ="card-footer"></div>
    </div>
</div>
<script>
    $(function () {
        // Summernote
        $('#summernote').summernote();
</script>

<!-- jQuery -->
<script src="{{asset('adminlte/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('adminlte/dist/js/adminlte.min.js')}}"></script>
<!-- Summernote -->
<script src="{{asset('adminlte/plugins/summernote/summernote-bs4.min.js')}}"></script>
<!-- CodeMirror -->
<script src="{{asset('adminlte/plugins/codemirror/codemirror.js')}}"></script>
<script src="{{asset('adminlte/plugins/codemirror/mode/css/css.js')}}"></script>
<script src="{{asset('adminlte/plugins/codemirror/mode/xml/xml.js')}}"></script>
<script src="{{asset('adminlte/plugins/codemirror/mode/htmlmixed/htmlmixed.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{asset('adminlte/dist/js/demo.js')}}"></script>
<!-- Page specific script -->
<script>
    $(function () {
        // Summernote
        $('#summernote').summernote()

        // CodeMirror
        CodeMirror.fromTextArea(document.getElementById("codeMirrorDemo"), {
            mode: "htmlmixed",
            theme: "monokai"
        });
    })
</script>
