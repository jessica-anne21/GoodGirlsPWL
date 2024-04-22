<?php

namespace App\Http\Controllers;

use App\Models\Matakuliah;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class DataPollingController extends Controller
{
    public function index()
    {
        return view('admin.data-polling');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'Mata_Kuliah' => 'required|max:100',
            'Kode_MK' => 'required|max:45',
            'Jml_sks' => 'required|numeric'
        ]);

        $matakuliah = new Matakuliah();
        $matakuliah->Kode_MK = $validatedData['Kode_MK'];
        $matakuliah->Mata_Kuliah = $validatedData['Mata_Kuliah'];
        $matakuliah->Jml_sks = $validatedData['Jml_sks'];
        $matakuliah->save();

        return redirect()->route('view-course.index')->with('success', 'Matakuliah berhasil ditambahkan.');
    }

    public function showViewCourse()
    {
        $matakuliah = Matakuliah::all();
        return view('view-course', compact('matakuliah'));
    }

    public function delete(Request $request)
    {
        $kodeMk = $request->input('kodeMk');

        $matakuliah = Matakuliah::where('Kode_MK', $kodeMk)->first();
        if ($matakuliah) {
            $matakuliah->delete();
            return response()->json(['success' => true]);
        } else {
            return response()->json(['success' => false]);
        }
    }

    public function updatematkul(Matakuliah $KodeMK)
    {
        return view('update-matakuliah', [
            'matakuliah' => $KodeMK
        ]);
    }

    public function updateMatakuliah(Request $request, $kodeMk)
    {
        $validatedData = $request->validate([
            'Mata_Kuliah' => 'required|max:100',
            'Jml_sks' => 'required|numeric'
        ]);

        $matakuliah = Matakuliah::where('Kode_MK', $kodeMk)->first();
        if ($matakuliah) {
            $matakuliah->Mata_Kuliah = $validatedData['Mata_Kuliah'];
            $matakuliah->Jml_sks = $validatedData['Jml_sks'];
            $matakuliah->save();

            return response()->json(['success' => 'Data polling berhasil diedit.']);
        } else {
            return response()->json(['error' => 'Matakuliah tidak ditemukan.'], 404);
        }
    }
}
