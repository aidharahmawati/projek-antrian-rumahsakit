<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AntrianController extends Controller
{
    public function index()
{
    $antrian = Antrian::orderBy('created_at', 'desc')->get();
    return view('antrian.index', compact('antrian'));   
}

public function create()
{
    $poli = Poli::all();
    $dokter = Dokter::all();
    return view('antrian.create', compact('poli', 'dokter'));           
}

public function store(Request $request)
{
    $request->validate([
        'pasien_id' => 'required|exists:pasien,id',
        'poli_id' => 'required|exists:poli,id',
        'dokter_id' => 'required|exists:dokter,id',
        'status' => 'required|string|max:255',
    ]);

    Antrian::create([
        'pasien_id' => $request->pasien_id,
        'poli_id' => $request->poli_id,
        'dokter_id' => $request->dokter_id,
        'status' => $request->status,
    ]);

    return redirect()->route('antrian.index')->with('success', 'Antrian berhasil ditambahkan.');
}

public function show($id)
{
    $antrian = Antrian::findOrFail($id);
    return view('antrian.show', compact('antrian'));    
}

public function edit($id)
{
    $antrian = Antrian::findOrFail($id);
    $poli = Poli::all();
    $dokter = Dokter::all();
    return view('antrian.edit', compact('antrian', 'poli', 'dokter'));    
}

public function update(Request $request, $id)
{
    $request->validate([
        'pasien_id' => 'required|exists:pasien,id',
        'poli_id' => 'required|exists:poli,id',
        'dokter_id' => 'required|exists:dokter,id',
        'status' => 'required|string|max:255',
    ]);

    $antrian = Antrian::findOrFail($id);
    $antrian->update([
        'pasien_id' => $request->pasien_id,
        'poli_id' => $request->poli_id,
        'dokter_id' => $request->dokter_id,
        'status' => $request->status,
    ]);

    return redirect()->route('antrian.index')->with('success', 'Antrian berhasil diperbarui.');
}

public function destroy($id)
{
    $antrian = Antrian::findOrFail($id);
    $antrian->delete();
    return redirect()->route('antrian.index')->with('success', 'Antrian berhasil dihapus.');
}


}