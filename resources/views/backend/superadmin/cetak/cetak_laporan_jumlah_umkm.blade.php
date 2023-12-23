<!DOCTYPE html>
<html>
<head>
	<title>Membuat Laporan PDF Dengan DOMPDF Laravel</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<style type="text/css">
		table tr td,
		table tr th{
			font-size: 9pt;
		}
		p{
			font-size: 11px
		}
	
	</style>

<section>
	<table>
		<tr>
			<td width="10%"><img src="{{ public_path("/elshop/images/jualins_kotak.png") }} " width=120px height=100px style="margin-top: -20px;" ></td>
			<td width="50%">
				<center style="margin-right: 130px" >
					<h3 >Jualin</h3>	
				</center>	
				<center style= "margin-right:50px" > 
					<p>Jl. HM Suwignyo Gg. Margodadirejo1 No.12A Kelurahan Sungai Jawi Kecamatan Pontianak Barat, Sungai Jawi Dalam, Kec. Pontianak Kota, Kota Pontianak, Kalimantan Barat 78113</p>
			
			</center>
			</td>
		</tr>
	</table>
	
	


</section>
<section>
	<hr style="background-color:black; height:2px;">
</section>
<section style="justify-content:center;" class="mb-3">
	<div class="container">	<center>
	<h4 style="text-align: center;">Laporan Jumlah UMKM</h4>
	<small style="text-aligh:center; " >Januari 2021</small>
</div>

</center>
</section>
	<table class='table table-bordered'>
		<thead  style="background-color:#007bff; color:white; ">
			<tr>
				<th>No</th>
				<th>UMKM</th>
				<th>Foto Produk</th>
				<th>Alamat</th>
				<th>Surat Izin</th>
				<th>Harga Produk</th>
				<th>Status</th>
			</tr>
		</thead>
		<tbody  style="background-color:#ffffff; color:black; ">
			{{-- @php $i=1 @endphp
			@foreach($laporan_jumlah_produk as $p) --}}
			<tr>
				<td>1</td>
				<td>Kue Putu</td>
				<td>Kue Pak Ucu</td>
				<td>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Corrupti aspernatur quasi, pariatur soluta architecto culpa vitae minus officiis ullam fugiat exercitationem nesciunt tenetur fuga ipsum voluptate aut quos! Esse, perspiciatis!</td>
				<td>12</td>
				<td>10.000</td>
				<td>Belum Kawin</td>
				
			</tr>
			<tr>
				<td>1</td>
				<td>Kue Putu</td>
				<td>Kue Pak Ucu</td>
				<td>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Corrupti aspernatur quasi, pariatur soluta architecto culpa vitae minus officiis ullam fugiat exercitationem nesciunt tenetur fuga ipsum voluptate aut quos! Esse, perspiciatis!</td>
				<td>12</td>
				<td>10.000</td>
				<td>Belum Kawin</td>
				
			</tr>
			<tr>
				<td>1</td>
				<td>Kue Putu</td>
				<td>Kue Pak Ucu</td>
				<td>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Corrupti aspernatur quasi, pariatur soluta architecto culpa vitae minus officiis ullam fugiat exercitationem nesciunt tenetur fuga ipsum voluptate aut quos! Esse, perspiciatis!</td>
				<td>12</td>
				<td>10.000</td>
				<td>Belum Kawin</td>
				
			</tr>
			<tr>
				<td>1</td>
				<td>Kue Putu</td>
				<td>Kue Pak Ucu</td>
				<td>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Corrupti aspernatur quasi, pariatur soluta architecto culpa vitae minus officiis ullam fugiat exercitationem nesciunt tenetur fuga ipsum voluptate aut quos! Esse, perspiciatis!</td>
				<td>12</td>
				<td>10.000</td>
				<td>Belum Kawin</td>
				
			</tr>
			<tr>
				<td>1</td>
				<td>Kue Putu</td>
				<td>Kue Pak Ucu</td>
				<td>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Corrupti aspernatur quasi, pariatur soluta architecto culpa vitae minus officiis ullam fugiat exercitationem nesciunt tenetur fuga ipsum voluptate aut quos! Esse, perspiciatis!</td>
				<td>12</td>
				<td>10.000</td>
				<td>Belum Kawin</td>
				
			</tr>
			<tr>
				<td>1</td>
				<td>Kue Putu</td>
				<td>Kue Pak Ucu</td>
				<td>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Corrupti aspernatur quasi, pariatur soluta architecto culpa vitae minus officiis ullam fugiat exercitationem nesciunt tenetur fuga ipsum voluptate aut quos! Esse, perspiciatis!</td>
				<td>12</td>
				<td>10.000</td>
				<td>Belum Kawin</td>
				
			</tr>
			<tr>
				<td>1</td>
				<td>Kue Putu</td>
				<td>Kue Pak Ucu</td>
				<td>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Corrupti aspernatur quasi, pariatur soluta architecto culpa vitae minus officiis ullam fugiat exercitationem nesciunt tenetur fuga ipsum voluptate aut quos! Esse, perspiciatis!</td>
				<td>12</td>
				<td>10.000</td>
				<td>Belum Kawin</td>
				
			</tr>
			<tr>
				<td>1</td>
				<td>Kue Putu</td>
				<td>Kue Pak Ucu</td>
				<td>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Corrupti aspernatur quasi, pariatur soluta architecto culpa vitae minus officiis ullam fugiat exercitationem nesciunt tenetur fuga ipsum voluptate aut quos! Esse, perspiciatis!</td>
				<td>12</td>
				<td>10.000</td>
				<td>Belum Kawin</td>
				
			</tr>
			<tr>
				<td>1</td>
				<td>Kue Putu</td>
				<td>Kue Pak Ucu</td>
				<td>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Corrupti aspernatur quasi, pariatur soluta architecto culpa vitae minus officiis ullam fugiat exercitationem nesciunt tenetur fuga ipsum voluptate aut quos! Esse, perspiciatis!</td>
				<td>12</td>
				<td>10.000</td>
				<td>Belum Kawin</td>
				
			</tr>
		
		</tbody>
	</table>

</body>
</html>