<?php

namespace App\Models\umkm;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tampung_file extends Model
{
    protected $table ='tampung_files';
    protected $guarded =[];
    protected $fillable =
    [
        'id','email','syarat_01','syarat_02','syarat_03','syarat_04','no_nib'
    ];
}
