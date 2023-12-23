<?php

namespace App\Models\superadmin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class produkterlaris extends Model
{
     protected $table='produkterlaris';
    protected $guarded=[];
    protected $fillable = [
       'laba_kotor','laba_operasi','laba_sebelum_pojok','laba_operasi','laba_operasi_berjalan','laba_bersih'
   ];
}
