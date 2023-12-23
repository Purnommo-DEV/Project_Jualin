<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\user_pengguna;
use Yajra\DataTables\DataTables;
use App\Models\admin\notifikasi;
use App\Models\admin\pengajuan_akun_pro_umkm;
use App\Models\admin\pengajuan_iklan_produk;
use App\Models\admin\verifikasi_produk;
use App\Models\admin\verifikasi_pembelian;
use App\Models\admin\verifikasi_pembelian_2;
use App\Models\admin\verifikasi_umkm;
use App\Models\admin\kategori_barang;
use App\Models\MetodePembayaran;
use App\Models\PesanBarang;
use App\Models\umkm\tampung_file;
use RealRashid\SweetAlert\Facades\Alert;
use Response;

use File;
use Illuminate\Support\Facades\Validator;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->user_pengguna = new user_pengguna();
    }

    public function admin_metode_pembayaran(Request $request)
    {
        $pengajuan_iklan_produk = pengajuan_iklan_produk::paginate(3);
        $pengajuan_premium = pengajuan_akun_pro_umkm::paginate(3);
        $verifikasi_pembelian =  verifikasi_pembelian::paginate(3);
        $verifikasi_umkm = verifikasi_umkm::paginate(3);
        $verifikasi_produk = verifikasi_produk::paginate(3);
        $data = ['LoggedUserInfo' => user_pengguna::where('id', '=', session('LoggedUser'))->first()];
        $metode = MetodePembayaran::get();
        return view(
            'backend.admin.metode_pembayaran',
            $data,
            [
                'verifikasi_produk' => $verifikasi_produk,
                'pengajuan_premium' => $pengajuan_premium,
                'pengajuan_iklan_produk' => $pengajuan_iklan_produk,
                'verifikasi_pembelian' => $verifikasi_pembelian,
                'verifikasi_produk' => $verifikasi_produk,
                'verifikasi_umkm' => $verifikasi_umkm,
                'metode' => $metode
            ]
        );
    }

    public function admin_save_metode_pembayaran(Request $request)
    {
        $metode = MetodePembayaran::create($request->all());
        if ($request->hasFile('logo')) //Cek apakah ada file avatar yang di Upload 
        {
            $request->file('logo')->move('logo_metode_pembayaran/', $request->file('logo')->getClientOriginalName());
            $metode->logo = $request->file('logo')->getClientOriginalName();
            $metode->save();
        }
        return redirect()->back()->with('success', 'Berhasil Memberikan Review Produk');
    }

    public function edit_admin_metode_pembayaran($id)
    {
        $data = MetodePembayaran::find($id);
        return response()->json([
            'data' => $data,
        ]);
    }
    public function update_admin_metode_pembayaran(Request $request)
    {
        $data_id = $request->input('id');
        $metodes = MetodePembayaran::find($data_id);
        $metodes->metode = $request->metode;
        $metodes->update();
        if ($request->hasFile('logo')) //Cek apakah ada file avatar yang di Upload 
        {
            $request->file('logo')->move('logo_metode_pembayaran/', $request->file('logo')->getClientOriginalName());
            $metodes->logo = $request->file('logo')->getClientOriginalName();
            $metodes->save();
        }
        Alert::success('Sukses', 'Data Berhasil di Ubah');
        return redirect()->back();
    }
    public function hapus_admin_metode_pembayaran($id)
    {
        $metodes = MetodePembayaran::where('id', $id)->delete();
        // $destination = 'logo_metode_pembayaran/' . $metodes->logo;
        // if (File::exists($destination)) {
        //     File::delete($destination);
        // }
        // Alert::success('Sukses', 'Data Berhasil Dihapus');
        return redirect()->back();
    }

    public function admin_dashboard()
    {
        $pengajuan_iklan_produk = pengajuan_iklan_produk::paginate(3);
        $pengajuan_premium = pengajuan_akun_pro_umkm::paginate(3);
        $verifikasi_pembelian =  verifikasi_pembelian::paginate(3);
        $verifikasi_umkm = verifikasi_umkm::paginate(3);
        $verifikasi_produk = verifikasi_produk::paginate(3);
        $data = ['LoggedUserInfo' => user_pengguna::where('id', '=', session('LoggedUser'))->first()];
        return view(
            'backend.admin.index',
            $data,
            [
                'verifikasi_produk' => $verifikasi_produk,
                'pengajuan_premium' => $pengajuan_premium,
                'pengajuan_iklan_produk' => $pengajuan_iklan_produk,
                'verifikasi_pembelian' => $verifikasi_pembelian,
                'verifikasi_produk' => $verifikasi_produk,
                'verifikasi_umkm' => $verifikasi_umkm
            ]
        )
            ->with('success', 'anda Berhasil login');
    }

    public function admin_notifikasi()
    {
        $pengajuan_iklan_produk = pengajuan_iklan_produk::paginate(3);
        $pengajuan_premium = pengajuan_akun_pro_umkm::paginate(3);
        $verifikasi_pembelian =  verifikasi_pembelian::paginate(3);
        $verifikasi_umkm = verifikasi_umkm::paginate(3);
        $verifikasi_produk = verifikasi_produk::paginate(3);
        $data = ['LoggedUserInfo' => user_pengguna::where('id', '=', session('LoggedUser'))->first()];
        return view('backend.admin.notifikasi', $data, [
            'pengajuan_premium' => $pengajuan_premium,
            'pengajuan_iklan_produk' => $pengajuan_iklan_produk,
            'verifikasi_pembelian' => $verifikasi_pembelian,
            'verifikasi_produk' => $verifikasi_produk,
            'verifikasi_umkm' => $verifikasi_umkm
        ]);
    }
    public function admin_managemen_user()
    {
        $pengajuan_iklan_produk = pengajuan_iklan_produk::paginate(3);
        $pengajuan_premium = pengajuan_akun_pro_umkm::paginate(3);
        $verifikasi_pembelian =  verifikasi_pembelian::paginate(3);
        $verifikasi_umkm = verifikasi_umkm::paginate(3);
        $verifikasi_produk = verifikasi_produk::paginate(3);
        $user_pengguna = user_pengguna::get();
        $data = ['LoggedUserInfo' => user_pengguna::where('id', '=', session('LoggedUser'))->first()];
        return view(
            'backend.admin.manajemen_user',
            $data,
            [
                'user_pengguna' => $user_pengguna,
                'verifikasi_produk' => $verifikasi_produk,
                'pengajuan_premium' => $pengajuan_premium,
                'pengajuan_iklan_produk' => $pengajuan_iklan_produk,
                'verifikasi_pembelian' => $verifikasi_pembelian,
                'verifikasi_umkm' => $verifikasi_umkm,
            ]
        );
    }

    public function admin_pengajuan_iklan_produk()
    {
        $pengajuan_iklan_produk = pengajuan_iklan_produk::paginate(3);
        $pengajuan_premium = pengajuan_akun_pro_umkm::paginate(3);
        $verifikasi_pembelian =  verifikasi_pembelian::paginate(3);
        $verifikasi_umkm = verifikasi_umkm::paginate(3);
        $verifikasi_produk = verifikasi_produk::paginate(3);
        $pengajuan_iklan_produk = pengajuan_iklan_produk::get();
        $data = ['LoggedUserInfo' => user_pengguna::where('id', '=', session('LoggedUser'))->first()];
        return view('backend.admin.pengajuan_iklan_produk', $data, [
            'pengajuan_iklan_produk' => $pengajuan_iklan_produk,
            'pengajuan_premium' => $pengajuan_premium,
            'verifikasi_pembelian' => $verifikasi_pembelian,
            'verifikasi_produk' => $verifikasi_produk,
            'verifikasi_umkm' => $verifikasi_umkm
        ]);
    }

    public function admin_pengajuan_akun_pro_umkm()
    {
        $pengajuan_iklan_produk = pengajuan_iklan_produk::paginate(3);
        $pengajuan_premium = pengajuan_akun_pro_umkm::paginate(3);
        $verifikasi_pembelian =  verifikasi_pembelian::paginate(3);
        $verifikasi_umkm = verifikasi_umkm::paginate(3);
        $verifikasi_produk = verifikasi_produk::paginate(3);
        $pengajuan_pro_umkm = pengajuan_akun_pro_umkm::get();
        $data = ['LoggedUserInfo' => user_pengguna::where('id', '=', session('LoggedUser'))->first()];
        return view(
            'backend.admin.pengajuan_pro_umkm',
            $data,
            [
                'pengajuan_pro_umkm' => $pengajuan_pro_umkm,
                'verifikasi_produk' => $verifikasi_produk,
                'pengajuan_iklan_produk' => $pengajuan_iklan_produk,
                'pengajuan_premium' => $pengajuan_premium,
                'verifikasi_pembelian' => $verifikasi_pembelian,
                'verifikasi_umkm' => $verifikasi_umkm

            ]
        );
    }

    public function admin_verifikasi_pembelian()
    {
        $pengajuan_iklan_produk = pengajuan_iklan_produk::paginate(3);
        $pengajuan_premium = pengajuan_akun_pro_umkm::paginate(3);
        $verifikasi_pembelian =  verifikasi_pembelian_2::paginate(3);
        $verifikasi_umkm = verifikasi_umkm::paginate(3);
        $verifikasi_produk = verifikasi_produk::paginate(3);
        $verifikasi_pembelian = PesanBarang::get();
        $data = ['LoggedUserInfo' => user_pengguna::where('id', '=', session('LoggedUser'))->first()];
        return view('backend.admin.verifikasi_pembelian', $data, [
            'verifikasi_pembelian' => $verifikasi_pembelian,
            'verifikasi_produk' => $verifikasi_produk,
            'pengajuan_iklan_produk' => $pengajuan_iklan_produk,
            'pengajuan_premium' => $pengajuan_premium,
            'verifikasi_pembelian' => $verifikasi_pembelian,
            'verifikasi_umkm' => $verifikasi_umkm
        ]);
    }
    public function admin_verifikasi_produk()
    {
        $pengajuan_iklan_produk = pengajuan_iklan_produk::paginate(3);
        $pengajuan_premium = pengajuan_akun_pro_umkm::paginate(3);
        $verifikasi_pembelian =  verifikasi_pembelian::paginate(3);
        $verifikasi_umkm = verifikasi_umkm::paginate(3);
        $verifikasi_produks = verifikasi_produk::paginate(3);
        $verifikasi_produk = verifikasi_produk::get();
        $data = ['LoggedUserInfo' => user_pengguna::where('id', '=', session('LoggedUser'))->first()];
        return view('backend.admin.verifikasi_produk', $data, [
            'verifikasi_produk' => $verifikasi_produk,
            'verifikasi_produk' => $verifikasi_produk,
            'pengajuan_iklan_produk' => $pengajuan_iklan_produk,
            'pengajuan_premium' => $pengajuan_premium,
            'verifikasi_pembelian' => $verifikasi_pembelian,
            'verifikasi_umkm' => $verifikasi_umkm,
            'verifikasi_produks' => $verifikasi_produks
        ]);
    }
    public function admin_verifikasi_data_umkm()
    {
        $pengajuan_iklan_produk = pengajuan_iklan_produk::paginate(3);
        $pengajuan_premium = pengajuan_akun_pro_umkm::paginate(3);
        $verifikasi_pembelian =  verifikasi_pembelian::paginate(3);
        $verifikasi_umkms = verifikasi_umkm::paginate(3);
        $verifikasi_produk = verifikasi_produk::paginate(3);
        $verifikasi_umkm = verifikasi_umkm::join('tampung_files', 'verifikasi_umkms.email', '=', 'tampung_files.email')
            ->get(['tampung_files.*', 'verifikasi_umkms.*']);

        $data = ['LoggedUserInfo' => user_pengguna::where('id', '=', session('LoggedUser'))->first()];
        return view('backend.admin.verifikasi_umkm', $data, [
            'verifikasi_umkm' => $verifikasi_umkm,

            'verifikasi_produk' => $verifikasi_produk,
            'pengajuan_iklan_produk' => $pengajuan_iklan_produk,
            'pengajuan_premium' => $pengajuan_premium,
            'verifikasi_pembelian' => $verifikasi_pembelian,
            'verifikasi_umkms' => $verifikasi_umkms,
        ]);
    }
    public function admin_manajemen_kategori_produk()
    {
        $pengajuan_iklan_produk = pengajuan_iklan_produk::paginate(3);
        $pengajuan_premium = pengajuan_akun_pro_umkm::paginate(3);
        $verifikasi_pembelian =  verifikasi_pembelian::paginate(3);
        $verifikasi_umkm = verifikasi_umkm::paginate(3);
        $verifikasi_produk = verifikasi_produk::paginate(3);
        $kategori_barang = kategori_barang::get();
        $data = ['LoggedUserInfo' => user_pengguna::where('id', '=', session('LoggedUser'))->first()];
        return view(
            'backend.admin.manajemen_kategori_produk',
            $data,
            [
                'kategori_barang' => $kategori_barang,
                'verifikasi_produk' => $verifikasi_produk,
                'pengajuan_iklan_produk' => $pengajuan_iklan_produk,
                'pengajuan_premium' => $pengajuan_premium,
                'verifikasi_pembelian' => $verifikasi_pembelian,
                'verifikasi_umkm' => $verifikasi_umkm,
            ]
        );
    }
    public function save_manajemen_kategori_produk(Request $request)
    {
        $this->validate($request, [
            'kategori' => 'required|unique:kategori_barangs',
        ]);
        // $validator = Validator::make($request->all(),[
        //     'kategori' => 'required|unique:kategori_barangs',
        // ]);

        // if ($validator->fails()){
        //     return response()->json(['errors'=>$validator->errors()->all()]);
        //     }

        $save_kategori = new kategori_barang;
        $save_kategori->kategori = $request->kategori;
        $gambar = $request->gambar;
        $filename05 = time() . '.' . $gambar->getClientOriginalExtension();
        $request->gambar->move('images', $filename05);
        $save_kategori->gambar = $filename05;
        $save = $save_kategori->save();
        //return response()->json(['success'=>view('backend.admin.manajemen_kategori_produk')]);

        // Alert::success('Sukses', 'Data Berhasil di Tambah');
        // return redirect()->back();

        // $request->validate([
        //     'kategori' => 'required|unique:kategori_barangs'
        // ]);
        // $save_kategori = new kategori_barang;
        // $save_kategori->kategori = $request->kategori;

        // $gambar =$request->gambar;
        // $filename05 =time().'.'.$gambar->getClientOriginalExtension();
        // $request->gambar->move('images',$filename05);
        // $save_kategori->gambar = $filename05;
        // $save= $save_kategori->save();

        if ($save) {
            Alert::success('Sukses', 'Data Berhasil di Tambah');
            return back();
        } else {
            Alert::error('Gagal', 'Tidak Mendukung Duplikat Data');
            return back();
        }
    }
    public function edit_admin_manajemen_kategori_produk($id)
    {
        $data = kategori_barang::find($id);
        return response()->json([
            'data' => $data,
        ]);
    }
    public function update_admin_manajemen_kategori_produk(Request $request)
    {
        $data_id = $request->input('id');
        $kategori_barang = kategori_barang::find($data_id);
        $kategori_barang->kategori = $request->kategori;
        $kategori_barang->update();
        if ($request->hasFile('gambar')) //Cek apakah ada file avatar yang di Upload 
        {
            $request->file('gambar')->move('images/', $request->file('gambar')->getClientOriginalName());
            $kategori_barang->gambar = $request->file('gambar')->getClientOriginalName();
            $kategori_barang->save();
        }
        Alert::success('Sukses', 'Data Berhasil di Ubah');
        return redirect()->back();
    }
    public function hapus_admin_manajemen_kategori_produk($id)
    {
        $kategori_barang = kategori_barang::where('id', $id)->delete();
        $destination = 'images/' . $kategori_barang->gambar;
        if (File::exists($destination)) {
            File::delete($destination);
        }
        Alert::success('Sukses', 'Data Berhasil Dihapus');
        return redirect()->back();
    }
    public function edit_admin_verifikasi_data_umkm($id)
    {
        $data = verifikasi_umkm::find($id);
        return response()->json([
            'data' => $data,
        ]);
    }
    public function update_admin_verifikasi_data_umkm(Request $request)
    {
        $data_id = $request->input('id');
        $verifikasi_umkm = verifikasi_umkm::find($data_id);
        $verifikasi_umkm->status = $request->status;
        $verifikasi_umkm->update();
        Alert::success('Sukses', 'Data Berhasil di Ubah');
        return redirect()->back();
    }
    public function edit_admin_verifikasi_data_produk($id)
    {
        $data = verifikasi_produk::find($id);
        return response()->json([
            'data' => $data,
        ]);
    }
    public function update_admin_verifikasi_data_produk(Request $request)
    {
        $data_id = $request->input('id');
        $verifikasi_produk = verifikasi_produk::find($data_id);
        $verifikasi_produk->status_verifikasi = $request->status_verifikasi;
        $verifikasi_produk->update();

        Alert::success('Sukses', 'Data Berhasil di Ubah');
        return redirect()->back();
    }
    public function not_found_404()
    {
        $data = ['LoggedUserInfo' => user_pengguna::where('id', '=', session('LoggedUser'))->first()];
        return view('backend.404.index', $data);
    }
    public function edit_umkm_pengajuan_akun_premium($id)
    {
        $data = pengajuan_akun_pro_umkm::find($id);
        return response()->json([
            'data' => $data,
        ]);
    }
    public function update_umkm_pengajuan_akun_premium(Request $request)
    {
        $data_id = $request->input('id');
        $verifikasi_akun = pengajuan_akun_pro_umkm::find($data_id);
        $verifikasi_akun->status_pembayaran = $request->status_pembayaran;
        $verifikasi_akun->update();
        Alert::success('Sukses', 'Data Berhasil di Ubah');
        return redirect()->back();
    }
    public function edit_umkm_pengajuan_iklan_produk($id)
    {
        $data = pengajuan_iklan_produk::find($id);
        return response()->json([
            'data' => $data,
        ]);
    }
    public function update_umkm_pengajuan_iklan_produk(Request $request)
    {
        $data_id = $request->input('id');
        $verifikasi_iklan = pengajuan_iklan_produk::find($data_id);
        $verifikasi_iklan->status_pembayaran = $request->status_pembayaran;
        $verifikasi_iklan->update();
        Alert::success('Sukses', 'Data Berhasil di Ubah');
        return redirect()->back();
    }
    public function notifikasi_data()
    {

        $notifikasi = notifikasi::orderBy('id', 'DESC')->get();
        return response()->json($notifikasi);
    }
    public function verifikasi_produk_data()
    {

        $verifikasi_produk = verifikasi_produk::orderBy('id', 'DESC')->get();
        Alert::success('Sukses', 'Data Berhasil di Ubah');
        return response()->json($verifikasi_produk);
    }
    public function update_verifikasi_produk_admin(Request $request, $id)
    {
        $produk = verifikasi_produk::find($id);
        $input = $request->all();
        $produk->update($input);
        return redirect()->back();
    }
    public function update_verifikasi_pembelian(Request $request, $id)
    {
        $pembelian = PesanBarang::find($id);
        $input = $request->all();
        $pembelian->update($input);
        return redirect()->back();
    }
    public function detail_verifikasi_produk($id)
    {
        $verifikasi_produks = verifikasi_produk::find($id);
        $pengajuan_iklan_produk = pengajuan_iklan_produk::paginate(3);
        $pengajuan_premium = pengajuan_akun_pro_umkm::paginate(3);
        $verifikasi_pembelian =  verifikasi_pembelian::paginate(3);
        $verifikasi_umkm = verifikasi_umkm::paginate(3);
        $verifikasi_produk = verifikasi_produk::paginate(3);
        $data = ['LoggedUserInfo' => user_pengguna::where('id', '=', session('LoggedUser'))->first()];
        return view(
            'backend.admin.detail.verifikasi_produk',
            $data,
            [
                'pengajuan_iklan_produk' => $pengajuan_iklan_produk,
                'pengajuan_premium' => $pengajuan_premium,
                'verifikasi_pembelian' => $verifikasi_pembelian,
                'verifikasi_umkm' => $verifikasi_umkm,
                'verifikasi_produk' => $verifikasi_produk,
                'verifikasi_produks' => $verifikasi_produks
            ]
        );
    }
    public function detail_verifikasi_umkm()
    {
        $pengajuan_iklan_produk = pengajuan_iklan_produk::paginate(3);
        $pengajuan_premium = pengajuan_akun_pro_umkm::paginate(3);
        $verifikasi_pembelian =  verifikasi_pembelian::paginate(3);
        $verifikasi_umkm = verifikasi_umkm::paginate(3);
        $verifikasi_produk = verifikasi_produk::paginate(3);
        $data = ['LoggedUserInfo' => user_pengguna::where('id', '=', session('LoggedUser'))->first()];
        return view('backend.admin.detail.verifikasi_umkm', $data, [
            'pengajuan_iklan_produk' => $pengajuan_iklan_produk,
            'pengajuan_premium' => $pengajuan_premium,
            'verifikasi_pembelian' => $verifikasi_pembelian,
            'verifikasi_umkm' => $verifikasi_umkm,
            'verifikasi_produk' => $verifikasi_produk


        ]);
    }
    public function detail_verifikasi_pembelian()
    {
        $pengajuan_iklan_produk = pengajuan_iklan_produk::paginate(3);
        $pengajuan_premium = pengajuan_akun_pro_umkm::paginate(3);
        $verifikasi_pembelian =  verifikasi_pembelian::paginate(3);
        $verifikasi_umkm = verifikasi_umkm::paginate(3);
        $verifikasi_produk = verifikasi_produk::paginate(3);
        $data = ['LoggedUserInfo' => user_pengguna::where('id', '=', session('LoggedUser'))->first()];
        return view('backend.admin.detail.verifikasi_pembeli', $data, [
            'pengajuan_iklan_produk' => $pengajuan_iklan_produk,
            'pengajuan_premium' => $pengajuan_premium,
            'verifikasi_pembelian' => $verifikasi_pembelian,
            'verifikasi_umkm' => $verifikasi_umkm,
            'verifikasi_produk' => $verifikasi_produk
        ]);
    }
    public function detail_pengajuan_iklan_produk($nama_produk)
    {
        $pengajuan_iklan_produk = pengajuan_iklan_produk::paginate(3);
        $pengajuan_premium = pengajuan_akun_pro_umkm::paginate(3);
        $verifikasi_pembelian =  verifikasi_pembelian::paginate(3);
        $verifikasi_umkm = verifikasi_umkm::paginate(3);
        $verifikasi_produk = verifikasi_produk::paginate(3);
        $pengajuan_iklan_produks = pengajuan_iklan_produk::where('nama_produk', '=', $nama_produk);
        $verifikasi_produks = verifikasi_produk::all();
        $data = ['LoggedUserInfo' => user_pengguna::where('id', '=', session('LoggedUser'))->first()];
        return view('backend.admin.detail.pengajuan_iklan_produk', $data, [
            'pengajuan_iklan_produk' => $pengajuan_iklan_produk,
            'pengajuan_premium' => $pengajuan_premium,
            'verifikasi_pembelian' => $verifikasi_pembelian,
            'verifikasi_umkm' => $verifikasi_umkm,
            'verifikasi_produk' => $verifikasi_produk,
            'pengajuan_iklan_produks' => $pengajuan_iklan_produks,
            'verifikasi_produks' => $verifikasi_produks
        ]);
    }
    public function detail_pengajuan_premium()
    {
        $pengajuan_iklan_produk = pengajuan_iklan_produk::paginate(3);
        $pengajuan_premium = pengajuan_akun_pro_umkm::paginate(3);
        $verifikasi_pembelian =  verifikasi_pembelian::paginate(3);
        $verifikasi_umkm = verifikasi_umkm::paginate(3);
        $verifikasi_produk = verifikasi_produk::paginate(3);
        $data = ['LoggedUserInfo' => user_pengguna::where('id', '=', session('LoggedUser'))->first()];
        return view('backend.admin.detail.pengajuan_premium', $data, [
            'pengajuan_iklan_produk' => $pengajuan_iklan_produk,
            'pengajuan_premium' => $pengajuan_premium,
            'verifikasi_pembelian' => $verifikasi_pembelian,
            'verifikasi_umkm' => $verifikasi_umkm,
            'verifikasi_produk' => $verifikasi_produk
        ]);
    }
    public function detail_profile_umkm($umkm)
    {
        $umkm = verifikasi_umkm::where('umkm', '=', $umkm);
        $pengajuan_iklan_produk = pengajuan_iklan_produk::paginate(3);
        $pengajuan_premium = pengajuan_akun_pro_umkm::paginate(3);
        $verifikasi_pembelian =  verifikasi_pembelian::paginate(3);
        $verifikasi_umkm = verifikasi_umkm::paginate(3);
        $verifikasi_produk = verifikasi_produk::paginate(3);
        $data = ['LoggedUserInfo' => user_pengguna::where('id', '=', session('LoggedUser'))->first()];
        return view('backend.admin.detail.detail_profile_umkm', $data, [
            'pengajuan_iklan_produk' => $pengajuan_iklan_produk,
            'pengajuan_premium' => $pengajuan_premium,
            'verifikasi_pembelian' => $verifikasi_pembelian,
            'verifikasi_umkm' => $verifikasi_umkm,
            'verifikasi_produk' => $verifikasi_produk,
            'umkm' => $umkm
        ]);
    }
    public function update_detail_pengajuan_iklan_produk(Request $request, $id)
    {
        $update_verifikasi_iklan_produk = pengajuan_iklan_produk::find($id);
        $input = $request->all();
        $update_verifikasi_iklan_produk->update($input);
        return redirect()->back()->with('success', 'Anda Sudah Berhasil Memverifikasi Iklan Produk');
    }
}
