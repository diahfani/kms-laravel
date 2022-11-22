<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class AuthController extends Controller
{
    public function login()
    {
        return view('login', [
            'title' => 'Login'
        ]);
    }

    public function forgotpassword()
    {
        return view('forgotpassword');
    }

    public function auth(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email:dns',
            'password' => 'required'
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            // dd('test');
            return redirect()->intended('dashboard');
        }

        return back()->with('loginError', 'Login gagal! Email atau password salah.');

        // dd('berhasil');
    }
}