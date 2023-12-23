<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiAdminController;
use App\Http\Controllers\resource\admin\notifikasiController;
use App\Http\Controllers\resource\admin\ManagemenUserController;
use App\Http\Controllers\resource\admin\PengajuanAkunProUmkmController;
use App\Http\Controllers\resource\admin\PengajuanIklanProdukController;
use App\Http\Controllers\resource\admin\VerifikasiPembelianController;
use App\Http\Controllers\resource\admin\VerifikasiProdukController;
use App\Http\Controllers\resource\admin\VerifikasiUmkmController;
use App\Http\Controllers\resource\superadmin\ClaimKonsumenController;
use App\Http\Controllers\resource\superadmin\LaporanJumlahProdukController;
use App\Http\Controllers\resource\superadmin\LaporanJumlahUmkmController;
use App\Http\Controllers\resource\superadmin\PengajuanPencairanController;
use App\Http\Controllers\resource\superadmin\ReviewKurirController;
use App\Http\Controllers\resource\superadmin\ReviewProductController;
use App\Http\Controllers\resource\superadmin\LaporanJumlahTransaksiController;
use App\Http\Controllers\resource\superadmin\LaporanIncomeController;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//---------------------------------------admin-------------------------------------------------------
route::get('user',[ApiAdminController::class,'user'])->name('user');
route::apiResource('notifikasi',notifikasiController::class);
route::apiResource('user_pengguna',ManagemenUserController::class);
route::apiResource('pengajuan_iklan_produk',PengajuanIklanProdukController::class);
route::apiResource('pengajuan_akun_pro_umkm',PengajuanAkunProUmkmController::class);
route::apiResource('verifikasi_pembelian',VerifikasiPembelianController::class);
route::apiResource('verifikasi_umkm',VerifikasiUmkmController::class);
//route::apiResource('verifikasi_produk',VerifikasiProdukController::class);
//route::apiResource('verifikasi_produk',ApiDaftarProdukController::class);
//---------------------------------------superadmin--------------------------------------------------
route::apiResource('claim_konsumen',ClaimKonsumenController::class);
route::apiResource('laporan_jumlah_produk',LaporanJumlahProdukController::class);
route::apiResource('laporan_jumlah_umkm',LaporanJumlahUmkmController::class);
route::apiResource('laporan_jumlah_transaksi',LaporanJumlahTransaksiController::class);
route::apiResource('pengajuan_pencairan',PengajuanPencairanController::class);
route::apiResource('review_product',ReviewProductController::class);
route::apiResource('review_kurir',ReviewProductController::class);
route::apiResource('laporan-income',LaporanIncomeController::class);
