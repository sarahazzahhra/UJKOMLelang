<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Petugas;

class LoginController extends Controller
{
    public function index(){
        return view('back.login_admin');
    }

    public function login_post(Request $request) 
    {
        $user = Petugas::where('username_srh', $request->username)
        ->where('password_srh', $request->password)->first();

        if ($user) {
            \Session::put('id_user', $user->id_petugas_srh);
            \Session::put('nama', $user->nama_petugas_srh);
            \Session::put('username', $user->username_srh);
            \Session::put('password', $user->password_srh);
            \Session::put('level', $user->level_srh);

            return redirect('/dashboard');
        }

        return redirect('/login');
    }

    public function logout() {
        \Session::flush();

        return redirect('/login');
    }
}
