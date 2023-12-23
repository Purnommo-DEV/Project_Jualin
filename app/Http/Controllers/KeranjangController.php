<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\user_pengguna;
use App\Models\Keranjang;
use App\Models\admin\verifikasi_produk;
use App\Models\admin\kategori_barang;
use Illuminate\Support\Facades\View;

class KeranjangController extends Controller
{
    public function data_keranjang()
    {
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
        $kategori = kategori_barang::get();
        $data = ['LoggedUserInfo' => user_pengguna::where('id', '=', session('LoggedUser'))->first()];
        $info = user_pengguna::where('id', '=', session('LoggedUser'))->first(); //Ambil Id User yang sedang Login
        $keranjang = Keranjang::where('user_id', $info->id)->get();

        return view('backend.umum.umum_keranjang', $data, compact(
            'keranjang',
            'kategori',
            'total_produk_keranjang',
            'total_dalam_keranjangs',
            'isi_keranjang',
            'total_isi_keranjang'
        ));
    }

    public function umum_save_ke_keranjang(Request $request)
    {
        $info = user_pengguna::where('id', '=', session('LoggedUser'))->first(); //Ambil Id User yang sedang Login
        $produk_id = $request->input('produk_id');
        $produk_qty = $request->input('produk_qty');
        $nama_umkm = $request->input('nama_umkm');

        if ($info == NULL) {
            return response()->json(['status' => "Silahkan Login untuk Melanjutkan "]);
        } else {
            $produk_cek = verifikasi_produk::where('id', $produk_id)->first(); {
                if (Keranjang::where('produk_id', $produk_id)->where('user_id', $info->id)->exists()) {
                    return response()->json(['status' => $produk_cek->nama_produk . " Telah ada di Keranjang"]);
                } else {
                    $keranjangItem = new Keranjang();
                    $keranjangItem->user_id = $info->id;
                    $keranjangItem->produk_id = $produk_id;
                    $keranjangItem->produk_qty = $produk_qty;
                    $keranjangItem->nama_umkm = $info->umkm;
                    $keranjangItem->save();
                    return response()->json(['status' => $produk_cek->nama_produk . " Berhasil Ditambah ke Keranjang"]);
                }
            }
        }
    }

    public function hapus_produk_dalam_keranjang(Request $request)
    {
        if ($request->ajax()) {
            $data = $request->all();
            //echo "<pre>"; print_r($data); die;
            Keranjang::where('id', $data['cartid'])->delete();
            $keranjang = Keranjang::get();
            $data = ['LoggedUserInfo' => user_pengguna::where('id', '=', session('LoggedUser'))->first()];
            $kategori = kategori_barang::all();
            //'keranjang' => view('umum_update_kuantitas_produk')->with('keranjang',$keranjang)->render()]);
            //return response()->json(['status'=> "Update"]);
            // return response()->json(['status' => "Telah ada di Keranjang"]);
            return response()->json(['view' => (string)View::make('frontend.keranjang', $data)->with(compact('keranjang', 'kategori'))]);
        }
    }

    // public function update_kuantitas_produk(Request $request)
    // {
    //     $info = user_pengguna::where('id', '=', session('LoggedUser'))->first(); //Ambil Id User yang sedang Login
    //     $produk_id = $request->input('produk_id');
    //     $produk_qty = $request->input('produk_qty');

    //     if ($info == NULL) {
    //         return response()->json(['status' => "Silahkan Login untuk Melanjutkan "]);
    //     } else {
    //         $produk_cek = verifikasi_produk::where('id', $produk_id)->first(); {
    //             if (Keranjang::where('produk_id', $produk_id)->where('user_id', $info->id)->exists()) {
    //                 $keranjangUpdate = Keranjang::where('produk_id', $produk_id)->where('user_id', $info->id)->first();
    //                 $keranjangUpdate->produk_qty = $produk_qty;
    //                 $keranjangUpdate->update();
    //                 return response()->json(['status' => $produk_cek->nama_produk . " Berhasil Ditambah ke Keranjang"]);
    //             }
    //         }
    //     }
    // }
    public function update_kuantitas_produk(Request $request)
    {
        if ($request->ajax()) {
            $data = $request->all();
            //echo "<pre>"; print_r($data); die;

            $keranjangDetail = Keranjang::find($data['cartid']);
            $stokTersedia = verifikasi_produk::select('total_stok')
                ->where(['id' => $keranjangDetail['produk_id']])->first()->toArray();

            // echo "Produk diminta".$data['qty'];
            // echo "<br>";
            // echo "Stok Tersedia".$stokTersedia['total_stok']; die;

            if ($data['qty'] > $stokTersedia['total_stok']) {
                $keranjang = Keranjang::get();
                $data = ['LoggedUserInfo' => user_pengguna::where('id', '=', session('LoggedUser'))->first()];
                $kategori = kategori_barang::all();
                return response()->json([
                    'view' => (string)View::make('frontend.keranjang', $data)->with(compact('keranjang', 'kategori'))
                ]);
            }
            Keranjang::where('id', $data['cartid'])->update([
                'produk_qty' => $data['qty'],
            ]);
            $keranjang = Keranjang::get();
            $data = ['LoggedUserInfo' => user_pengguna::where('id', '=', session('LoggedUser'))->first()];
            $kategori = kategori_barang::all();
            return response()->json([
                'view' => (string)View::make('frontend.keranjang', $data)->with(compact('keranjang', 'kategori'))
            ]);
        }
    }
}
