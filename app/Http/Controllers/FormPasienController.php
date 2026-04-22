<?php

namespace App\Http\Controllers;

use App\Models\Pasien;
use App\Models\Poli;
use App\Models\Dokter;
use App\Models\Antrian;
use Illuminate\Http\Request;

class FormPasienController extends Controller
{
    public function showForm()
    {
        $poli = Poli::all();
        $dokter = Dokter::all();
        $antrian = Antrian::all();
        $pasien = Pasien::all();
        return view('pages.form-pasien.create', compact('poli', 'dokter', 'antrian', 'pasien'));
    }

    public function create(Request $request)
    {
        $request->validate([
            'nama_pasien' => 'required|string|max:255',
            'keterangan' => 'string',
            'poli_id' => 'required|exists:poli,id',
            'dokter_id' => 'required|exists:dokter,id',
        ]);

        Pasien::create([
            'nama_pasien' => $request->nama_pasien,
            'keterangan' => $request->keterangan,
            'poli_id' => $request->poli_id,
            'dokter_id' => $request->dokter_id,
        ]);

        return redirect()->route('pasien.index')->with('success', 'Pasien berhasil ditambahkan.');
    }
}
