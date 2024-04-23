<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PollingMahasiswaController extends Controller
{
    /**
     * Menampilkan halaman polling-mahasiswa.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('mahasiswa/polling-mahasiswa');
    }

    /**
     * Proses hasil polling.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function processPoll(Request $request)
    {
        return redirect()->back()->with('success', 'Hasil polling berhasil disimpan!');
    }
}
