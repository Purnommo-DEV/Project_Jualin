<?php

namespace App\Models\admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class notifikasi extends Model
{
    protected $table='notifikasis';
    protected $guarded =[];
    protected $fillable = ['id','jabatan','tanggal','dari','pemberitahuan','keterangan'];

}
