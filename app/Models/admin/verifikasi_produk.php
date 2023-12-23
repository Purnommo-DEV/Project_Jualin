<?php

namespace App\Models\admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class verifikasi_produk extends Model
{
    protected $table ='verifikasi_produks';
    protected $guarded=[];
    protected $fillable = ['umkm','nama_produk','kategori',
    'deskripsi_produk','total_stok','harga_produk','ukuran','berat',
    'status_verifikasi','status_notifikasi','pemberitahuan',
    'foto_produk1','foto_produk2','foto_produk3','foto_produk4',
    'foto_produk5'];
}
