<?php

namespace App\Models\admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kategori_barang extends Model
{

    protected $table ='kategori_barangs';
    protected $guarded=[];
    protected $fillable = [
    		'id','nama_kategori','gambar'
    ];
}
