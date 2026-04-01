<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PoliController extends Controller
{
    public function index()
    {
        $poli = [
            ['id' => 1, 'name' => 'Poli Umum'],
            ['id' => 2, 'name' => 'Poli Gigi'],
            ['id' => 3, 'name' => 'Poli Anak'],
        ];
        return view('poli.index', compact('poli'));
    }

    public function create()
    {
        return view('poli.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'keterangan' => 'string',
        ]);

        Poli::create([
            'nama_poli' => $request->nama,
            'keterangan' => $request->keterangan,
        ]);
        return redirect()->route('poli.index')->with('success', 'Poli berhasil ditambahkan.');
    }

    public function show($id)
    {
        $poli = Poli::findOrFail($id);
        return view('poli.show', compact('poli'));
    }

    public function edit($id)
    {
        $poli = Poli::findOrFail($id);
        return view('poli.edit', compact('poli'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'keterangan' => 'string',
        ]);

        $poli = Poli::findOrFail($id);
        $poli->update([
            'nama_poli' => $request->nama,
            'keterangan' => $request->keterangan,
        ]);
        return redirect()->route('poli.index')->with('success', 'Poli berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $poli = Poli::findOrFail($id);
        $poli->delete();
        return redirect()->route('poli.index')->with('success', 'Poli berhasil dihapus.');
    }
}
