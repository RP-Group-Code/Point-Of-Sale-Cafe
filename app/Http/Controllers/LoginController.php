<?php

namespace App\Http\Controllers;

use App\Models\Akun;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    public function index()
    {
        return view('login.index', [
            'title' => 'Login',
            'active' => 'login'
        ]);
    }

    public function logins(Request $request)
    {

        $username = $request->username;
        $pass = $request->password;

        $user = Akun::where(['username' => $username, 'password' => $pass])->get();
   
        $tbuser = Akun::where('username', $username)->get('password')->first();

        if (count($user) > 0) {
            Session::put("user", $user);
            return redirect()->route("dashboard");
        } else {
            return back()->with('loginEror', true);
            // return back()->with('loginEror', true);
        }
    }

    public function logout()
    {
        Session::flush();
        return redirect('/login');
    }
    public function register()
    {
        $user ['users'] = Akun::all();
        return view('login.register', $user);
    }
    public function createregister(Request $request)
    {
        $user = new Akun();
        $user->username = $request->username;
        $user->password = $request->password;
        $user->nama = $request->nama;
        $user->jabatan = $request->jabatan;
        $user->save();
        return redirect()->route("login");
    }
}
