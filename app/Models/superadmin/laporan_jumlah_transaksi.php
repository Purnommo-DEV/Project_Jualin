<?php

namespace App\Models\superadmin;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class laporan_jumlah_transaksi extends Model
{
    use HasFactory;
    protected $table = 'laporan_jumlah_transaksis';
    protected $guarded = [];
    protected $fillable = [
        'id', 'nama_transaksi', 'umkm', 'total_beli', 'total_pendapatan'
    ];
}
