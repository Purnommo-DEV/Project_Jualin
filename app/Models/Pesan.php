<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pesan extends Model
{
    protected $table ='pesans';
    protected $guarded =[];
    protected $fillable =[
      'nama','email', 'subjek', 'no_hp', 'pesan'
    ];
}
