<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\user_pengguna;
use App\Models\umkm\tampung_file;
use App\Models\umkm\iklankan_produk;
use App\Models\admin\kategori_barang;
use App\Models\admin\pengajuan_akun_pro_umkm;
use App\Models\umkm\pengajuan_pencairan_umkm;
use App\Models\admin\verifikasi_umkm;
use App\Models\admin\verifikasi_produk;
use App\Models\admin\verifikasi_pembelian_2;
use App\Models\PesanBarang;
use App\Models\superadmin\pengajuan_pencairan;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Hash;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use App\Models\superadmin\review_produk;
use Carbon\Carbon;

class UmkmController extends Controller
{

    public function index()
    {
        $kategori = kategori_barang::all();
        $data = ['LoggedUserInfo' => user_pengguna::where('id', '=', session('LoggedUser'))->first()];
        $verifikasi_umkm = verifikasi_umkm::where('status', '=', 'Belum Di Verifikasi')->first();
        if ($verifikasi_umkm) {
            return view('backend.umkm.index', $data, ['kategori' => $kategori]);
        } else {
            return redirect('backend_umkm_daftar_produk');
        }
    }
    public function bayar_pendaftaran()
    {
        $tampung = tampung_file::get();
        $kategori = kategori_barang::all();
        $data = ['LoggedUserInfo' => user_pengguna::where('id', '=', session('LoggedUser'))->first()];
        $verifikasi = "Belum Di Verifikasi";
        $verifikasi_umkm = verifikasi_umkm::where('status', '=', $verifikasi)->first();
        if ($verifikasi_umkm) {
            return view('backend.umkm.index', $data, ['kategori' => $kategori]);
        } else {
            return view('backend.umkm.bayar_pendaftaran', $data, ['tampung' => $tampung, 'kategori' => $kategori]);
        }
    }
    public function save_pembayaran(Request $request)
    {
        $verifikasi = verifikasi_umkm::where('email', '=', $request->email)->first();
        $verifikasi->username = $request->username;
        $verifikasi->email = $request->email;
        $verifikasi->jabatan = $request->jabatan;
        $verifikasi->kontak_wa = " ";
        $verifikasi->alamat = " ";
        $verifikasi->status_notifikasi = "belum aksi";
        $verifikasi->nominal_bayar = $request->nominal_bayar;
        $verifikasi->status = "Belum Di Verifikasi";
        $verifikasi->pemberitahuan = "menunggu ada memverifikasikan pendaftaran umkm";
        if ($request->hasFile('foto_bukti')) //Cek apakah ada file avatar yang di Upload 
        {
            $request->file('foto_bukti')->move('foto_bukti/', $request->file('foto_bukti')->getClientOriginalName());
            $verifikasi->foto_bukti = $request->file('foto_bukti')->getClientOriginalName();
            $verifikasi->save();
        }
        $verifikasi->update();


        // $verifikasi_umkms = verifikasi_umkm::where('email', '=', $request->email)->first();
        // if ($verifikasi_umkms) {
        //     return redirect('umkm_daftar_pembayaran')->with('fail', 'Umkm anda Sudah mendaftar');
        // } else {
        //     $verifikasi = new verifikasi_umkm();
        //     $verifikasi->username = $request->username;
        //     $verifikasi->email = $request->email;
        //     $verifikasi->jabatan = $request->jabatan;
        //     $verifikasi->kontak_wa = " ";
        //     $verifikasi->alamat = " ";
        //     $verifikasi->status_notifikasi = "belum aksi";
        //     $verifikasi->nominal_bayar = $request->nominal_bayar;
        //     $verifikasi->status = "Belum Di Verifikasi";
        //     $verifikasi->pemberitahuan = "menunggu ada memverifikasikan pendaftaran umkm";
        //     $verifikasi->save();
        //     if ($request->hasFile('foto_bukti')) //Cek apakah ada file avatar yang di Upload 
        //     {
        //         $request->file('foto_bukti')->move('foto_bukti/', $request->file('foto_bukti')->getClientOriginalName());
        //         $verifikasi->foto_bukti = $request->file('foto_bukti')->getClientOriginalName();
        //         $verifikasi->save();
        //     }
        return redirect('menunggu_verifikasi_data');
        // }
    }
    public function bayar_pendaftaran_ke_2($id)
    {
        $datas = user_pengguna::findOrFail($id);
        $kategori = kategori_barang::all();
        $data = ['LoggedUserInfo' => user_pengguna::where('id', '=', session('LoggedUser'))->first()];
        $qrcode = QrCode::size(250)->generate($datas);
        return view('backend.umkm.bayar_pendaftaran_ke_2', $data, ['qrcode' => $qrcode, 'kategori' => $kategori]);
    }
    public function menunggu_verfikiasi()
    {
        $kategori = kategori_barang::all();
        $data = ['LoggedUserInfo' => user_pengguna::where('id', '=', session('LoggedUser'))->first()];
        return view('backend.umkm.menunggu_data_diverifikasi', $data, compact('kategori'));
    }

    //Pengajuan Akun Premium UMKM
    public function umkm_pengajuan_akun_premium($id)
    {
        $kategori = kategori_barang::all();
        $datas = user_pengguna::findOrFail($id);
        $data = ['LoggedUserInfo' => user_pengguna::where('id', '=', session('LoggedUser'))->first()];
        $qrcode = QrCode::size(500)->generate($datas);
        return view('backend.umkm.bayar_pengajuan_akun_premium', $data, ['qrcode' => $qrcode, 'kategori' => $kategori]);
    }
    public function save_umkm_pengajuan_akun_premium(Request $request)
    {
        $akun_premium = pengajuan_akun_pro_umkm::where('id', '=', $request->id)->first();
        if ($akun_premium) {
            return redirect()->back()->with('fail', 'Akun anda telah di ajukan');
        } else {
            $akun_premium = new pengajuan_akun_pro_umkm();
            $akun_premium->umkm = $request->umkm;
            $akun_premium->mengajukan_tanggal = " ";
            $akun_premium->diverifikasi_tanggal = " ";
            $akun_premium->total_pembayaran = 50000;
            $akun_premium->metode_pembayaran = " ";
            $akun_premium->status_pembayaran = "Belum di Verifikasi";
            $akun_premium->pemberitahuan = "menunggu ada memverifikasikan iklan Produknya";
            $akun_premium->status_notifikasi = "belum aksi";
            if ($request->hasFile('foto_bukti')) //Cek apakah ada file avatar yang di Upload 
            {
                $request->file('foto_bukti')->move('foto_bukti/', $request->file('foto_bukti')->getClientOriginalName());
                $akun_premium->foto_bukti = $request->file('foto_bukti')->getClientOriginalName();
                $akun_premium->save();
            }
            $akun_premium->save();
            return redirect('backend_umkm_daftar_produk')->with('success', 'Anda Berhasil Mengirim bukti pembayaran, Tunggu Admin Verifikasi Produk Anda');
        }
    }
    // Pengajuan UMKM Iklankan Produk
    public function umkm_iklankan_produk($id)
    {
        $kategori = kategori_barang::all();
        $datas = verifikasi_produk::findOrFail($id);
        $data = ['LoggedUserInfo' => user_pengguna::where('id', '=', session('LoggedUser'))->first()];
        $qrcode = QrCode::size(500)->generate($datas);
        return view('backend.umkm.bayar_iklan_produk', $data, ['qrcode' => $qrcode, 'datas' => $datas, 'kategori' => $kategori]);
    }
    public function save_umkm_iklankan_produk(Request $request)
    {
        $iklankan_produk = verifikasi_produk::where('id', '=', $request->id)->first();
        if ($iklankan_produk) {
            return redirect()->back()->with('fail', 'Produk anda telah diiklankan');
        } else {
            $iklankan_produk = new iklankan_produk();
            $iklankan_produk->umkm = $request->umkm;
            $iklankan_produk->nama_produk = $request->nama_produk;
            $iklankan_produk->deskripsi = $request->deskripsi;
            $iklankan_produk->iklan_di_rentan = $request->iklan_di_rentan;
            $iklankan_produk->total_pembayaran = 50000;
            $iklankan_produk->status_pembayaran = "Belum DI Verifikasi";
            $iklankan_produk->status_notifikasi = "belum aksi";
            $iklankan_produk->pemberitahuan = "menunggu ada memverifikasikan iklan Produknya";
            if ($request->hasFile('foto_bukti')) //Cek apakah ada file avatar yang di Upload 
            {
                $request->file('foto_bukti')->move('foto_bukti/', $request->file('foto_bukti')->getClientOriginalName());
                $iklankan_produk->foto_bukti = $request->file('foto_bukti')->getClientOriginalName();
                $iklankan_produk->save();
            }
            $iklankan_produk->save();
            return redirect('menunggu_verifikasi_data');
        }
    }

    //Produk UMKM
    public function daftar_produk()
    {
        $info = user_pengguna::where('id', '=', session('LoggedUser'))->first(); //Ambil Id User yang sedang Login
        $total = 0;
        $totalnya = PesanBarang::where('umkm', $info->umkm)->get();
        foreach ($totalnya as $totals) {
            $total += $totals->kuantitas * $totals->harga_produk;
        }
        $pendapatan = $total;
        $totalProduk = verifikasi_produk::where('umkm', $info->umkm)->where('status_verifikasi', '=', 'Telah Di Verifikasi')->count();
        $totalProdukTerjual = PesanBarang::where('umkm', $info->umkm)->count();

        $akun_pro = pengajuan_akun_pro_umkm::where('umkm', $info->umkm)->first();
        $status_akun_pro = pengajuan_akun_pro_umkm::where('umkm', $info->umkm)->where('status_pembayaran', '=', 'Telah Di Verifikasi')->first();
        $kategori = kategori_barang::all();
        $daftar_produk = verifikasi_produk::get();
        $ulasan = review_produk::join(
            'verifikasi_produks',
            'review_produks.id_produk',
            '=',
            'verifikasi_produks.id'
        )->get(['verifikasi_produks.*', 'review_produks.*']);

        $cekVerifikasi = "Telah Di Verifikasi";
        $verifikasi_umkm = verifikasi_umkm::first();
        $bukti_verifikasi_pencairan = pengajuan_pencairan_umkm::where('nama_umkm', $info->umkm)->get();
        // dd($bukti_verifikasi_pencairan->status);
        $data = ['LoggedUserInfo' => user_pengguna::where('id', '=', session('LoggedUser'))->first()];
        if ($verifikasi_umkm) {
            return view('backend.umkm.daftar_produk', $data, compact(
                'akun_pro',
                'verifikasi_umkm',
                'daftar_produk',
                'kategori',
                'ulasan',
                'pendapatan',
                'totalProduk',
                'totalProdukTerjual',
                'info',
                'status_akun_pro',
                'bukti_verifikasi_pencairan'
            ));
        } else {
            return view('backend.umkm.index', $data, compact(
                'akun_pro',
                'verifikasi_umkm',
                'daftar_produk',
                'kategori',
                'ulasan',
                'pendapatan',
                'info',
                'status_akun_pro',
                'bukti_verifikasi_pencairan'
            ));
        }
    }

    public function save_produk(Request $request)
    {
        $simpan_produk = verifikasi_produk::create($request->all());

        if ($request->hasFile('foto_produk1')) //Cek apakah ada file avatar yang di Upload 
        {
            $request->file('foto_produk1')->move('foto_produk/', $request->file('foto_produk1')->getClientOriginalName());
            $simpan_produk->foto_produk1 = $request->file('foto_produk1')->getClientOriginalName();
            $simpan_produk->save();
        }
        if ($request->hasFile('foto_produk2')) //Cek apakah ada file avatar yang di Upload 
        {
            $request->file('foto_produk2')->move('foto_produk/', $request->file('foto_produk2')->getClientOriginalName());
            $simpan_produk->foto_produk2 = $request->file('foto_produk2')->getClientOriginalName();
            $simpan_produk->save();
        }
        if ($request->hasFile('foto_produk3')) //Cek apakah ada file avatar yang di Upload 
        {
            $request->file('foto_produk3')->move('foto_produk/', $request->file('foto_produk3')->getClientOriginalName());
            $simpan_produk->foto_produk3 = $request->file('foto_produk3')->getClientOriginalName();
            $simpan_produk->save();
        }
        if ($request->hasFile('foto_produk4')) //Cek apakah ada file avatar yang di Upload 
        {
            $request->file('foto_produk4')->move('foto_produk/', $request->file('foto_produk4')->getClientOriginalName());
            $simpan_produk->foto_produk4 = $request->file('foto_produk4')->getClientOriginalName();
            $simpan_produk->save();
        }
        if ($request->hasFile('foto_produk5')) //Cek apakah ada file avatar yang di Upload 
        {
            $request->file('foto_produk5')->move('foto_produk/', $request->file('foto_produk5')->getClientOriginalName());
            $simpan_produk->foto_produk5 = $request->file('foto_produk5')->getClientOriginalName();
            $simpan_produk->save();
        }
        $simpan_produk->save();
        return redirect()->back()->with('success', 'Berhasil Menambahkan Data Produk');
    }
    public function edit_umkm_daftar_produk($id)
    {
        $data = verifikasi_produk::find($id);
        $data->status_notifikasi = "belum aksi";
        $data->update();
        return response()->json([
            'data' => $data,
        ]);
    }
    public function update_produk(Request $request)
    {
        $data_id = $request->input('id');
        $update_produk = verifikasi_produk::find($data_id);
        $update_produk->nama_produk = $request->nama_produk;
        $update_produk->deskripsi_produk = $request->deskripsi_produk;
        $update_produk->total_stok = $request->total_stok;
        $update_produk->harga_produk = $request->harga_produk;
        $update_produk->ukuran = $request->ukuran;
        $update_produk->berat = $request->berat;
        $update_produk->status_notifikasi = "belum aksi";
        $update_produk->status_verifikasi = "Telah Di Verifikasi";
        $update_produk->pemberitahuan = "Produk telah di update oleh umkm";
        if ($request->hasFile('foto_produk1')) //Cek apakah ada file avatar yang di Upload 
        {
            $request->file('foto_produk1')->move('foto_produk/', $request->file('foto_produk1')->getClientOriginalName());
            $update_produk->foto_produk1 = $request->file('foto_produk1')->getClientOriginalName();
            $update_produk->save();
        }
        if ($request->hasFile('foto_produk2')) //Cek apakah ada file avatar yang di Upload 
        {
            $request->file('foto_produk2')->move('foto_produk/', $request->file('foto_produk2')->getClientOriginalName());
            $update_produk->foto_produk2 = $request->file('foto_produk2')->getClientOriginalName();
            $update_produk->save();
        }
        if ($request->hasFile('foto_produk3')) //Cek apakah ada file avatar yang di Upload 
        {
            $request->file('foto_produk3')->move('foto_produk/', $request->file('foto_produk3')->getClientOriginalName());
            $update_produk->foto_produk3 = $request->file('foto_produk3')->getClientOriginalName();
            $update_produk->save();
        }
        if ($request->hasFile('foto_produk4')) //Cek apakah ada file avatar yang di Upload 
        {
            $request->file('foto_produk4')->move('foto_produk/', $request->file('foto_produk4')->getClientOriginalName());
            $update_produk->foto_produk4 = $request->file('foto_produk4')->getClientOriginalName();
            $update_produk->save();
        }
        if ($request->hasFile('foto_produk5')) //Cek apakah ada file avatar yang di Upload 
        {
            $request->file('foto_produk5')->move('foto_produk/', $request->file('foto_produk5')->getClientOriginalName());
            $update_produk->foto_produk5 = $request->file('foto_produk5')->getClientOriginalName();
            $update_produk->save();
        }
        $update_produk->update();
        return redirect('backend_umkm_daftar_produk')->with('success', 'Berhasil Mengupdate Data Produk');
    }

    //Profile UMKM
    public function umkm_edit_profile($id)
    {
        $data = ['LoggedUserInfo' => user_pengguna::where('id', '=', session('LoggedUser'))->first()];
        return view('backend.umkm.edit_profil_umkm', $data);
    }
    public function umkm_update_profile(Request $request, $id)
    {
        $this->validate($request, [
            // 'username' => 'required|unique:user_penggunas',
            // 'umkm' => 'required|unique:user_penggunas',
        ]);

        $profil = user_pengguna::find($id);
        $profil->username = $request->username;
        $profil->email = $request->email;
        $profil->nomor_hp = $request->nomor_hp;
        $profil->umkm = $request->umkm;
        $profil->status_profil = $request->status_profil;
        $profil->update();

        if ($request->hasFile('foto')) //Cek apakah ada file avatar yang di Upload
        {
            $request->file('foto')->move('profile/', $request->file('foto')->getClientOriginalName());
            $profil->foto = $request->file('foto')->getClientOriginalName();
            $profil->save();
        }
        return redirect()->back()->with('status', 'Berhasil');
    }


    public function umkm_pengajuan_premium()
    {
        $data = ['LoggedUserInfo' => user_pengguna::where('id', '=', session('LoggedUser'))->first()];
        return view('backend.umkm.pengajuan_akun_premium', $data);
    }
    public function umkm_wallet($umkm)
    {
        $info = user_pengguna::where('id', '=', session('LoggedUser'))->first(); //Ambil Id User yang sedang Login
        $total = 0;
        $totalnya = PesanBarang::where('umkm', $info->umkm)->get();
        foreach ($totalnya as $totals) {
            $total += $totals->kuantitas * $totals->harga_produk;
        }
        $pendapatan = $total;
        // dd($pendapatan);
        $data_pencairan = pengajuan_pencairan::where('nama_umkm', $info->umkm)->get();
        $kategori = kategori_barang::all();
        // $pendapatan = verifikasi_pembelian_2::where('umkm', $umkm)->sum('total_pembayaran');
        $data = ['LoggedUserInfo' => user_pengguna::where('id', '=', session('LoggedUser'))->first()];
        return view('backend.umkm.umkm_wallet', $data, compact('kategori', 'pendapatan', 'data_pencairan'));
    }
    public function umkm_wallet_ke_2($umkm)
    {
        $info = user_pengguna::where('id', '=', session('LoggedUser'))->first(); //Ambil Id User yang sedang Login
        $total = 0;
        $totalnya = PesanBarang::where('umkm', $info->umkm)->get();
        foreach ($totalnya as $totals) {
            $total += $totals->kuantitas * $totals->harga_produk;
        }
        $pendapatan = $total;
        $kategori = kategori_barang::all();
        // $pendapatan = verifikasi_pembelian_2::where('umkm', $umkm)->sum('total_pembayaran');
        $data = ['LoggedUserInfo' => user_pengguna::where('id', '=', session('LoggedUser'))->first()];
        $waktuSekarang = Carbon::now()->toDateTimeString();
        return view('backend.umkm.umkm_wallet_ke_2', $data, compact('kategori', 'pendapatan', 'waktuSekarang'));
    }
    public function umkm_wallet_ke_3($umkm)
    {
        $kategori = kategori_barang::all();
        $pendapatan = verifikasi_pembelian_2::where('umkm', $umkm)->sum('total_pembayaran');
        $data = ['LoggedUserInfo' => user_pengguna::where('id', '=', session('LoggedUser'))->first()];
        return view('backend.umkm.umkm_wallet_ke_3', $data, compact('kategori', 'pendapatan'));
    }

    //Pengajuan Pencairan Dana UMKM
    public function umkm_save_ajukan_pencairan(Request $request)
    {
        $kategori = kategori_barang::all();
        $pencairan = pengajuan_pencairan_umkm::create($request->all());
        // $data_umkm = $request->input('nama_umkm');
        // $pencairan = new pengajuan_pencairan_umkm();

        // $pencairan->nama_umkm = $request->nama_umkm;
        // $pencairan->status = $request->status;
        // $pencairan->tanggal_pengajuan = $request->tanggal_pengajuan;
        // $pencairan->total_penjualan = $request->total_penjualan;
        // $pencairan->total_ppencairan = $request->total_ppencairan;
        // $pencairan->status = "Belum Di Verifikasi";
        // $pencarian->status_notifikasi = "belum aksi";
        // $pencarian->pemberitahuan = "UMKM Melakukan Pengajuan Pencairan Data";
        // $pencairan->save();

        $waktuSekarang = Carbon::now()->toDateTimeString();
        $data = ['LoggedUserInfo' => user_pengguna::where('id', '=', session('LoggedUser'))->first()];
        return view('backend.umkm.umkm_wallet_ke_3', $data, compact('kategori', 'waktuSekarang'));
    }

    public function pengajuan_iklan_produk()
    {
        $data = ['LoggedUserInfo' => user_pengguna::where('id', '=', session('LoggedUser'))->first()];
        return view('backend.umkm.pengajuan_iklan_produk', $data);
    }
    public function pengajuan_akun_premium()
    {
        $data = ['LoggedUserInfo' => user_pengguna::where('id', '=', session('LoggedUser'))->first()];
        return view('backend.umkm.pengajuan_akun_premium', $data);
    }

    //Syarat Pendaftaran UMKM
    public function tampung_file(Request $request)
    {
        $kategori = kategori_barang::all();
        $tampung = tampung_file::create($request->all());

        if ($request->hasFile('syarat_01')) //Cek apakah ada file avatar yang di Upload 
        {
            $request->file('syarat_01')->move('syarat_01/', $request->file('syarat_01')->getClientOriginalName());
            $tampung->syarat_01 = $request->file('syarat_01')->getClientOriginalName();
            $tampung->save();
        }
        if ($request->hasFile('syarat_02')) //Cek apakah ada file avatar yang di Upload 
        {
            $request->file('syarat_02')->move('syarat_02/', $request->file('syarat_02')->getClientOriginalName());
            $tampung->syarat_02 = $request->file('syarat_02')->getClientOriginalName();
            $tampung->save();
        }
        if ($request->hasFile('syarat_03')) //Cek apakah ada file avatar yang di Upload 
        {
            $request->file('syarat_03')->move('syarat_03/', $request->file('syarat_03')->getClientOriginalName());
            $tampung->syarat_03 = $request->file('syarat_03')->getClientOriginalName();
            $tampung->save();
        }
        if ($request->hasFile('syarat_04')) //Cek apakah ada file avatar yang di Upload 
        {
            $request->file('syarat_04')->move('syarat_04/', $request->file('syarat_04')->getClientOriginalName());
            $tampung->syarat_04 = $request->file('syarat_04')->getClientOriginalName();
            $tampung->save();
        }
        $data = ['LoggedUserInfo' => user_pengguna::where('id', '=', session('LoggedUser'))->first()];
        return redirect()->back();
    }
}
