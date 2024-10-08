<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ProfileController extends Controller
{
    public function update(Request $request)
    {
        // Validasi data yang diterima
        $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'profession' => 'required|string|max:255',
            'bio' => 'nullable|string',
        ]);
    
        // Temukan pengguna yang sedang login
        $user = Auth::user();
    
        // Perbarui informasi pengguna
        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->email = $request->email;
        $user->profession = $request->profession; // Memperbarui kolom profession
        $user->bio = $request->bio; // Memperbarui kolom bio
        $user->save();
    
        // Redirect ke halaman home setelah berhasil menyimpan
        return redirect()->route('home')->with('success', 'Profile updated successfully!');
    }
    
}