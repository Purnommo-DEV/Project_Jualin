<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\admin\pengajuan_akun_pro_umkm;
use App\Models\admin\verifikasi_umkm;
use App\Models\admin\verifikasi_pembelian;
use App\Models\admin\verifikasi_produk;
use App\Models\admin\pengajuan_iklan_produk;
use App\Models\user_pengguna;

class JsonController extends Controller
{
    public function user_pengguna(){
 		$user_pengguna = user_pengguna::orderBy('id','DESC')->get();
        return response()->json($user_pengguna);
    }
    public function verifikasi_umkm(){
 		 $verifikasi_umkm = verifikasi_umkm::orderBy('id','DESC')->get();
        return response()->json($verifikasi_umkm);

    }
    public function verifikasi_produk(){
 		$verifikasi_produk = verifikasi_produk::orderBy('id','DESC')->get();
        return response()->json($verifikasi_produk);
    }
    public function verifikasi_pembelian(){
		$verifikasi_pembelian = verifikasi_produk::orderBy('id','DESC')->get();
        return response()->json($verifikasi_pembelian);
    }
    public function pengajuan_akun_pro_umkm(){
		$pengajuan_akun_pro_umkm = pengajuan_akun_pro_umkm::orderBy('id','DESC')->get();
        return response()->json($pengajuan_akun_pro_umkm);
    }
    public function pengajuan_iklan_produk(){
    	$pengajuan_iklan_produk= pengajuan_iklan_produk::orderBy('id','DESC')->get();
        return response()->json($pengajuan_iklan_produk);
    }

}
