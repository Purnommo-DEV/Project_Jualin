<?php

namespace App\Models\superadmin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class laporan_jumlah_umkm extends Model
{
    protected $table='laporan_jumlah_umkms';
    protected $guarded=[];
    protected $fillable = [
        'id','umkm','foto_umkm','total_produk','alamat','surat_izin','pendapatan','status'
    ];
}
