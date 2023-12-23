<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\admin\verifikasi_pembelian;
use App\Models\user_pengguna;
use App\Models\keranjang_belanja;
use App\Models\admin\verifikasi_pembelian_2;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class UmumController extends Controller
{
    public function umum_beranda()
    {
        return view('backend.umum.umum_beranda');
    }
    public function umum_check_out(Request $request)
    {
        $datas = verifikasi_pembelian_2::get();
        $data = ['LoggedUserInfo' => user_pengguna::where('id', '=', session('LoggedUser'))->first()];
        $qrcode = QrCode::size(250)->generate($datas);

        $check_out = new verifikasi_pembelian_2();
        $check_out->pembeli_id = $request->pembeli_id;
        $check_out->alamat = $request->alamat;
        $check_out->total_pembayaran = $request->total_pembayaran;
        $check_out->kurir = " ";
        $check_out->umkm = $request->umkm;
        $check_out->metode_pembayaran = " ";
        $check_out->status_bayar = " ";
        $check_out->status_pembelian = "Belum Di Verifikasi";
        $check_out->save();

        return view('backend.umum.umum_halaman_pembayaran', $data, ['qrcode' => $qrcode]);
    }
    public function umum_detail_produk()
    {
        return view('backend.umum.umum_detail_produk');
    }
    public function umum_halaman_pembayaran()
    {
        // return view('backend.umum.umum_halaman_pembayaran',$data,['qrcode'=> $qrcode]);
    }
    public function umum_keranjang()
    {
        $data = ['LoggedUserInfo' => user_pengguna::where('id', '=', session('LoggedUser'))->first()];
        $keranjang = verifikasi_pembelian::get();
        return view('backend.umum.umum_keranjang', $data, compact('keranjang'));
    }
    public function umum_pencarian_kategori()
    {
        return view('backend.umum.umum_pencarian_&_kategori');
    }
    public function umum_check_out_lanjutan()
    {
        return view('backend.umum.umum_check_out_lanjutan');
    }
}
