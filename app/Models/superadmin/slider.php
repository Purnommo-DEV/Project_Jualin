<?php

namespace App\Models\superadmin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class slider extends Model
{
    protected $table = "sliders";
    protected $fillable = [
    	'id','nama_slider','description'
    ];
}
