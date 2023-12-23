<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\user_pengguna;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use App\Models\admin\verifikasi_umkm;

class LoginController extends Controller
{
    public function backend_login()
    {
        return view('backend.login_and_register.login');
    }

    public function backend_register()
    {
        return view('backend.login_and_register.register');
    }

    public function save(Request $request)
    {
        $request->validate([

            'username' => 'required',
            'email' => 'required|email|unique:user_penggunas',
            'jabatan' => 'required',
            'status' => 'required',
            'password' => 'required|min:5'
        ]);
        $user = new user_pengguna;
        $user->username = $request->username;
        $user->email = $request->email;
        $user->nomor_hp = $request->nomor_hp;
        $user->jabatan = $request->jabatan;
        $user->status = $request->status;
        $user->password = Hash::make($request->password);
        $user->no_ktp = $request->no_ktp;
        $user->tgl_lahir = $request->tgl_lahir;
        $user->jenis_kelamin = $request->jenis_kelamin;
        $user->alamat_rumah = $request->alamat_rumah;
        $user->status_profil = "";
        $user->foto = "";
        $user->umkm = "";
        $save = $user->save();

        $user2 = new verifikasi_umkm;

        $user2->email = $request->email;
        $user2->jabatan = $request->jabatan;
        $user2->kontak_wa = $request->nomor_hp;
        $user2->alamat = $request->alamat_rumah;
        $user2->status = 'Belum Di Verifikasi';
        $user2->save();
        if ($save) {
            return back()->with('success', 'new User has been successfully added to database');
        } else {
            return back()->with('fail', 'Something went wrong, try again later');
        }
    }

    function check(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:5'
        ]);
        $userinfo = user_pengguna::where('email', '=', $request->email)->first();

        if (!$userinfo) {
            return back()->with('fail', 'Email Belum Terdaftar');
        } else {
            if (Hash::check($request->password, $userinfo->password)) {
                $request->session()->put('LoggedUser', $userinfo->id);
                //return redirect('level');
                if ($userinfo->jabatan == 'user_pengguna') {
                    //  $data =['LoggedUserInfo' => user_pengguna::where('id','=',session('LoggedUser'))->first()];
                    return redirect('/')->with('success', 'Anda Berhasil Login');
                } elseif ($userinfo->jabatan == 'admin') {
                    //   $data =['LoggedUserInfo' => user_pengguna::where('id','=',session('LoggedUser'))->first()];
                    return redirect('backend_admin')->with('success', 'Anda Berhasil Login');
                } elseif ($userinfo->jabatan == 'superadmin') {
                    // $data =['LoggedUserInfo' => user_pengguna::where('id','=',session('LoggedUser'))->first()];
                    return redirect('/superadmin')->with('success', 'Anda Berhasil Login');
                } elseif ($userinfo->jabatan == 'umkm') {
                    if ($userinfo->status == 'belum mendaftar') {
                        return redirect('backend_umkm')->with('success', 'Anda Berhasil Logins');
                    } else {
                        return redirect('backend_umkm_daftar_produk')->with('success', 'Anda Berhasil Login');
                    }
                    $umkm = ['LoggedUserInfo' => user_pengguna::where('id', '=', session('LoggedUser'))->first()];
                } else {
                    return redirect('login')->with('fail', 'Wajib Login ');
                }
            } else {
                return redirect('login')->with('fail', 'Password Anda salah');
            }
        }
    }
    function logout()
    {
        if (session()->has('LoggedUser')) {
            session()->pull('LoggedUser');
            return redirect('login')->with('success', 'Anda Berhasil Logout');
        }
    }
    function jabatan()
    {
        $userinfo = user_pengguna::where('id', '=', session('LoggedUser'))->first();
        if ($userinfo->jabatan == 'user_pengguna') {
            //  $data =['LoggedUserInfo' => user_pengguna::where('id','=',session('LoggedUser'))->first()];
            return redirect('/')->with('success', 'Anda Berhasil Login');
        } elseif ($userinfo->jabatan == 'admin') {
            //   $data =['LoggedUserInfo' => user_pengguna::where('id','=',session('LoggedUser'))->first()];
            return redirect('backend_admin')->with('success', 'Anda Berhasil Login');
        } elseif ($userinfo->jabatan == 'superadmin') {
            // $data =['LoggedUserInfo' => user_pengguna::where('id','=',session('LoggedUser'))->first()];
            return redirect('/superadmin')->with('success', 'Anda Berhasil Login');
        } elseif ($userinfo->jabatan == 'umkm') {
            if ($userinfo->status == 'belum mendaftar') {
                return redirect('backend_umkm')->with('success', 'Anda Berhasil Logins');
            } else {
                // return redirect('backend_umkm_daftar_produk')->with('success', 'Anda Berhasil Login');
            }
            $umkm = ['LoggedUserInfo' => user_pengguna::where('id', '=', session('LoggedUser'))->first()];
        }
    }
}
