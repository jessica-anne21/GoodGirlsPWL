<?php

namespace App\Http\Controllers;

use App\Models\Kurikulum;
use Illuminate\Http\Request;

class KurikulumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kurikulums = Kurikulum::all();
        return view('kurikulum.index', compact('kurikulums'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('kurikulum.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'Mata_kuliah' => 'required',
            'Jml_sks' => 'required|integer',
            'SA_1' => 'required|numeric',
        ]);

        Kurikulum::create($request->all());

        return redirect()->route('kurikulum.index')
            ->with('success', 'Kurikulum created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Kurikulum  $kurikulum
     * @return \Illuminate\Http\Response
     */
    public function show(Kurikulum $kurikulum)
    {
        return view('kurikulum.show', compact('kurikulum'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Kurikulum  $kurikulum
     * @return \Illuminate\Http\Response
     */
    public function edit(Kurikulum $kurikulum)
    {
        return view('kurikulum.edit', compact('kurikulum'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Kurikulum  $kurikulum
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Kurikulum $kurikulum)
    {
        $request->validate([
            'Mata_kuliah' => 'required',
            'Jml_sks' => 'required|integer',
            'SA_1' => 'required|numeric',
        ]);

        $kurikulum->update($request->all());

        return redirect()->route('kurikulum.index')
            ->with('success', 'Kurikulum updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Kurikulum  $kurikulum
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kurikulum $kurikulum)
    {
        $kurikulum->delete();

        return redirect()->route('kurikulum.index')
            ->with('success', 'Kurikulum deleted successfully.');
    }
}
