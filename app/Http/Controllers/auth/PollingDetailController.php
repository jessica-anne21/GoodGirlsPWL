<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PollingDetail;

class PollingDetailController extends Controller
{
    public function store(Request $request)
    {

        $pollingDetail = new PollingDetail();
        $pollingDetail->Kode_Mk = $request->input('Kode_Mk');
        $pollingDetail->updated_at = $request->input('updated_at');
        $pollingDetail->created_at = $request->input('created_at');

        $pollingDetail->save();
        return redirect()->route('polling-detail.index')->with('success', 'Data polling detail berhasil disimpan.');
    }
}
