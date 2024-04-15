<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function showForm()
    {
        return view('register');
    }

    public function processForm(Request $request)
    {
        // Validasi data yang diterima dari formulir
        $validatedData = $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'phone_number' => 'required|string|max:20',
            'date_of_birth' => 'required|date',
            'gender' => 'required|string|in:Male,Female,Other',
            'username' => 'required|string|unique:users|max:255',
            'password' => 'required|string|min:8',
        ]);

        // Proses penyimpanan data ke dalam database atau melakukan operasi lainnya
        // Contoh:
        // User::create($validatedData);

        // Redirect atau tampilkan pesan sukses
        return redirect()->route('register')->with('success', 'Registration successful!');
    }
}
