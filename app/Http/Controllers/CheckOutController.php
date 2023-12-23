<?php

namespace App\Http\Controllers;

use App\Models\Keranjang;
use Illuminate\Http\Request;
use App\Models\user_pengguna;
use App\Models\admin\kategori_barang;
use App\Models\admin\verifikasi_produk;
use App\Models\MetodePembayaran;
use App\Models\Pemesanan;
use App\Models\PesanBarang;

class CheckOutController extends Controller
{
    public function checkout()
    {
        $data = ['LoggedUserInfo' => user_pengguna::where('id', '=', session('LoggedUser'))->first()];
        $info = user_pengguna::where('id', '=', session('LoggedUser'))->first(); //Ambil Id User yang sedang Login
        $total_produk_keranjang = Keranjang::where('user_id', $info->id)->count();
        $total = 0;
        $totalnya = Keranjang::where('user_id', $info->id)->get();
        foreach ($totalnya as $totals) {
            $total += $totals->produk->harga_produk * $totals->produk_qty;
        }
        $metode = MetodePembayaran::get();
        $total_isi_keranjang = Keranjang::where('user_id', $info->id)->count();
        $total_dalam_keranjangs = $total;
        $isi_keranjang = Keranjang::where('user_id', $info->id)->get();
        $kategori = kategori_barang::get();
        $keranjang = Keranjang::where('user_id', $info->id)->get();

        return view('backend.umum.umum_checkout', $data, compact(
            'keranjang',
            'kategori',
            'total_produk_keranjang',
            'isi_keranjang',
            'total_dalam_keranjangs',
            'total_isi_keranjang',
            'metode'
        ));
    }

    public function pemesan(Request $request)
    {
        $data = ['LoggedUserInfo' => user_pengguna::where('id', '=', session('LoggedUser'))->first()];
        $info = user_pengguna::where('id', '=', session('LoggedUser'))->first(); //Ambil Id User yang sedang Login
        $pemesan = new Pemesanan();
        $pemesan->user_id = $info->id;
        $pemesan->nama = $request->input('nama');
        $pemesan->email = $request->input('email');
        $pemesan->alamat = $request->input('alamat');
        $pemesan->telpon = $request->input('telpon');
        $pemesan->tracking_nomor = rand(11111, 99999);

        // Perhitungan seluruh barang yang dipesan
        $total = 0;
        $totalnya = Keranjang::where('user_id', $info->id)->get();
        foreach ($totalnya as $totals) {
            $total += $totals->produk->harga_produk * $totals->produk_qty;
        }
        $pemesan->total_bayar = $total;
        // dd($total);
        $pemesan->save();

        $keranjang = Keranjang::where('user_id', $info->id)->get();
        foreach ($keranjang as $barang) {
            PesanBarang::create([
                'pesanan_id' => $pemesan->id,
                'produk_id' => $barang->produk_id,
                'umkm' => $barang->produk->umkm,
                'user_id' => $barang->user_id,
                'kuantitas' => $barang->produk_qty,
                'harga_produk' => $barang->produk->harga_produk,
                'status' => 'Dalam Proses Pengemasan',
                'status_verifikasi' => 'Belum Di Verifikasi'
            ]);

            $produk = verifikasi_produk::where('id', $barang->produk_id)->first();
            $produk->total_stok = $produk->total_stok - $barang->produk_qty;
            $produk->update();
        }
        $dataKeranjang = Keranjang::where('user_id', $info->id)->get();
        Keranjang::destroy($dataKeranjang);
        return redirect('/');
    }
}
