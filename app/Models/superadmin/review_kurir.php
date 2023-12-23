<?php

namespace App\Models\superadmin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class review_kurir extends Model
{
    protected $table='review_kurirs';
    protected $guarded=[];
    protected $fillable = [
        'id','nama_kurir','penjual','nama_barang','pembeli','plat_motor','rating','review_dari_pembeli'
    ];
}
