<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class user_pengguna extends Model
{
    protected $table ='user_penggunas';
    protected $guarded =[];
    protected $fillable =[
      'email','username', 'password','kontak_wa', 'alamat', 'jabatan','umkm','tgl_lahir','alamat_rumah','nomor_hp','no_ktp','jenis_kelamin'
    ];
}
