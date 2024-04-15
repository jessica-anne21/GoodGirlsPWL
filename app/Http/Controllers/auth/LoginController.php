<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        // Validasi data yang diterima dari form login
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Proses login dengan menggunakan fungsi auth
        if (Auth::attempt($credentials)) {
            // Jika login berhasil, redirect ke halaman yang sesuai
            return redirect()->intended('/dashboard');
        } else {
            // Jika login gagal, kembalikan ke halaman login dengan pesan error
            return back()->withErrors(['email' => 'Email atau password salah.']);
        }
    }

    public function logout()
    {
        // Proses logout
        Auth::logout();

        // Redirect ke halaman login setelah logout
        return redirect('/login');
    }
}

class RegisterController extends Controller
{
    public function showRegistrationForm()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {
        // Validasi data yang diterima dari form registrasi
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);

        // Simpan data pengguna baru ke dalam database
        $user = \App\Models\User::create([
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'password' => bcrypt($validatedData['password']),
        ]);

        // Redirect ke halaman yang sesuai setelah registrasi berhasil
        return redirect('/login')->with('success', 'Registrasi berhasil! Silakan login untuk melanjutkan.');
    }
}
