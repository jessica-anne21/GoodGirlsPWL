<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\DataPollingController;


// Rute untuk menampilkan halaman welcome
Route::get('/', function () {
    return view('welcome');
});

// Rute untuk menampilkan halaman login
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
// Rute untuk melakukan proses login
Route::post('/login', [LoginController::class, 'login']);
// Rute untuk proses logout
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');


// Di dalam file routes/web.php
Route::get('/forgot-password', function () {
    return view('auth.forgot-password');
})->name('forgot-password');

// Di dalam file routes/web.php
Route::get('/reset-password', function () {
    return view('auth.reset-password');
})->name('reset-password');

Route::post('/dashboard', 'MahasiswaController@index')->name('mahasiswa.dashboard');

Route::post('/dashboard', function () {
    return view('admin.navbar');
})->name('admin.dashboard');

Route::get('/register', function () {
    return view('/admin/register');
})->name('register');

Route::get('/data-polling', function () {
    return view('admin.data-polling'); // Pastikan path view-nya sesuai dengan struktur direktori Anda
})->name('data-polling');


//Route::get('/data-polling', [DataPollingController::class, 'index'])->name('data-polling.index');
//Route::post('/data-polling', [DataPollingController::class, 'store'])->name('data-polling.store');

//Route::get('/data-polling', 'DataPollingController@index')->name('data-polling');
//Route::get('/data-polling', [DataPollingController::class, 'index']);
//Route::post('/data-polling/save', [DataPollingController::class, 'save'])->name('data-polling.save');

Route::post('/data-polling/save', [DataPollingController::class, 'store'])->name('data-polling.store');
Route::post('/polling-detail', 'PollingDetailController@store')->name('polling-detail.store');

Route::post('view-course/store', [ViewCourseController::class, 'store'])->name('view-course.store');

