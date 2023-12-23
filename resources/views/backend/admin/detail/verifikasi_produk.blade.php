@extends('backend.admin.layout.layout_detail')
@section('title','Verifikasi Produk')

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">

				</div>
				<div class="col-sm-6">

				</div>
			</div>
		</div><!-- /.container-fluid -->
	</section>

	<!-- Main content -->
	<section class="content">

		<!-- Default box -->
		<div class="card">
			<div class="card-tools">
				<ol class="breadcrumb float-sm-right">
					<li class="breadcrumb-item"><a href="#">Home</a></li>
					<li class="breadcrumb-item active">Detail Verifikasi Produk</li>
				</ol>

			</div>
			<div class="card-body">

				<div class ="row">

					<div class ="col">
						<p><b>Normal</b></p>
						<img src ="" width="150px" height="150px">
					</div>
					<div class ="col">
						<p><b>Atas</b></p>
						<img src ="" width="150px" height="150px">
					</div>
					<div class ="col">
						<p><b>Bawah</b></p>
						<img src ="" width="150px" height="150px">
					</div>
					<div class ="col">
						<p><b>Kanan</b></p>
						<img src ="" width="150px" height="150px">
					</div>
					<div class ="col">
						<p><b>Kiri</b></p>
						<img src ="" width="150px" height="150px">
					</div>

				</div>
				<div class ="border mt-3 mb-3"></div>
				<div class ="row">
					<div class ="col-2">
						<p><b>Nama Toko</b></p>
						<p><b>Nama Produk</b></p>
						<p><b>Kategori</b></p>
						<p><b>Harga Produk</b></p>
						<p><b>Total Stok</b></p>

					</div>
					<div class ="col-0.7">
						<p><b>:</b></p>
						<p><b>:</b></p>
						<p><b>:</b></p>
						<p><b>:</b></p>
						<p><b>:</b></p>
					</div>
					<div class ="col-3">
						<p>{{ $verifikasi_produks->umkm }}</p>
						<p>{{ $verifikasi_produks->nama_produk }}</p>
						<p>{{ $verifikasi_produks->kategori }}</p>
						<p> {{ $verifikasi_produks->harga_produk }}</p>
						<p> {{ $verifikasi_produks ->total_stok }}</p>
					</div>
					<div class ="col-2">
						<p><b>Ukuran</b></p>
						<p><b>Berat</b></p>
						<p><b>Kondisi</b></p>


					</div>
					<div class ="col-0.7">
						<p><b>:</b></p>
						<p><b>:</b></p>
						<p><b>:</b></p>

					</div>
					<div class ="col-3">
						<p>{{ $verifikasi_produks->ukuran }}</p>
						<p> {{ $verifikasi_produks->berat }}</p>
						<p>Baru</p>
					</div>
				</div>
				<div class ="border mt-3 mb-3"></div>
				<p><b>Deskripsi</b></p>
				<p>{{ $verifikasi_produks->deskripsi_ }}</p>
				<div class  ="border"></div>
				<!-- /.card-body -->
				<div class="card-footer float-sm-right">
					<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-default">
						Verifikasi 
					</button>
					<div class="modal fade" id="modal-default">
						<div class="modal-dialog">
							<div class="modal-content">
								<div class="modal-header">
									<h4 class="modal-title">Default Modal</h4>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
								</div>
								<form method="post" action ="{{ url('admin/update__produk',$verifikasi_produks->id) }}">
									@csrf
									<div class="modal-body">
										<h4>Apa Anda Sudah Yakin?</h3>
											<input type ="text" name ="status_verifikasi" value ="Telah Di Verifikasi" hidden>
											<input type ="text" name ="pemberitahuan" value ="menunggu ada memverifikasikan iklan Produknya" hidden>
											<input type ="text" name ="status_notifikasi" value ="aksi" hidden>											
										</div>
										<div class="modal-footer">
											<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
											<button type="submit" class="btn btn-primary">Yakin</button>
										</div>
									</form>
								</div>
								<!-- /.modal-content -->
							</div>
							<!-- /.modal-dialog -->
						</div>
						<!-- /.modal -->

					</div>
					<!-- /.card-footer-->
				</div>
				<!-- /.card -->

			</section>
			<!-- /.content -->
		</div>
		<!-- /.content-wrapper -->


	</div>
	<!-- /.content-wrapper -->
	@endsection
