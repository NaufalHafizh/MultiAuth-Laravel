<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\Console\Input\Input;

class Login extends Controller
{
    public function index()
    {
        $data = [

            'title' => 'Login'
        ];

        return view('Auth.login', $data);
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required'],
            'password' => ['required']
        ]);

        if (Auth::attempt($credentials)) {

            $request->session()->regenerate();
            return redirect()->intended('/home');

            echo "berhasil Login";
        }

        return back()->with('failed', 'User Tidak Terdaftar');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        request()->session()->invalidate();

        request()->session()->regenerateToken();

        return redirect('/');
    }
}
