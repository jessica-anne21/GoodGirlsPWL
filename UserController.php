<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Polling;

class UserController extends Controller
{
    public function index()
    {
        // Menampilkan daftar user
        $users = User::all();
        return view('user.index', compact('users'));
    }

    public function create()
    {
        // Menampilkan form untuk membuat user baru
        return view('user.create');
    }

    public function store(Request $request)
    {
        // Menyimpan user baru ke database
        $user = new User();
        $user->name = $request->input('name');
        $user->NRP = $request->input('NRP');
        $user->jenis_kelamin = $request->input('jenis_kelamin');
        $user->tanggal_lahir = $request->input('tanggal_lahir');
        $user->agama = $request->input('agama');
        $user->alamat = $request->input('alamat');
        $user->password = bcrypt($request->input('password'));
        $user->save();

        return redirect()->route('user.index')->with('success', 'User berhasil disimpan!');
    }

    public function show($id)
    {
        // Menampilkan informasi user
        $user = User::findOrFail($id);
        return view('user.show', compact('user'));
    }

    public function destroy($id)
    {
        // Menghapus user dari database
        $user = User::findOrFail($id);
        $user->delete();

        return redirect()->route('user.index')->with('success', 'User berhasil dihapus!');
    }

    public function pollings($id)
    {
        // Menampilkan polling yang telah dibuat oleh user
        $user = User::findOrFail($id);
        $pollings = Polling::where('user_id', $id)->get();
        return view('user.pollings', compact('user', 'pollings'));
    }
}
