<?php

namespace App\Models\superadmin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pengajuan_pencairan extends Model
{
    protected $table='pengajuan_pencairans';
    protected $guarded=[];
    protected $fillable =
        [
            'id','nama_umkm','tanggal_penjualan','total_pencairan','status_pencairan'
        ];
}
