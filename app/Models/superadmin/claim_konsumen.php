<?php

namespace App\Models\superadmin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class claim_konsumen extends Model
{
    protected $table='claim_konsumens';
    protected $guarded=[];
    protected $fillable = [
        'id','nama_produk','no_resi','total_harga','kuantitas','konsumen','alamat_pengembalian','status'
    ];
}
