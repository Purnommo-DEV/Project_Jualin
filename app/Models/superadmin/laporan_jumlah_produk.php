<?php

namespace App\Models\superadmin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class laporan_jumlah_produk extends Model
{
    protected $table='laporan_jumlah_produks';
    protected $guarded=[];
    protected $fillable = [
        'id','nama_produk','umkm','deskripsi','total_stok','harga_produk','status_verifikasi'
    ];
}
