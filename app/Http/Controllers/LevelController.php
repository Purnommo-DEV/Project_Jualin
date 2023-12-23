<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\user_pengguna;

class LevelController extends Controller
{
    public function level(){
        $data = ['LoggedUserInfo' => user_pengguna::where('id', '=', session('LoggedUser'))->first()];
        return view('level',$data);
    }

}
