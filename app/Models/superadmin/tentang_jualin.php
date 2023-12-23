<?php

namespace App\Models\superadmin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tentang_jualin extends Model
{
    protected $table ='tentang_jualins';
    protected $fillable = [
    	'id','blog_jualin'];
}
