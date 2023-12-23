<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use App\Models\Kontak;
use App\Models\Pesan;
use App\Models\admin\kategori_barang;
use App\Models\admin\verifikasi_produk;
use App\Models\admin\verifikasi_pembelian;
use App\Models\admin\verifikasi_umkm;
use App\Models\Keranjang;
use App\Models\user_pengguna;
use App\Models\superadmin\slider;
use RealRashid\SweetAlert\Facades\Alert;
use App\Models\superadmin\review_produk;

class ViewController extends Controller
{
    public function beranda(Request $request)
    {
        $info = user_pengguna::where('id', '=', session('LoggedUser'))->first(); //Ambil Id User yang sedang Login
        if ($info == "") {
            $produk = verifikasi_produk::paginate(7);
            $kategori = kategori_barang::paginate(6);
            $keranjang = verifikasi_pembelian::get();
            $slider = slider::get();
            $data = ['LoggedUserInfo' => user_pengguna::where('id', '=', session('LoggedUser'))->first()];
            return view('welcome', $data, compact(
                'produk',
                'kategori',
                'keranjang',
                'slider',
            ));
        } else {
            $total_produk_keranjang = Keranjang::where('user_id', $info->id)->count();
            $total = 0;
            $totalnya = Keranjang::where('user_id', $info->id)->get();
            foreach ($totalnya as $totals) {
                $total += $totals->produk->harga_produk * $totals->produk_qty;
            }
            $total_isi_keranjang = Keranjang::where('user_id', $info->id)->count();
            $total_dalam_keranjangs = $total;
            $isi_keranjang = Keranjang::where('user_id', $info->id)->get();
            $produk = verifikasi_produk::paginate(7);
            $kategori = kategori_barang::paginate(6);
            $keranjang = verifikasi_pembelian::get();
            $slider = slider::get();
            $data = ['LoggedUserInfo' => user_pengguna::where('id', '=', session('LoggedUser'))->first()];
            return view('welcome', $data, compact(
                'produk',
                'kategori',
                'keranjang',
                'slider',
                'total_produk_keranjang',
                'isi_keranjang',
                'total_dalam_keranjangs',
                'total_isi_keranjang'
            ));
        }
    }

    //Pencarian Produk
    public function pencarian_produk(Request $request)
    {
        $info = user_pengguna::where('id', '=', session('LoggedUser'))->first(); //Ambil Id User yang sedang Login
        if ($info == "") {
            $keranjang = verifikasi_pembelian::get();
            $data = ['LoggedUserInfo' => user_pengguna::where('id', '=', session('LoggedUser'))->first()];
            $kategori = kategori_barang::all();
            $produk = verifikasi_produk::where(function ($query) use ($request) {
                return $request->cari ?
                    $query->from('verifikasi_produks')->where('kategori', $request->cari) : '';
            })->where(function ($query) use ($request) {
                return $request->cari2 ?
                    $query->from('verifikasi_produks')->where('nama_produk', $request->cari2) : '';
            })->get();
            return view('frontend.pencarian', $data, compact(
                'produk',
                'kategori',
                'keranjang',
            ));
        } else {
            $total_produk_keranjang = Keranjang::where('user_id', $info->id)->count();
            $total = 0;
            $totalnya = Keranjang::where('user_id', $info->id)->get();
            foreach ($totalnya as $totals) {
                $total += $totals->produk->harga_produk * $totals->produk_qty;
            }
            $total_isi_keranjang = Keranjang::where('user_id', $info->id)->count();
            $total_dalam_keranjangs = $total;
            $isi_keranjang = Keranjang::where('user_id', $info->id)->get();

            $keranjang = verifikasi_pembelian::get();
            $data = ['LoggedUserInfo' => user_pengguna::where('id', '=', session('LoggedUser'))->first()];
            $kategori = kategori_barang::all();
            $produk = verifikasi_produk::where(function ($query) use ($request) {
                return $request->cari ?
                    $query->from('verifikasi_produks')->where('kategori', $request->cari) : '';
            })->where(function ($query) use ($request) {
                return $request->cari2 ?
                    $query->from('verifikasi_produks')->where('nama_produk', $request->cari2) : '';
            })->get();
            return view('frontend.pencarian', $data, compact(
                'produk',
                'kategori',
                'keranjang',
                'total_produk_keranjang',
                'isi_keranjang',
                'total_dalam_keranjangs',
                'total_isi_keranjang'
            ));
        }
    }

    public function login()
    {
        return view('frontend.login');
    }
    public function register()
    {
        return view('frontend.register');
    }
    public function admin()
    {
        return view('frontend.admin.index');
    }
    public function pencarian()
    {
        return view('frontend.pencarian');
    }
    public function detail_produk($id)
    {
        $info = user_pengguna::where('id', '=', session('LoggedUser'))->first(); //Ambil Id User yang sedang Login
        if ($info == "") {
            $produk = verifikasi_produk::findOrFail($id);
            $review_produk = review_produk::where('id_produk', $id)->get();
            $ulasan = review_produk::get();
            $produks = verifikasi_produk::get();
            $keranjangProduk = ['cekProduk' => verifikasi_pembelian::where('id', '=', 3)->first()];
            $data = ['LoggedUserInfo' => user_pengguna::where('id', '=', session('LoggedUser'))->first()];
            // $info = user_pengguna::where('id', '=', session('LoggedUser'))->first();
            // dd($info->id);
            $kategori = kategori_barang::all();
            return view('frontend.detail_produk', $data, compact(
                'produk',
                'kategori',
                'produks',
                'review_produk',
            ));
        } else {
            $total_produk_keranjang = Keranjang::where('user_id', $info->id)->count();
            $total = 0;
            $totalnya = Keranjang::where('user_id', $info->id)->get();
            foreach ($totalnya as $totals) {
                $total += $totals->produk->harga_produk * $totals->produk_qty;
            }
            $total_isi_keranjang = Keranjang::where('user_id', $info->id)->count();
            $total_dalam_keranjangs = $total;
            $isi_keranjang = Keranjang::where('user_id', $info->id)->get();
            $produk = verifikasi_produk::findOrFail($id);
            $review_produk = review_produk::where('id_produk', $id)->get();
            $ulasan = review_produk::get();
            $produks = verifikasi_produk::get();
            $keranjangProduk = ['cekProduk' => verifikasi_pembelian::where('id', '=', 3)->first()];
            $data = ['LoggedUserInfo' => user_pengguna::where('id', '=', session('LoggedUser'))->first()];
            // $info = user_pengguna::where('id', '=', session('LoggedUser'))->first();
            // dd($info->id);
            $kategori = kategori_barang::all();
            return view('frontend.detail_produk', $data, compact(
                'produk',
                'kategori',
                'produks',
                'review_produk',
                'total_produk_keranjang',
                'isi_keranjang',
                'total_dalam_keranjangs',
                'total_isi_keranjang'
            ));
        }
    }
    public function kategori_produk($kategori)
    {
        // $kategori_produk = kategori_barang::join('verifikasi_produks', 'kategori_barangs.kategori', '=', 'verifikasi_produks.kategori')
        // ->get(['verifikasi_produks.kategori','kategori_barangs.kategori']);
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
        $produk = verifikasi_produk::where('kategori', $kategori)->get();
        $kategori = kategori_barang::get();
        $data = ['LoggedUserInfo' => user_pengguna::where('id', '=', session('LoggedUser'))->first()];
        return view('frontend.kategori_produk', $data, compact(
            'produk',
            'kategori',
            'total_produk_keranjang',
            'isi_keranjang',
            'total_dalam_keranjangs',
            'total_isi_keranjang'
        ));
    }
    public function keranjang()
    {
        $data = ['LoggedUserInfo' => user_pengguna::where('id', '=', session('LoggedUser'))->first()];
        $produks = verifikasi_produk::get();
        $keranjang = verifikasi_pembelian::join('verifikasi_produks', 'verifikasi_pembelians.nama_produk', '=', 'verifikasi_produks.nama_produk')
            ->get(['verifikasi_produks.*', 'verifikasi_pembelians.*']);

        $kategori = kategori_barang::all();
        return view('backend.umum.umum_keranjang', $data, compact('kategori', 'produks', 'keranjang'));
    }
    public function umum_save_ke_keranjang(Request $request)
    {
        $data = ['LoggedUserInfo' => user_pengguna::where('id', '=', session('LoggedUser'))->first()];
        $keranjang = verifikasi_pembelian::get();
        $save_keranjang = new verifikasi_pembelian();
        $save_keranjang->id_produk = $request->id_produk;
        $save_keranjang->id_pembeli = $request->id_pembeli;
        $save_keranjang->nama_produk = $request->nama_produk;
        $save_keranjang->umkm = $request->umkm;
        $save_keranjang->kuantitas = $request->kuantitas;
        $save_keranjang->total = $request->total;
        $save_keranjang->save();
        return back()->with('success', 'Berhasil di Masukkan ke Keranjang');
    }

    public function increment_kuantitas(Request $request, $id)
    {
        $save_data = verifikasi_pembelian::where('id', $id);
        $save_data->update([
            'kuantitas' => $request->input('kuantitas'),
            'total' => $request->input('total')
        ]);
        return back()->with('success', 'Berhasil di Masukkan ke Keranjang');
    }

    public function update_kuantitas_produk(Request $request)
    {
        if ($request->ajax()) {
            $data = $request->all();
            //echo "<pre>"; print_r($data); die;

            $keranjangDetail = verifikasi_pembelian::find($data['cartid']);
            $stokTersedia = verifikasi_produk::select('total_stok')
                ->where(['id' => $keranjangDetail['id_produk']])->first()->toArray();

            // echo "Produk diminta".$data['qty'];
            // echo "<br>";
            // echo "Stok Tersedia".$stokTersedia['total_stok']; die;

            if ($data['qty'] > $stokTersedia['total_stok']) {
                $keranjang = verifikasi_pembelian::get();
                $data = ['LoggedUserInfo' => user_pengguna::where('id', '=', session('LoggedUser'))->first()];
                $kategori = kategori_barang::all();
                return view('frontend.keranjang', $data, compact('keranjang', 'kategori'))->with('status', 'cart updated');
            }
            verifikasi_pembelian::where('id', $data['cartid'])->update([
                'kuantitas' => $data['qty'],
                'total' => $data['totals']
            ]);
            $keranjang = verifikasi_pembelian::get();
            $data = ['LoggedUserInfo' => user_pengguna::where('id', '=', session('LoggedUser'))->first()];
            $kategori = kategori_barang::all();
            return response()->json([
                'view' => (string)View::make('frontend.keranjang', $data)->with(compact('keranjang', 'kategori'))
            ]);
        }
    }

    public function checkout()
    {
        return view('frontend.checkout');
    }
    public function halaman_pembayaran()
    {
        return view('frontend.halaman_pembayaran');
    }
    public function umum()
    {
        return view('frontend.umum');
    }
    public function lacak_barang()
    {
        return view('frontend.lacak_barang');
    }
    public function aju_pengembalian()
    {
        return view('frontend.aju_pengembalian');
    }
    public function review_produk()
    {
        $kategori = kategori_barang::paginate(6);
        $keranjang = verifikasi_pembelian::get();
        $data = ['LoggedUserInfo' => user_pengguna::where('id', '=', session('LoggedUser'))->first()];
        return view('frontend.review_produk', $data, compact('kategori'));
    }
    public function umkm()
    {
        $info = user_pengguna::where('id', '=', session('LoggedUser'))->first(); //Ambil Id User yang sedang Login
        if ($info == "") {
            $ulasan = review_produk::get();
            $produk = verifikasi_produk::get();
            $keranjangProduk = ['cekProduk' => verifikasi_pembelian::where('id', '=', 3)->first()];
            $data = ['LoggedUserInfo' => user_pengguna::where('id', '=', session('LoggedUser'))->first()];
            $umkm = verifikasi_umkm::get();
            // $info = user_pengguna::where('id', '=', session('LoggedUser'))->first();
            // dd($info->id);
            $kategori = kategori_barang::all();
            return view('frontend.umkm', $data, compact(
                'umkm',
                'produk',
                'kategori',
            ));
        } else {
            $total_produk_keranjang = Keranjang::where('user_id', $info->id)->count();
            $total = 0;
            $totalnya = Keranjang::where('user_id', $info->id)->get();
            foreach ($totalnya as $totals) {
                $total += $totals->produk->harga_produk * $totals->produk_qty;
            }
            $total_isi_keranjang = Keranjang::where('user_id', $info->id)->count();
            $total_dalam_keranjangs = $total;
            $isi_keranjang = Keranjang::where('user_id', $info->id)->get();
            $ulasan = review_produk::get();
            $produk = verifikasi_produk::get();
            $umkm = verifikasi_umkm::get();
            $keranjangProduk = ['cekProduk' => verifikasi_pembelian::where('id', '=', 3)->first()];
            $data = ['LoggedUserInfo' => user_pengguna::where('id', '=', session('LoggedUser'))->first()];
            // $info = user_pengguna::where('id', '=', session('LoggedUser'))->first();
            // dd($info->id);
            $kategori = kategori_barang::all();
            return view('frontend.umkm', $data, compact(
                'umkm',
                'produk',
                'kategori',
                'total_produk_keranjang',
                'isi_keranjang',
                'total_dalam_keranjangs',
                'total_isi_keranjang'
            ));
        }
    }
    public function bayar_pendaftaran()
    {
        return view('frontend.bayar_pendaftaran');
    }
    public function pending_verifikasi()
    {
        return view('frontend.pending_verifikasi');
    }
    public function daftar_produk()
    {
        return view('frontend.daftar_produk');
    }
    public function umkm_wallet()
    {
        return view('frontend.umkm_wallet');
    }
    public function umkm_wallet_lanjutan()
    {
        return view('frontend.umkm_wallet_lanjutan');
    }
    public function umkm_verifikasi()
    {
        return view('frontend.umkm_verifikasi');
    }
    public function pengajuan_akun_premium()
    {
        return view('frontend.pengajuan_akun_premium');
    }
    public function pengajuan_iklan_produk()
    {
        return view('frontend.pengajuan_iklan_produk');
    }
    public function admin_verifikasi_produk_umkm()
    {
        return view('admin.verifikasi_produk_umkm');
    }
    public function admin_verifikasi_pembelian()
    {
        return view('admin.verifikasi_pembelian');
    }
    public function admin_pengajuan_pro_umkm()
    {
        return view('admin.pengajuan_pro_umkm');
    }
    public function admin_pengajuan_iklan_produk()
    {
        return view('admin.pengajuan_iklan_produk');
    }
    public function admin_notifikasi()
    {
        return view('admin.notifikasi');
    }
    public function admin_manajemen_user()
    {
        return view('admin.manajemen_user');
    }
    public function superadmin()
    {
        return view('superadmin.index');
    }
    public function superadmin_laporan_jumlah_produk()
    {
        return view('superadmin.laporan_jumlah_produk');
    }
    public function superadmin_laporan_jumlah_umkm()
    {
        return view('superadmin.laporan_jumlah_umkm');
    }
    public function superadmin_laporan_jumlah_transaksi()
    {
        return view('superadmin.laporan_jumlah_transaksi');
    }
    public function superadmin_laporan_income()
    {
        return view('superadmin.laporan_income');
    }
    public function superadmin_claim_konsumen()
    {
        return view('superadmin.claim_konsumen');
    }
    public function superadmin_produk_terlaris()
    {
        return view('superadmin.produk_terlaris');
    }
    public function superadmin_review_produk()
    {
        return view('superadmin.review_produk');
    }
    public function superadmin_review_kurir()
    {
        return view('superadmin.review_karir');
    }
    public function superadmin_pengajuan_pencairan()
    {
    }
    public function tentang()
    {
        $keranjang = verifikasi_pembelian::get();
        $data = ['LoggedUserInfo' => user_pengguna::where('id', '=', session('LoggedUser'))->first()];
        $kategori = kategori_barang::all();
        return view('frontend.tentang', $data, compact('kategori', 'keranjang'));
    }
    public function promo()
    {
        $produk = verifikasi_produk::get();
        $keranjang = verifikasi_pembelian::get();
        $slider = slider::get();
        $data = ['LoggedUserInfo' => user_pengguna::where('id', '=', session('LoggedUser'))->first()];
        $kategori = kategori_barang::all();
        return view('frontend.promo', $data, compact('kategori', 'keranjang', 'produk', 'slider'));
    }
    public function tampil_umum_kontak()
    {
        return view('frontend.kontak');
    }
    public function tampilKontak()
    {
        return view('frontend.kontak');
    }
    public function tambah_backend_kontak(Request $request)
    {
        $tambahKontak = Kontak::create($request->all());

        if ($request->hasFile('foto')) {
            $request->file('foto')->move('foto_profil/', $request->file('foto')->getClientOriginalName());
            $tambahKontak->gambar = $request->file('foto')->getClientOriginalName();
            $tambahKontak->save();
        }
        return view('frontend.kontak');
    }

    public function edit_backend_kontak($id)
    {
        $data = Kontak::find($id);
        return response()->json([
            'data' => $data,
        ]);
    }
    public function update_backend_kontak(Request $request)
    {
        $data_id = $request->input('id');
        $update_kontak = Kontak::find($data_id);
        $update_kontak->sebagai = $request->sebagai;
        $update_kontak->nama = $request->nama;
        $update_kontak->email = $request->email;
        $update_kontak->alamat = $request->alamat;

        $update_kontak->update();
        if ($request->hasFile('foto')) //Cek apakah ada file avatar yang di Upload
        {
            $request->file('foto')->move('images/', $request->file('foto')->getClientOriginalName());
            $update_kontak->foto = $request->file('foto')->getClientOriginalName();
            $update_kontak->save();
        }

        return redirect()->back()->with('status', 'Berhasil');
    }

    public function delete_backend_kontak($id)
    {
        $info = Kontak::where('id', $id)->delete();
        Alert::success('Sukses', 'Informasi Berhasil Dihapus');
        return redirect('/informasi');
    }

    public function tambah_umum_pesan(Request $request)
    {
        $tambahPesan = Pesan::create($request->all());
        return redirect('tentang');
    }
}
