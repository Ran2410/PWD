<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        // Validasi input form
        $validated = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Cek kredensial pengguna
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            // Redirect ke halaman home setelah berhasil login
            return redirect()->intended('/home')->with('success', 'Selamat datang kembali!');
        }

        // Redirect kembali dengan error jika login gagal
        return redirect()->back()->withErrors(['email' => 'Email atau password tidak valid.'])->withInput();
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/login')->with('success', 'Anda telah berhasil logout.');
    }
}
