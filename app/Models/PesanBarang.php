<?php

namespace App\Models;

use App\Models\admin\verifikasi_produk;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PesanBarang extends Model
{
    use HasFactory;
    protected $table = "pesan_barangs";
    protected $guarded = [];

    public function produk()
    {
        return $this->belongsTo(verifikasi_produk::class, 'produk_id', 'id');
    }
}
