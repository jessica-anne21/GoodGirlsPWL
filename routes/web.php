<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
//use App\Http\Controllers\YourController;
//use Illuminate\Support\Facades\Route;


//use App\Http\Controllers\Auth\RegisterController;


Route::get('/', function () {
    return view('welcome');
});


// Rute untuk menampilkan halaman login
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
// Rute untuk melakukan proses login
Route::post('/login', [LoginController::class, 'login']);
// Rute untuk proses logout
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// Rute untuk menampilkan halaman registrasi
Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
// Rute untuk melakukan proses registrasi
Route::post('/register', [RegisterController::class, 'register']);

Route::get('/admin/dashboard', [YourController::class, 'dashboard'])
    ->middleware('auth', 'checkRole:admin');



//Route::get('/', function () {
//    return redirect(route('login'));
//
//});
//Route::get('/',[\App\Http\Controllers\Navbar::class,'index']);

//Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');







