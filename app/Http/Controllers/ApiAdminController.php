<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\user_pengguna;
class ApiAdminController extends Controller
{
    public function user(){
        $user = user_pengguna::all();
        return response()->json($user);
    }
}
