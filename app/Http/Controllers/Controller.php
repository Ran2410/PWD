<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;
    public function updateProfilePicture(Request $request)
{
    // Validasi file gambar
    $request->validate([
        'profile_picture' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
    ]);

    // Ambil user yang sedang login
    $user = Auth::user();

    // Jika ada file gambar yang diupload
    if ($request->hasFile('profile_picture')) {
        // Simpan gambar dan ambil path-nya
        $filePath = $request->file('profile_picture')->store('profile_pictures', 'public');

        // Update kolom profile_picture di database
        $user->profile_picture = $filePath;
        $user->save();
    }

    // Redirect ke halaman home dengan pesan sukses
    return redirect()->route('home')->with('success', 'Profile picture updated successfully!');
}

}
