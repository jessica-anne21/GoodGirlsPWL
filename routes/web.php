<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\DataPollingController;
use App\Http\Controllers\PollingMahasiswaController;



Route::redirect('/', '/login');


Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');

Route::post('/login', [LoginController::class, 'login']);

Route::post('/logout', [LoginController::class, 'logout'])->name('logout');



Route::get('/forgot-password', function () {
    return view('auth.forgot-password');
})->name('forgot-password');

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
    return view('admin.data-polling');
})->name('data-polling');



Route::get('/data-polling', [DataPollingController::class, 'index'])->name('data-polling.index');
Route::post('/data-polling', [DataPollingController::class, 'store'])->name('data-polling.store');
Route::get('/update-matakuliah/{KodeMK}', [DataPollingController::class, 'updatematkul'])->name('updatematkul');
Route::delete('/delete-matakuliah/{KodeMK}', [DataPollingController::class, 'delete'])->name('data-polling.delete');
Route::put('/update-matakuliah/{KodeMK}', [DataPollingController::class, 'updateMatakuliah'])->name('update-matakuliah');
Route::get('/view-course', [DataPollingController::class, 'showViewCourse'])->name('view-course.index');
Route::get('/polling-mahasiswa', [PollingMahasiswaController::class, 'index'])->name('polling-mahasiswa.index');
Route::post('/polling-mahasiswa/process', [PollingMahasiswaController::class, 'processPoll'])->name('polling-mahasiswa.process');
