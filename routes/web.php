<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProfileController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!php artisan key:generate
|
*/


Route::get('/', function () {
    return view('home');
});

// Route untuk halaman login
Route::get('/login', function () {
    return view('login');
})->name('login');

// Route untuk Settings
Route::get('/settings', function () {
    return view('settings');
})->name('settings');

// Route untuk halaman home
Route::get('/home', function () {
    return view('home');
})->name('home');

Route::get('/register', function () {
    return view('register');
})->name('register');

// Route Register
Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register.form');
Route::post('/register', [RegisterController::class, 'register'])->name('register');

// Route untuk halaman login
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('login.submit');

// Route untuk LogOut
Route::post('/logout', function () {
    Auth::logout();
    return redirect('/login'); // Mengarahkan kembali ke halaman login setelah logout
})->name('logout');

Route::post('/profile/upload', [ProfileController::class, 'uploadProfilePicture'])->name('profile.upload');

Route::post('/profile/update', [ProfileController::class, 'update'])->name('profile.update');

