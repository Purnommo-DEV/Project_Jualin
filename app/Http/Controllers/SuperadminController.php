<?php

namespace App\Http\Controllers;

use File;
use PDF;
use App\Models\PesanBarang;

use Illuminate\Http\Request;
use App\Models\user_pengguna;
use App\Models\superadmin\slider;
use Illuminate\Support\Facades\Hash;
use App\Models\admin\verifikasi_produk;
use App\Models\superadmin\review_kurir;
use Illuminate\Support\Facades\Storage;
use App\Models\superadmin\review_produk;
use RealRashid\SweetAlert\Facades\Alert;
use App\Models\superadmin\claim_konsumen;
use App\Models\superadmin\laporan_income;
use App\Models\superadmin\produkterlaris;
use App\Models\superadmin\tentang_jualin;
use App\Models\superadmin\laporan_jumlah_umkm;
use App\Models\superadmin\pengajuan_pencairan;
use App\Models\superadmin\laporan_jumlah_produk;
use App\Models\superadmin\laporan_jumlah_transaksi;
use App\Models\superadmin\pengajuan_pencairan_umkm;


class SuperadminController extends Controller
{
    public function __construct()
    {
        $this->user_pengguna = new user_pengguna();
    }
    public function superadmin()
    {
        $total_umkm = user_pengguna::where('jabatan', '=', 'umkm')->count();
        $total_produk = verifikasi_produk::where('status_verifikasi', '=', 'Telah Di Verifikasi')->count();
        $total_pembelian = PesanBarang::where('status_verifikasi', '=', 'Telah Di Verifikasi')->sum('harga_produk');
        $total_kurir = user_pengguna::where('jabatan', '=', 'kurir')->count();
        $data = ['LoggedUserInfo' => user_pengguna::where('id', '=', session('LoggedUser'))->first()];
        return view('backend.superadmin.index', $data, compact('total_umkm', 'total_produk', 'total_pembelian', 'total_kurir'));
    }
    public function superadmin_pengajuan_pencairan()
    {
        $superadmin_pengajuan_pencairan = pengajuan_pencairan::get();
        $data = ['LoggedUserInfo' => user_pengguna::where('id', '=', session('LoggedUser'))->first()];
        return view('backend.superadmin.pengajuan_pencairan', $data, ['pengajuan_pencairan' => $superadmin_pengajuan_pencairan]);
    }
    public function superadmin_review_kurir()
    {
        $superadmin_review_kurir = review_kurir::get();
        $data = ['LoggedUserInfo' => user_pengguna::where('id', '=', session('LoggedUser'))->first()];
        return view('backend.superadmin.review_kurir', $data, ['review_kurir' => $superadmin_review_kurir]);
    }
    public function superadmin_review_produk()
    {
        $superadmin_review_produk = review_produk::get();
        $data = ['LoggedUserInfo' => user_pengguna::where('id', '=', session('LoggedUser'))->first()];
        return view('backend.superadmin.review_produk', $data, ['review_produk' => $superadmin_review_produk]);
    }
    public function superadmin_claim_konsumen()
    {
        $superadmin_claim_konsumen = claim_konsumen::get();
        $data = ['LoggedUserInfo' => user_pengguna::where('id', '=', session('LoggedUser'))->first()];
        return view('backend.superadmin.claim_konsumen', $data, ['claim_konsumen' => $superadmin_claim_konsumen]);
    }
    public function superadmin_laporan_income()
    {
        $superadmin_laporan_income = laporan_income::get();
        $data = ['LoggedUserInfo' => user_pengguna::where('id', '=', session('LoggedUser'))->first()];
        return view('backend.superadmin.laporan_income', $data, ['laporan_income' => $superadmin_laporan_income]);
    }
    public function superadmin_laporan_jumlah_transaksi()
    {
        $superadmin_laporan_jumlah_transaksi = laporan_jumlah_transaksi::get();
        $data = ['LoggedUserInfo' => user_pengguna::where('id', '=', session('LoggedUser'))->first()];
        return view('backend.superadmin.laporan_jumlah_transaksi', $data, ['laporan_jumlah_transaksi' => $superadmin_laporan_jumlah_transaksi]);
    }
    public function superadmin_laporan_jumlah_umkm()
    {
        $superadmin_laporan_jumlah_umkm = laporan_jumlah_umkm::get();
        $data = ['LoggedUserInfo' => user_pengguna::where('id', '=', session('LoggedUser'))->first()];
        return view('backend.superadmin.laporan_jumlah_umkm', $data, ['laporan_jumlah_umkm' => $superadmin_laporan_jumlah_umkm]);
    }
    public function superadmin_laporan_jumlah_produk()
    {
        $superadmin_laporan_jumlah_produk = laporan_jumlah_produk::get();
        $data = ['LoggedUserInfo' => user_pengguna::where('id', '=', session('LoggedUser'))->first()];
        return view('backend.superadmin.laporan_jumlah_produk', $data, ['laporan_jumlah_produk' => $superadmin_laporan_jumlah_produk]);
    }


    public function cetak_laporan_jumlah_produk()
    {
        $laporan_jumlah_produk = laporan_jumlah_produk::all();
        $pdf = PDF::loadview('backend/superadmin/cetak/cetak_laporan_jumlah_produk', ['laporan_jumlah_produk' => $laporan_jumlah_produk,]);
        return $pdf->download('laporan-jumlah-produk-pdf');
    }
    public function cetak_laporan_jumlah_umkm()
    {
        $laporan_jumlah_umkm = laporan_jumlah_umkm::all();
        $pdf = PDF::loadview('backend/superadmin/cetak/cetak_laporan_jumlah_umkm', ['laporan_jumlah_umkm' => $laporan_jumlah_umkm],);
        return $pdf->download('laporan-jumlah-umkm');
    }
    public function cetak_laporan_jumlah_transaksi()
    {
        $laporan_jumlah_transaksi = laporan_jumlah_transaksi::all();

        $pdf = PDF::loadview('backend/superadmin/cetak/cetak_laporan_jumlah_transaksi', ['laporan_jumlah_transaksi' => $laporan_jumlah_transaksi]);
        return $pdf->download('laporan-jumlah-transaksi');
    }
    public function cetak_laporan_income()
    {
        $laporan_income = laporan_income::all();

        $pdf = PDF::loadview('backend/superadmin/cetak/cetak_laporan_income', ['laporan_income' => $laporan_income]);
        return $pdf->download('laporan-income');
    }
    public function cetak_laporan_klaim_konsumen()
    {
        $laporan_klaim_konsumen = claim_konsumen::all();

        $pdf = PDF::loadview('backend/superadmin/cetak/cetak_laporan_klaim_konsumen', ['laporan_klaim_konsumen' => $laporan_klaim_konsumen]);
        return $pdf->download('laporan-klaim-konsumen');
    }
    public function cetak_laporan_produk_terlaris()
    {
        $laporan_produk_terlaris = produkterlaris::all();

        $pdf = PDF::loadview('backend/superadmin/cetak/cetak_laporan_produk_terlaris', ['laporan_produk_terlaris' => $laporan_produk_terlaris]);
        return $pdf->download('laporan-produk-terlaris&Tidak Laris');
    }

    public function superadmin_manajemen_user()
    {
        $user_pengguna = user_pengguna::get();
        $data = ['LoggedUserInfo' => user_pengguna::where('id', '=', session('LoggedUser'))->first()];
        return view('backend.superadmin.manajemen_user', $data, ['user_pengguna' => $user_pengguna]);
    }

    public function superadmin_save_manajemen_user(Request $request)
    {
        $userinfo = user_pengguna::where('username', '=', $request->username)->first();
        if ($userinfo) {
            return redirect()->back()->with('fail', 'Username sudah digunakan coba gunakan username lain');
        } else {
            $user = new user_pengguna;
            $user->username = $request->username;
            $user->email = $request->email;
            $user->nomor_hp = $request->nomor_hp;
            $user->jabatan = $request->jabatan;
            $user->status = $request->status;
            $user->password = Hash::make($request->password);
            $save = $user->save();
            if ($save) {
                return back()->with('success', 'new User has been successfully added to database');
            } else {
                return back()->with('fail', 'Something went wrong, try again later');
            }
        }
    }
    public function update_manajemen_user(Request $request)
    {
        $data_id = $request->input('id');
        $user = user_pengguna::find($data_id);
        $user->username = $request->username;
        $user->email = $request->email;
        $user->nomor_hp = $request->nomor_hp;
        $user->jabatan = $request->jabatan;
        $user->status = $request->status;
        $user->password = Hash::make($request->password);
        $user->update();
        return redirect()->back()->with('success', 'Anda Berhasil Update data manageman user ');
    }
    public function delete_manageman_user($id)
    {
        $user_pengguna =  user_pengguna::where('id', $id);
        $user_pengguna->delete();
        return redirect()->back()->with('success', 'Anda Berhasil delete data manageman_user');
    }
    public function edit_manajemen_user($id)
    {
        $data = user_pengguna::find($id);
        return response()->json([
            'data' => $data,
        ]);
    }

    public function verifikasi_pengajuan_pencairan()
    {
        $pencairan = pengajuan_pencairan_umkm::get();
        $data = ['LoggedUserInfo' => user_pengguna::where('id', '=', session('LoggedUser'))->first()];
        return view('backend.superadmin.pengajuan_pencairan_dana', $data, ['pencairan' => $pencairan]);
    }
    public function edit_superadmin_pengajuan_pencairan_dana($id)
    {
        $data = pengajuan_pencairan_umkm::find($id);
        return response()->json([
            'data' => $data,
        ]);
    }
    public function update_superadmin_pengajuan_pencairan_dana(Request $request)
    {
        $data_id = $request->input('id');
        $pencairan = pengajuan_pencairan_umkm::find($data_id);
        $pencairan->status = $request->status;
        if ($request->hasFile('bukti_transfer_dana')) //Cek apakah ada file avatar yang di Upload 
        {
            $request->file('bukti_transfer_dana')->move('foto_bukti_pencairan/', $request->file('bukti_transfer_dana')->getClientOriginalName());
            $pencairan->bukti_transfer_dana = $request->file('bukti_transfer_dana')->getClientOriginalName();
            $pencairan->save();
        }
        $pencairan->update();
        Alert::success('Sukses', 'Data Berhasil di Ubah');
        return redirect()->back();
    }
    public function tentang_jualin(Request $request)
    {

        $tentang_jualin =  tentang_jualin::get();
        $data = ['LoggedUserInfo' => user_pengguna::where('id', '=', session('LoggedUser'))->first()];
        return view('backend.superadmin.tentang_jualin', $data, ['tentang_jualin' => $tentang_jualin]);
    }
    public function update_tentang_jualin(Request $request, $id)
    {
        $blog = $request->blog;
        $tentang_jualin = tentang_jualin::find($id);
        $tentang_jualin->blog_jualin = $request->blog;
        $tentang_jualin->update();
        return redirect()->back()->with('success', 'Anda Berhasil Ubah blog Jualins');
    }
    public function slider_superadmin()
    {
        $slider = slider::all();
        $data = ['LoggedUserInfo' => user_pengguna::where('id', '=', session('LoggedUser'))->first()];
        return view('backend.superadmin.slider', $data, ['slider' => $slider]);
    }
    public function tambah_slider_superadmin(Request $request)
    {
        $tambah_slider = new slider;
        $tambah_slider->description = $request->description;
        $gambar = $request->gambar;
        $filename05 = time() . '.' . $gambar->getClientOriginalExtension();
        $request->gambar->move('slider', $filename05);
        $tambah_slider->nama_slider = $filename05;
        $save = $tambah_slider->save();
        if ($save) {
            return  redirect()->back()->with('success', 'Anda Berhasil tambah data slider');
        } else {
            return  redirect()->back()->with('fail', 'Anda Gagal tambah data slider');
            return back();
        }
    }
    public function update_slider_superadmin(Request $request, $id)
    {
        $description = $request->description;
        $tambah_slider = slider::find($id);
        $tambah_slider->description = $description;
        $tambah_slider->update();
        if ($request->hasFile('gambar')) //Cek apakah ada file avatar yang di Upload 
        {
            $request->file('gambar')->move('slider/', $request->file('gambar')->getClientOriginalName());
            $tambah_slider->nama_slider = $request->file('gambar')->getClientOriginalName();
            $tambah_slider->save();
        }
        Alert::success('Sukses', 'Data Berhasil di Ubah');
        return redirect()->back();
    }
    public function delete_slider_superadmin($id)
    {
        $slider = slider::find($id);
        $destination = 'slider/' . $slider->nama_slider;
        if (File::exists($destination)) {
            File::delete($destination);
        }
        $slider->delete();

        return redirect()->back()->with('success', 'Anda Berhasil menghapus data slider');
    }
    public function kurir()
    {
        $user_pengguna = user_pengguna::all();
        $data = ['LoggedUserInfo' => user_pengguna::where('id', '=', session('LoggedUser'))->first()];
        return view('backend.superadmin.kurir', $data, ['user_pengguna' => $user_pengguna]);
    }
    public function tambah_kurir(Request $request)
    {
        $userinfo = user_pengguna::where('username', '=', $request->username)->first();
        if ($userinfo) {
            return redirect()->back()->with('fail', 'Username Sudah Digunakan');
        } else {
            $tambah_kurir = user_pengguna::create($request->all());
            if ($request->hasFile('foto_kurir')) //Cek apakah ada file avatar yang di Upload 
            {
                $request->file('foto_kurir')->move('foto_kurir/', $request->file('foto_kurir')->getClientOriginalName());
                $tambah_kurir->foto_kurir = $request->file('foto_kurir')->getClientOriginalName();
                $tambah_kurir->save();
            }

            return redirect()->back()->with('success', 'Anda Berhasil Input Data Kurir');
        }
    }
    public function update_kurir(Request $request, $id)
    {
        $update_kurir = user_pengguna::find($id);
        $update_kurir->update($request->all());
        $file_name = $update_kurir->foto_kurir;
        $file_path = public_path('foto_kurir/' . $file_name);

        if ($request->hasFile('foto_kurir')) //Cek apakah ada file avatar yang di Upload 
        {
            unlink($file_path);
            $request->file('foto_kurir')->move('foto_kurir/', $request->file('foto_kurir')->getClientOriginalName());
            $update_kurir->nama_slider = $request->file('foto_kurir')->getClientOriginalName();
            $update_kurir->save();
        }

        return redirect()->back()->with('success', 'Anda Berhasil Update Data Kurir');
    }
    public function delete_kurir($id)
    {
        $delete_kurir = user_pengguna::find($id);

        $destination = 'foto_kurir/' . $delete_kurir->foto_kurir;
        if (File::exists($destination)) {
            File::delete($destination);
        }
        $delete_kurir->delete();
        return redirect()->back()->with('success', 'Anda Berhasil Delete Data Kurir');
    }
}
