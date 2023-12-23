<?php

namespace App\Models;

use App\Models\admin\verifikasi_produk;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Keranjang extends Model
{
    use HasFactory;
    protected $table = "keranjang";
    protected $guarded = [];

    public function produk()
    {
        return $this->belongsTo(verifikasi_produk::class, 'produk_id', 'id');
    }
    public function umkm()
    {
        return $this->belongsTo(user_pengguna::class, 'nama_umkm', 'umkm');
    }
}
