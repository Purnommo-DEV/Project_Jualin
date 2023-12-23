<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UmkmController;
use App\Http\Controllers\UmumController;
use App\Http\Controllers\ViewController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LevelController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CheckOutController;
use App\Http\Controllers\KeranjangController;
use App\Http\Controllers\SuperadminController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [ViewController::class, 'beranda'])->name('/');
/*---------------------------------------------------------frontend------------------------------------------------------*/
//Route::get('/login',[ViewController::class,'login'])->name('login');
//Route::get('/register',[ViewController::class,'register'])->name('register');
//Route::get('/admin',[ViewController::class, 'admin'])->name('admin');
Route::get('/pencarian', [ViewController::class, 'pencarian_produk'])->name('/pencarian');
Route::get('detail_produk/{id}', [ViewController::class, 'detail_produk'])->name('detail_produk');
Route::get('/keranjang', [KeranjangController::class, 'data_keranjang'])->name('keranjang');
Route::get('promo', [ViewController::class, 'promo'])->name('promo');

Route::get('/checkout', [ViewController::class, 'checkout'])->name('checkout');
Route::get('/halaman_pembayaran', [ViewController::class, 'halaman_pembayaran'])->name('halaman_pembayaran');
//Route::get('/umum',[ViewController::class,'umum'])->name('umum');
//Route::get('/lacak_barang',[ViewController::class,'lacak_barang'])->name('lacak_barang');
Route::get('/aju_pengembalian', [ViewController::class, 'aju_pengembalian'])->name('aju_pengembalian');
Route::get('/review_produk', [ViewController::class, 'review_produk'])->name('review_produk');
Route::get('/umkm', [ViewController::class, 'umkm'])->name('umkm');
//Route::get('/bayar_pendaftaran',[ViewController::class,'bayar_pendaftaran'])->name('bayar_pendaftaran');
//Route::get('/pending_verifikasi',[ViewController::class,'pending_verifikasi'])->name('pending_verifikasi');
//Route::get('/daftar_produk',[ViewController::class,'daftar_produk'])->name('daftar_produk');
//Route::get('/umkm_wallet',[ViewController::class,'umkm_wallet'])->name('umkm_wallet');
//Route::get('/umkm_wallet_lanjutan',[ViewController::class,'umkm_wallet_lanjutan'])->name('umkm_wallet_lanjutan');
//Route::get('/umkm_verifikasi',[ViewController::class,'umkm_verifikasi'])->name('umkm_verifikasi');
//Route::get('/pengajuan_akun_premium',[ViewController::class,'pengajuan_akun_premium'])->name('pengajuan_akun_premium');
//Route::get('/pengajuan_iklan_produk',[ViewController::class,'pengajuan_iklan_produk'])->name('pengajuan_iklan_produk');
Route::get('/kontak', [ViewController::class, 'tampilKontak'])->name('kontak');
Route::get('/tentang', [ViewController::class, 'tentang'])->name('tentang');
Route::post('pesan', [ViewController::class, 'tambah_umum_pesan'])->name('pesan');
Route::get('kategori_produk/{kategori}', [ViewController::class, 'kategori_produk'])->name('kategori_produk');



/*-------------------------------------------------------------------admin-------------------------------------------------*/
//Route::get('/admin_verifikasi_produk_umkm',[ViewController::class,'admin_verifikasi_produk_umkm'])->name('admin_verifikasi_produk_umkm');
//Route::get('/admin_verifikasi_pembelian',[ViewController::class,'admin_verifikasi_pembelian'])->name('admin_verifikasi_pembelian');
//Route::get('/admin_pengajuan_pro_umkm',[ViewController::class,'admin_pengajuan_pro_umkm'])->name('admin_pengajuan_pro_umkm');
//Route::get('/admin_pengajuan_iklan_produk',[ViewController::class,'admin_pengajuan_iklan_produk'])->name('admin_pengajuan_iklan_produk');
//Route::get('/admin_managemen_user',[ViewController::class,'admin_manajemen_user'])->name('admin_managemen_user');
//Route::get('/admin_notifikasi',[ViewController::class,'admin_notifikasi'])->name('admin_notifikasi');
/*------------------------------------------------------------Superadmin---------------------------------------------------*/
//Route::get('/superadmin',[ViewController::class,'superadmin'])->name('superadmin');
//Route::get('/superadmin_laporan_jumlah_produk',[ViewCOntroller::class,'superadmin_laporan_jumlah_produk'])->name('superadmin_laporan_jumlah_produk');
//Route::get('/superadmin_laporan_jumlah_umkm',[ViewController::class,'superadmin_laporan_jumlah_umkm'])->name('superadmin_laporan_jumlah_umkm');
//Route::get('/superadmin_laporan_income',[ViewController::class,'superadmin_laporan_income'])->name('superadmin_laporan_income');
//Route::get('/superadmin_claim_konsumen',[ViewController::class,'superadmin_claim_konsumen'])->name('superadmin_claim_konsumen');
//Route::get('/superadmin_produk_terlaris',[ViewController::class,'superadmin_produk_Terlaris'])->name('superadmin_produk_terlaris');
//Route::get('/superadmin_laporan_jumlah_tansaksi',[ViewController::class,'superadmin_laporan_jumlah_transaksi'])->name('superadmin_laporan_jumlah_transaksi');
//Route::get('/superadmin_review_produk',[ViewController::class,'superadmin_review_produk'])->name('superadmin_review_produk');
//Route::get('/superadmin_review_kurir',[ViewController::class,'superadmin_review_kurir'])->name('superadmin_review_kurir');
//Route::get('/superadmin_pengajuan_pencairan',[ViewController::class,'superadmin_pengajuan_pencairan'])->name('superadmin_pengajuan_pencairan');
/*-------------------------------------------------------------Superadmin-------------------------------------------------------*/
/*---------------------------------------------------------frontend------------------------------------------------------*/

/*------------------- --------------------------------------Backend------------------------------------------------------*/
Route::post('backend_save', [LoginController::class, 'save'])->name('save_user');
Route::post('backend_check', [LoginController::class, 'check'])->name('check');
Route::post('logout', [LoginController::class, 'logout'])->name('logout');
route::get('backend_login', [LoginController::class, 'backend_login'])->name('login');
route::get('/register', [LoginController::class, 'backend_register'])->name('register');
route::get('jabatan', [LoginController::class, 'jabatan'])->name('jabatan');

/*----------------------------------------------------------------backend admin---------------------------------------------------*/
Route::group(['middleware' => ['Authcheck']], function () {
    route::get('backend_login', [LoginController::class, 'backend_login'])->name('backend_login');
    route::get('backend_register', [LoginController::class, 'backend_register'])->name('backend_register');
    Route::get('admin/detail/verifikasi_produk/{id}', [AdminController::class, 'detail_verifikasi_produk'])->name('detail_verifikasi_produk');
    Route::get('backend_admin', [AdminController::class, 'admin_dashboard'])->name('admin_dashboard');

    Route::get('backend_admin_metode_pembayaran', [AdminController::class, 'admin_metode_pembayaran'])->name('backend_admin_metode_pembayaran');
    Route::post('backend_admin_save_metode_pembayaran', [AdminController::class, 'admin_save_metode_pembayaran'])->name('backend_admin_save_metode_pembayaran');
    Route::get('edit_backend_admin_metode_pembayaran/{id}', [AdminController::class, 'edit_admin_metode_pembayaran'])->name('edit_backend_admin_metode_pembayaran');
    Route::get('hapus_backend_admin_metode_pembayaran/{id}', [AdminController::class, 'hapus_admin_metode_pembayaran'])->name('hapus_backend_admin_metode_pembayaran');
    Route::put('update_backend_admin_metode_pembayaran', [AdminController::class, 'update_admin_metode_pembayaran'])->name('update_backend_admin_metode_pembayaran');

    Route::get('backend_admin_manajemen_kategori_produk', [AdminController::class, 'admin_manajemen_kategori_produk'])->name('backend_admin_manajemen_kategori_produk');
    Route::post('backend_admin_save_manajemen_kategori_produk', [AdminController::class, 'save_manajemen_kategori_produk'])->name('backend_admin_save_manajemen_kategori_produk');
    Route::get('edit_backend_admin_manajemen_kategori_produk/{id}', [AdminController::class, 'edit_admin_manajemen_kategori_produk'])->name('edit_backend_admin_manajemen_kategori_produk');
    Route::get('hapus_backend_admin_manajemen_kategori_produk/{id}', [AdminController::class, 'hapus_admin_manajemen_kategori_produk'])->name('hapus_backend_admin_manajemen_kategori_produk');
    Route::put('update_backend_admin_manajemen_kategori_produk', [AdminController::class, 'update_admin_manajemen_kategori_produk'])->name('update_backend_admin_manajemen_kategori_produk');
    Route::get('backend_admin_notifikasi', [AdminController::class, 'admin_notifikasi'])->name('backend_admin_notifikasi');
    Route::get('backend_admin_managemen_user', [AdminController::class, 'admin_managemen_user'])->name('backend_admin_managemen_user');
    Route::get('backend_admin_pengajuan_iklan_produk', [AdminController::class, 'admin_pengajuan_iklan_produk'])->name('backend_admin_pengajuan_iklan_produk');
    Route::get('backend_admin_pengajuan_pro_umkm', [AdminController::class, 'admin_pengajuan_akun_pro_umkm'])->name('backend_admin_pengajuan_pro_umkm');
    Route::get('backend_admin_verifikasi_pembelian', [AdminController::class, 'admin_verifikasi_pembelian'])->name('backend_admin_verifikasi_pembelian');
    Route::get('backend_admin_verifikasi_produk', [AdminController::class, 'admin_verifikasi_produk'])->name('backend_admin_verifikasi_produk');
    Route::get('backend_verifikasi_umkm', [AdminController::class, 'admin_verifikasi_data_umkm'])->name('backend_verifikasi_umkm');
    Route::get('backend_admin_verifikasi_umkm', [AdminController::class, 'admin_verifikasi_data_umkm'])->name('backend_admin_verifikasi_umkm');
    Route::get('edit_backend_admin_verifikasi_umkm/{id}', [AdminController::class, 'edit_admin_verifikasi_data_umkm'])->name('edit_backend_admin_verifikasi_umkm');
    Route::post('admin/update__umkm/{id}', [AdminController::class, 'update_admin_verifikasi_data_umkm'])->name('update_verifikasi_umkm');
    Route::get('edit_backend_admin_verifikasi_produk/{id}', [AdminController::class, 'edit_admin_verifikasi_data_produk'])->name('edit_backend_admin_verifikasi_produk');
    Route::put('update_backend_admin_verifikasi_produk', [AdminController::class, 'update_admin_verifikasi_data_produk'])->name('update_verifikasi_produk');
    Route::get('edit_backend_pengajuan_akun_premium/{id}', [AdminController::class, 'edit_umkm_pengajuan_akun_premium'])->name('edit_backend_pengajuan_akun_premium');
    Route::put('update_backend_admin_pengajuan_akun_premium', [AdminController::class, 'update_umkm_pengajuan_akun_premium'])->name('update_pengajuan_akun_premium');
    Route::get('edit_backend_admin_iklan_produk/{id}', [AdminController::class, 'edit_umkm_pengajuan_iklan_produk'])->name('edit_backend_admin_iklan_produk');
    Route::put('update_backend_admin_iklan_produk', [AdminController::class, 'update_umkm_pengajuan_iklan_produk'])->name('update_backend_admin_iklan_produk');

    Route::get('admin_kategori_barang', [AdminController::class, 'kategori_barang'])->name('kategori_barang');
    route::post('admin_kategori_barang_tambah', [AdminController::class, 'kategori_barang_tambah'])->name('kategori_barang_tambah');
    route::post('admin_kategori_barang_update/{id}', [AdminController::class, 'kategori_barang_update'])->name('kategori_barang_update');
    route::post('admin_kategori_barang_delete/{id}', [AdminController::class, 'kategori_barang_delete'])->name('kategori_barang_delete');
    Route::get('admin_not_found_404', [AdminController::class, 'not_found_404'])->name('not_found');
    Route::get('notifikasi_data', [AdminController::class, 'notifikasi_data'])->name('notifikasi_data');
    Route::post('admin/update__produk/{id}', [AdminController::class, 'update_verifikasi_produk_admin'])->name('update_verifikasi_produk_umkm');
    Route::post('admin/update__pembelian/{id}', [AdminController::class, 'update_verifikasi_pembelian'])->name('update_verifikasi_pembelian');
    Route::get('admin/verifikasi_produk_data', [AdminController::class, 'verifikasi_produk_data'])->name('verifikasi_data_produk');
    Route::get('admin/verifikasi_iklan_produk', [AdminController::class, 'verifikasi_iklan_produk'])->name('verifikasi_iklan_produk');
    Route::get('admin/verifikasi_premium', [AdminController::class, 'verifikasi_premium'])->name('verifikasi_premium');
    Route::get('admin/detail/verifikasi_produk/{id}', [AdminController::class, 'detail_verifikasi_produk'])->name('detail_verifikasi_produk');
    Route::get('admin/detail/verifikasi_umkm', [AdminController::class, 'detail_verifikasi_iklan_premium']);
    Route::get('admin/detail/verifikasi_pembelian', [AdminController::class, 'detail_verifikasi_pembelian']);
    Route::get('detail_verifikasi_umkm', [AdminController::class, 'detail_verifikasi_umkm'])->name('detail_verifikasi_umkm');
    Route::get('admin/detail/pengajuan_iklan_produk/{nama_produk}', [AdminController::class, 'detail_pengajuan_iklan_produk'])->name('detail_pengajuan_iklan_produk');
    Route::get('admin/detail/pengajuan_premium', [AdminController::class, 'detail_pengajuan_premium'])->name('detail_pengajuan_premium');
    Route::get('admin/detail/profile_umkm/{umkm}', [AdminController::class, 'detail_profile_umkm'])->name('detail_profile_umkm');
    Route::get('edit_backend_admin_verifikasi_pembelian/{id}', [AdminController::class, 'edit_admin_verifikasi_pembelian'])->name('edit_backend_admin_verifikasi_pembelian');
    Route::put('update_backend_admin_verifikasi_pembelian', [AdminController::class, 'update_admin_verifikasi_pembelian'])->name('update_backend_admin_verifikasi_pembelian');
});
/*---------------------------------------------------------------------------backend superadmin--------------------------------------------------------------------------------*/
Route::group(['middleware' => ['Authcheck']], function () {
    route::get('/login', [LoginController::class, 'backend_login'])->name('login');
    route::get('/register', [LoginController::class, 'backend_register'])->name('register');
    route::get('/superadmin', [SuperadminController::class, 'superadmin'])->name('superadmin');
    route::get('/superadmin/claim/konsumen', [SuperadminController::class, 'superadmin_claim_konsumen'])->name('superadmin_claim_konsumen');
    route::get('/superadmin/laporan_income', [SuperadminController::class, 'superadmin_laporan_income'])->name('superadmin_laporan_income');
    route::get('superadmin/laporan_jumlah_produk', [SuperadminController::class, 'superadmin_laporan_jumlah_produk'])->name('superadmin_laporan_jumlah_produk');
    route::get('/superadmin/laporan_jumlah_transaksi', [SuperadminController::class, 'superadmin_laporan_jumlah_transaksi'])->name('superadmin_laporan_jumlah_transaksi');
    route::get('/superadmin/laporan_jumlah_umkm', [SuperadminController::class, 'superadmin_laporan_jumlah_umkm'])->name('superadmin_laporan_jumlah_umkm');
    route::get('/superadmin/pengajuan_pencairan', [SuperadminController::class, 'superadmin_pengajuan_pencairan'])->name('superadmin_pengajuan_pencairan');
    route::get('superadmin/review_kurir', [SuperadminController::class, 'superadmin_review_kurir'])->name('superadmin_review_kurir');
    route::get('/superadmin/review_produk', [SuperadminController::class, 'superadmin_review_produk'])->name('superadmin_review_produk');
    route::get('superadmin/manajemen_user', [SuperadminController::class, 'superadmin_manajemen_user'])->name('superadmin_manajemen_user');
    route::post('superadmin/save_manajemen_user', [SuperadminController::class, 'superadmin_save_manajemen_user'])->name('superadmin_save_manajemen_user');
    route::get('edit_superadmin_manajemen_user/{id}', [SuperadminController::class, 'edit_manajemen_user'])->name('edit_superadmin_manajemen_user');
    route::put('superadmin/update_superadmin_manajemen_user', [SuperadminController::class, 'update_manajemen_user'])->name('update_superadmin_manajemen_user');
    route::post('superadmin/delete_superadmin_manageman_user/{id}', [SuperadminController::class, 'delete_manageman_user'])->name('delete_manageman_user');
    Route::get('superadmin/pengajuan_pencairan_dana', [SuperadminController::class, 'verifikasi_pengajuan_pencairan'])->name('Data Pengajuan Pencairan Dana');
    Route::get('edit_backend_superadmin_pengajuan_pencairan_dana/{id}', [SuperadminController::class, 'edit_superadmin_pengajuan_pencairan_dana'])->name('edit_backend_superadmin_pengajuan_pencairan_dana');
    Route::put('update_backend_superadmin_pengajuan_pencairan_dana', [SuperadminController::class, 'update_superadmin_pengajuan_pencairan_dana'])->name('Update Status Pencairan Dana');
    Route::get('superadmin/tentang_jualin', [SuperadminController::class, 'tentang_jualin'])->name('tentang_jualin');
    Route::post('update_tentang_jualin_superadmin/{id}', [SuperadminController::class, 'update_tentang_jualin'])->name('update_tentang_jualin');
    Route::get('slider_superadmin', [SuperadminController::class, 'slider_superadmin'])->name('slider_superadmin');
    Route::post('tambah_slider_superadmin', [SuperadminController::class, 'tambah_slider_superadmin'])->name('tambah_slider_superadmin');
    Route::post('update_slider_superadmin/{id}', [SuperadminController::class, 'update_slider_superadmin'])->name('update_slider_superadmin');
    Route::post('delete_slider_superadmin/{id}', [SuperadminController::class, 'delete_slider_superadmin'])->name('delete_slider_superadmin');
    route::get('superadmin/kurir', [SuperadminController::class, 'kurir'])->name('kurir');
    route::post('superadmin/tambah_kurir', [SuperadminController::class, 'tambah_kurir'])->name('tambah_kurir');
    route::post('superadmin/update_kurir', [SuperadminController::class, 'update_kurir'])->name('update_kurir');
    route::post('superadmin/delete_kurir', [SuperadminController::class, 'delete_kurir'])->name('delete_kurir');
    route::get('superadmin/cetak/cetak_laporan_jumlah_produk', [SuperadminController::class, 'cetak_laporan_jumlah_produk'])->name('superadmin_cetak_cetak_laporan_jumlah_produk');
    route::get('superadmin/cetak/cetak_laporan_jumlah_umkm', [SuperadminController::class, 'cetak_laporan_jumlah_umkm'])->name('superadmin_cetak_cetak_laporan_jumlah_umkm');
    route::get('superadmin/cetak/cetak_laporan_jumlah_transaksi', [SuperadminController::class, 'cetak_laporan_jumlah_transaksi'])->name('superadmin_cetak_cetak_laporan_jumlah_transaksi');
    route::get('superadmin/cetak/cetak_laporan_income', [SuperadminController::class, 'cetak_laporan_income'])->name('superadmin_cetak_cetak_laporan_income');
    route::get('superadmin/cetak/cetak_laporan_klaim_konsumen', [SuperadminController::class, 'cetak_laporan_klaim_konsumen'])->name('superadmin_cetak_cetak_laporan_klaim_konsumen');
    route::get('superadmin/cetak/cetak_laporanproduk_terlaris', [SuperadminController::class, 'cetak_laporan_produk_terlaris'])->name('superadmin_cetak_cetak_laporan_produk_terlaris');
});
/*---------------------------------------------------------Backend umkm------------------------------------------------------*/
Route::group(['middleware' => ['Authcheck']], function () {
    route::get('backend_login', [LoginController::class, 'backend_login'])->name('backend_login');
    route::get('backend_register', [LoginController::class, 'backend_register'])->name('backend_register');
    route::get('backend_umkm', [UmkmController::class, 'index'])->name('backend_umkm');
    route::get('menunggu_verifikasi_data', [UmkmController::class, 'menunggu_verfikiasi'])->name('menunggu_verifikasi_data');
    route::get('backend_umkm_bayar_pendaftaran', [UmkmController::class, 'bayar_pendaftaran'])->name('umkm_daftar_pembayaran');
    route::get('backend_umkm_bayar_pendaftaran_ke_2/{id}', [UmkmController::class, 'bayar_pendaftaran_ke_2'])->name('umkm_daftar_pembayaran_ke_2');
    route::post('backend_save_pembayaran', [UmkmController::class, 'save_pembayaran'])->name('backend_save_pembayaran');
    route::get('backend_umkm_daftar_produk', [UmkmController::class, 'daftar_produk'])->name('daftar_produk');
    route::post('backend_save_produk', [UmkmController::class, 'save_produk'])->name('backend_save_produk');
    route::get('edit_backend_umkm_produk/{id}', [UmkmController::class, 'edit_umkm_daftar_produk'])->name('edit_backend_umkm_produk');
    route::put('backend_umkm_update_produk', [UmkmController::class, 'update_produk'])->name('backend_update_produk');
    route::get('backend_umkm_umkm_wallet/{umkm}', [UmkmController::class, 'umkm_wallet'])->name('umkm_wallet');
    route::get('backend_umkm_umkm_wallet_ke_2/{umkm}', [UmkmController::class, 'umkm_wallet_ke_2'])->name('umkm_wallet_ke_2');
    route::post('backend_umkm_save_pengajuan_pencairan', [UmkmController::class, 'umkm_save_ajukan_pencairan'])->name('umkm_ajukan_pencaian');
    route::get('backend_umkm_umkm_wallet_ke_3', [UmkmController::class, 'umkm_wallet_ke_3'])->name('umkm_wallet_ke_3');
    route::get('backend_umkm_bayar_pengajuan_iklan_produk', [UmkmController::class, 'pengajuan_iklan_produk'])->name('pengajuan_iklan_produk');
    route::get('backend_umkm_bayar_pendaftaran_pengajuan_akun_premium', [UmkmController::class, 'pengajuan_akun_premium'])->name('pengajuan_akun_premium');
    route::post('backend_tampung_file', [UmkmController::class, 'tampung_file'])->name('tampung_file');
    route::get('backend_umkm_pengajuan_premium', [UmkmController::class, 'umkm_pengajuan_premium'])->name('backend_umkm_pengajuan_premium');
    route::get('backend_umkm_edit_profile/{id}', [UmkmController::class, 'umkm_edit_profile'])->name('backend_umkm_edit_profile');
    route::post('backend_umkm_update_profile/{id}', [UmkmController::class, 'umkm_update_profile'])->name('backend_umkm_update_profile');
    route::get('backend_bayar_iklan_produk/{id}', [UmkmController::class, 'umkm_iklankan_produk'])->name('backend_bayar_iklan_produk');
    route::post('backend_save_umkm_iklankan_produk', [UmkmController::class, 'save_umkm_iklankan_produk'])->name('backend_save_umkm_iklankan_produk');
    route::get('backend_bayar_pengajuan_akun_premium/{id}', [UmkmController::class, 'umkm_pengajuan_akun_premium'])->name('backend_bayar_pengajuan_akun_premium');
    route::post('backend_save_pengajuan_akun_premium', [UmkmController::class, 'save_umkm_pengajuan_akun_premium'])->name('backend_save_pengajuan_akun_premium');
});
/*---------------------------------------------------------Backend umkm------------------------------------------------------*/
/*----------------------------------------------------------umum-----------------------------------------------------*/
// route::get('umum_beranda',[UmumController::class,'umum_beranda'])->name('umum_beranda');
// route::get('umum_detail_produk',[UmumController::class,'umum_detail_produk'])->name('umum_detail_produk');
// route::get('umum_halaman_pembayaran',[UmumController::class,'umum_halaman_pembayaran'])->name('umum_halaman_pembayaran');
// route::get('umum_keranjang',[UmumController::class,'umum_keranjang'])->name('umum_keranjang');
// route::get('umum_pencarian_kategori',[UmumController::class,'umum_pencarian_kategori'])->name('umum_pencarian_kategori');
// route::post('umum_increment_kuantitas/{id}', [ViewController::class, 'increment_kuantitas'])->name('umum_increment_kuantitas');
// route::post('umum_save_produk_ke_keranjang', [ViewController::class, 'umum_save_ke_keranjang'])->name('produk_save_ke_keranjang');
// route::get('umum_check_out_lanjutan', [UmumController::class, 'umum_check_out_lanjutan'])->name('umum_check_out_lanjutan');
Route::post('/umum_update_kuantitas_produk', [KeranjangController::class, 'update_kuantitas_produk'])->name('umum_update_kuantitas_produk');
Route::post('/umum_hapus_produk_dalam_keranjang', [KeranjangController::class, 'hapus_produk_dalam_keranjang'])->name('umum_hapus_produk_dalam_keranjang');
route::post('/umum_save_produk_ke_keranjang', [KeranjangController::class, 'umum_save_ke_keranjang'])->name('produk_save_ke_keranjang');
route::get('umum_check_out', [CheckOutController::class, 'checkout'])->name('umum_check_out');
route::post('check_out', [CheckOutController::class, 'pemesan'])->name('check_out');

/*----------------------------------------------------------profile-----------------------------------------------------*/
Route::group(['middleware' => ['Authcheck']], function () {
    route::get('umum_profile', [ProfileController::class, 'index'])->name('umum_profile');
    route::get('edit_umum_profile/{id}', [ProfileController::class, 'edit_umum_profile'])->name('edit_umum_profile');
    route::post('update_umum_profile/{id}', [ProfileController::class, 'update_umum_profile'])->name('update_umum_profile');

    route::get('edit_umum_foto_profile/{id}', [ProfileController::class, 'edit_umum_foto_profile'])->name('edit_umum_foro_profile');
    route::post('update_umum_foto_profile/{id}', [ProfileController::class, 'update_umum_foto_profile'])->name('update_umum_foto_profile');

    route::get('umum_profile_saya', [ProfileController::class, 'umum_profile_saya'])->name('umum_profile_saya');
    route::get('umum_status_pengiriman', [ProfileController::class, 'umum_status_pengiriman'])->name('umum_status_pengiriman');
    route::get('umum_lacak_pengiriman', [ProfileController::class, 'umum_lacak_pengiriman'])->name('umum_lacak_pengiriman');
    route::get('umum_histori_transaksi', [ProfileController::class, 'umum_histori_transaksi'])->name('umum_histori_transaksi');
    route::get('umum_return_barang', [ProfileController::class, 'return_barang'])->name('umum_return_barang');
    route::get('umum_return_barang_lanjut', [ProfileController::class, 'return_barang_lanjut'])->name('umum_return_barang_lanjut');
    route::get('umum_review_produk_driver/{id_produk}', [ProfileController::class, 'review_produk_driver'])->name('umum_review_produk_driver');
    route::post('tambah_umum_review_produk_driver', [ProfileController::class, 'tambah_review_produk_driver'])->name('tambah_review_produk_driver');
    route::get('umum_lacak_barang', [ProfileController::class, 'lacak_barang'])->name('lacak_barang');
    Route::get('view_checkout_barang/{id}', [ProfileController::class, 'show_produk_checkout'])->name('view_checkout_barang');
});
/*----------------------------------------------------------profile-----------------------------------------------------*/

/*----------------------------------------------------------umum-----------------------------------------------------*/

Route::group(['middleware' => ['Authcheck']], function () {
    route::get('/login', [LoginController::class, 'backend_login'])->name('login');
    route::get('/register', [LoginController::class, 'backend_register'])->name('register');
    route::get('level', [LevelController::class, 'level'])->name('level');
});

/*---------------------------------------------------------Backend------------------------------------------------------*/
