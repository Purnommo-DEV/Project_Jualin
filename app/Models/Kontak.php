<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kontak extends Model
{
    protected $table ='kontaks';
    protected $guarded =[];
    protected $fillable =[
      'sebagai','nama', 'email', 'no_hp', 'alamat', 'foto'
    ];
}
