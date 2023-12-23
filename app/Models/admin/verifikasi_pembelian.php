<?php

namespace App\Models\admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class verifikasi_pembelian extends Model
{
    protected $table='verifikasi_pembelians';
    protected $guarded =[];
    protected $fillable = [
        'id','id_produk','nama_produk','umkm','kuantitas','kurir','total','metode_pembayaran','status'
    ];
}
