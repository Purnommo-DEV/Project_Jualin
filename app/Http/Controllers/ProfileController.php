<?php

namespace App\Http\Controllers;

use App\Models\Keranjang;
use App\Models\Pemesanan;
use App\Models\PesanBarang;
use Illuminate\Http\Request;
use App\Models\user_pengguna;
use App\Models\admin\kategori_barang;
use App\Models\superadmin\review_produk;
use App\Models\admin\verifikasi_pembelian;

class ProfileController extends Controller
{
    public function __construct()
    {
        $this->user_pengguna = new user_pengguna();
    }
    public function index()
    {
        $data = ['LoggedUserInfo' => user_pengguna::where('id', '=', session('LoggedUser'))->first()];
        $info = user_pengguna::where('id', '=', session('LoggedUser'))->first(); //Ambil Id User yang sedang Login
        $total_produk_keranjang = Keranjang::where('user_id', $info->id)->count();
        $total = 0;
        $totalnya = Keranjang::where('user_id', $info->id)->get();
        foreach ($totalnya as $totals) {
            $total += $totals->produk->harga_produk * $totals->produk_qty;
        }
        $total_isi_keranjang = Keranjang::where('user_id', $info->id)->count();
        $total_dalam_keranjangs = $total;
        $isi_keranjang = Keranjang::where('user_id', $info->id)->get();
        $pemesanan = Pemesanan::where('user_id', $info->id)->get();
        $pesanBarang = PesanBarang::where('user_id', $info->id)->where('status_verifikasi', '=', 'Telah Di Verifikasi')->get();
        $keranjang = verifikasi_pembelian::join('verifikasi_produks', 'verifikasi_pembelians.nama_produk', '=', 'verifikasi_produks.nama_produk')
            ->get(['verifikasi_produks.*', 'verifikasi_pembelians.*']);
        $kategori = kategori_barang::all();
        return view('backend.umum.profile.index', $data, compact(
            'kategori',
            'pemesanan',
            'keranjang',
            'pesanBarang',
            'total_produk_keranjang',
            'isi_keranjang',
            'total_dalam_keranjangs',
            'total_isi_keranjang'
        ));
    }

    public function show_produk_checkout($id)
    {
        $info = user_pengguna::where('id', '=', session('LoggedUser'))->first(); //Ambil Id User yang sedang Login
        $data = PesanBarang::where('pesanan_id', $id)->get();
        return response()->json([
            'data' => $data,
        ]);
    }
    public function umum_profile_saya()
    {
        $kategori = kategori_barang::all();
        $data = ['LoggedUserInfo' => user_pengguna::where('id', '=', session('LoggedUser'))->first()];
        return view('backend.umum.profile.umum_profile_saya', $data, compact('kategori'));
    }
    public function update_umum_profile(Request $request, $id)
    {
        $profil_umum = user_pengguna::find($id);
        $profil_umum->username = $request->username;
        $profil_umum->tgl_lahir = $request->tgl_lahir;
        $profil_umum->jenis_kelamin = $request->jenis_kelamin;
        $profil_umum->nomor_hp = $request->nomor_hp;
        $profil_umum->email = $request->email;
        $profil_umum->no_ktp = $request->no_ktp;
        $profil_umum->update();
        return redirect()->back()->with('status', 'Berhasil');
    }
    public function update_umum_foto_profile(Request $request, $id)
    {
        $foto_profile = user_pengguna::find($id);
        if ($request->hasFile('foto')) //Cek apakah ada file avatar yang di Upload 
        {
            $request->file('foto')->move('profile/', $request->file('foto')->getClientOriginalName());
            $foto_profile->foto = $request->file('foto')->getClientOriginalName();
            $foto_profile->save();
        }
        return redirect()->back()->with('status', 'Berhasil');
    }
    public function umum_status_pengiriman()
    {
        return view('backend.umum.profile.umum_status_pengiriman');
    }
    public function umum_lacak_pengiriman()
    {
        return view('backend.umum.profile.umum_lacak_pengiriman');
    }
    public function umum_histori_transaksi()
    {
        return view('backend.umum.profile.umum_histori_transaksi');
    }
    public function return_barang()
    {
        return view('backend.umum.profile.umum_return_barang');
    }
    public function return_barang_lanjut()
    {
        return view('backend.umum.profile.umum_return_barang_lanjut');
    }
    public function review_produk_driver($id_produk)
    {
        $pembelian_produk = verifikasi_pembelian::all();
        $keranjangs = verifikasi_pembelian::join('verifikasi_produks', 'verifikasi_pembelians.nama_produk', '=', 'verifikasi_produks.nama_produk')
            ->first(['verifikasi_produks.*', 'verifikasi_pembelians.*']);
        $info = user_pengguna::where('id', '=', session('LoggedUser'))->first(); //Ambil Id User yang sedang Login
        $keranjang = PesanBarang::find($id_produk);
        $kategori = kategori_barang::all();
        $data = ['LoggedUserInfo' => user_pengguna::where('id', '=', session('LoggedUser'))->first()];
        return view('backend.umum.profile.umum_review_produk_&_driver', $data, compact('kategori', 'pembelian_produk', 'keranjang'));
    }
    public function tambah_review_produk_driver(Request $request)
    {
        $review = review_produk::create($request->all());

        if ($request->hasFile('foto_produk')) //Cek apakah ada file avatar yang di Upload 
        {
            $request->file('foto_produk')->move('review_foto_produk/', $request->file('foto_produk')->getClientOriginalName());
            $review->foto_produk = $request->file('foto_produk')->getClientOriginalName();
            $review->save();
        }
        return redirect('umum_profile')->with('success', 'Berhasil Memberikan Review Produk');
    }
    public function lacak_barang()
    {
        return view('backend.umum.profile.lacak_barang');
    }
}
