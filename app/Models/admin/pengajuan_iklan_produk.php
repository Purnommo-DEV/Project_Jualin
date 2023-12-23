<?php

namespace App\Models\admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pengajuan_iklan_produk extends Model
{
    protected $table ='pengajuan_iklan_produks';
    protected $guarded =[];
    protected $fillable = [
        'id','umkm','nama_produk','deskripsi','iklan_di_rentan','total_ppembayaran','status_pembayaran'
    ];
}
