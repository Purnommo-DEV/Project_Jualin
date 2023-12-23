@if($LoggedUserInfo['jabatan'] == "superadmin")
@extends('backend.superadmin.layout.header_datatable')
@section('title','Tentang Jualin')

@section('content')
<aside class="main-sidebar sidebar-dark-primary elevation-4">
	<!-- Brand Logo -->
	<a href="../../index3.html" class="brand-link">
		<img src="{{asset('adminlte/dist/img/AdminLTELogo.png')}}"
		alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
		<span class="brand-text font-weight-light">AdminLTE 3</span>
	</a>

	<!-- Sidebar -->
	<div class="sidebar">
		<!-- Sidebar user panel (optional) -->
		<div class="user-panel mt-3 pb-3 mb-3 d-flex">
			<div class="image">
				<img src="{{asset('adminlte/dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
			</div>
			<div class="info">
				<a href="#" class="d-block">Alexander Pierce</a>
			</div>
		</div>

		<!-- SidebarSearch Form -->
		<div class="form-inline">
			<div class="input-group" data-widget="sidebar-search">
				<input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
				<div class="input-group-append">
					<button class="btn btn-sidebar">
						<i class="fas fa-search fa-fw"></i>
					</button>
				</div>
			</div>
		</div>

		<!-- Sidebar Menu -->
		<nav class="mt-2">
			<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                    <!-- Add icons to the links using the .nav-icon class
                    	with font-awesome or any other icon font library -->
                    	<li class="nav-item">
                    		<a class="nav-link" href="{{route('superadmin')}}" >
                    			<i class="fas fa-align-justify mr-1"></i>
                    			<p>
                    				Dashboard
                    			</p>
                    		</a>
                    	</li>
                    	<li class="nav-item">
                    		<a class="nav-link " href="{{route('superadmin_laporan_jumlah_produk')}}" >
                    			<i class="far fa-clipboard mr-1"></i>
                    			<p>
                    				Laporan Jumlah Produk
                    			</p>
                    		</a>
                    	</li>
                    	<li class="nav-item">
                    		<a class="nav-link" href="{{route('superadmin_laporan_jumlah_umkm')}}" >
                    			<i class="far fa-clipboard mr-1"></i>
                    			<p>
                    				Laporan Jumlah UMKM
                    			</p>
                    		</a>
                    	</li>
                    	<li class="nav-item">
                    		<a class="nav-link " href="{{route('superadmin_laporan_jumlah_transaksi')}}" >
                    			<i class="far fa-clipboard mr-1"></i>
                    			<p style="font-size: 14px;">
                    				Laporan Jumlah Transaksi
                    			</p>
                    		</a>
                    	</li>
                    	<li class="nav-item">
                    		<a class="nav-link " href="{{route('superadmin_laporan_income')}}" >
                    			<i class="far fa-clipboard mr-1"></i>
                    			<p>
                    				Laporan Income
                    			</p>
                    		</a>
                    	</li>
                    	<li class="nav-item">
                    		<a class="nav-link " href="#produk_terlaris" >
                    			<i class="fas fa-dolly mr-1"></i>
                    			<p>
                    				Produk Terlaris
                    			</p>
                    		</a>
                    	</li>
                    	<li class="nav-item">
                    		<a class="nav-link " href="{{route('superadmin_review_produk')}}" >
                    			<i class="fas fa-chalkboard-teacher mr-1"></i>
                    			<p>
                    				Review Produk
                    			</p>
                    		</a>
                    	</li>
                    	<li class="nav-item">
                    		<a class="nav-link " href="{{route('superadmin_review_kurir')}}" >
                    			<i class="fas fa-chalkboard-teacher mr-1"></i>
                    			<p>
                    				Review Kurir
                    			</p>
                    		</a>
                    	</li>
                    	<li class="nav-item">
                    		<a class="nav-link  " href="{{route('superadmin_pengajuan_pencairan')}}" >
                    			<i class="fas fa-people-carry mr-1"></i>
                    			<p>
                    				Pengajuan pencairan
                    			</p>
                    		</a>
                    	</li>
                    	<li class="nav-item">
                    		<a class="nav-link" href="{{route('superadmin_manajemen_user')}}" >
                    			<i class="fas fa-user-tie mr-1"></i>
                    			<p>
                    				Manajemen User
                    			</p>
                    		</a>
                    	</li>
                    	<li class="nav-item">
                    		<a class="nav-link active" href="{{route('tentang_jualin')}}" >
                    			<i class="fas fa-user-tie mr-1"></i>
                    			<p>
                    				Tentang Jualin
                    			</p>
                    		</a>
                    	</li>
                        <li class="nav-item">
                        <a class="nav-link" href="{{route('slider_superadmin')}}" >
                            <i class="fas fa-user-tie mr-1"></i>
                            <p>
                                Slider
                            </p>
                        </a>
                    </li>
                     <li class="nav-item">
                    <a class="nav-link" href="{{route('kurir')}}" >
                      <i class="fas fa-user-tie mr-1"></i>
                      <p>
                        Kurir
                      </p>
                    </a>
                  </li>

                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
        	<!-- Content Header (Page header) -->
        	<section class="content-header">
        		<div class="container-fluid">
        			<div class="row mb-2">
        				<div class="col-sm-6">
        					<h1>Tentang Jualin</h1>
        				</div>
        				<div class="col-sm-6">
        					<ol class="breadcrumb float-sm-right">
        						<li class="breadcrumb-item"><a href="{{route('superadmin')}}">Dashboard</a></li>
        						<li class="breadcrumb-item active">Tentang Jualin</li>
        					</ol>
        				</div>
        			</div>
        		</div><!-- /.container-fluid -->
        	</section>
        	<section class="content">
        		<div class="container-fluid">
        			<div class="row">
        				<div class="col-12">
        					<div class="card">
        						<div class="card-header">
        								<label>Blog Jualin</label>

        						</div>
        							@foreach ($tentang_jualin as $data)
        							<form method="post" action="{{ route('update_tentang_jualin',$data->id) }}">
        								@csrf
        						<div class="card-body">
        								<input type ="text"  name ="id" value ="{{ $data->id }}" hidden>
        								<div class ="form-group">
        					
        									<textarea name ="blog" placeholder="Tulis Tentang Jualin"  class ="form-control" style="height: 200px;">{{ $data->blog_jualin }}</textarea>
        								</div>
        								
        						</div>
        						<div class = "card-footer">
        							<button type = "submit" class="btn btn-primary">
        								<i class =""></i> Upload Blog
        							</button>
        						</div>
        							</form>
        							@endforeach
        						<!-- /.card-body -->
        					</div>
        					<!-- /.card -->
        				</div>
        				<!-- /.col -->
        			</div>
        			<!-- /.row -->
        		</div>
        		<!-- /.container-fluid -->
        	</section>
        	<!-- /.content -->
        </div>
        @endsection
        @endif