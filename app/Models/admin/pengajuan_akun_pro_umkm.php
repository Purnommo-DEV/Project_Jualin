<?php

namespace App\Models\admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pengajuan_akun_pro_umkm extends Model
{
    protected $table = 'pengajuan_akun_pro_umkms';
    protected $guarded =[];
    protected $fillable = [
        'id','umkm','mengajukan_tanggal','diverifikasi_tanggal','total_pembayaran','metode_pembayaran','status_pembayaran','foto_bukti'
    ];
}
