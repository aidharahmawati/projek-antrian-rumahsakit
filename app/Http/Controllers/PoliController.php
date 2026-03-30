<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PoliController extends Controller
{
    function index()
    {
        $poli = [
            ['id' => 1, 'nama' => 'Poli Umum'],
            ['id' => 2, 'nama' => 'Poli Gigi'],
            ['id' => 3, 'nama' => 'Poli Anak'],
        ];
        return view('poli.index', compact('poli'));
    }

    function create()
    {
        $request = request([
            'nama',
            'alamat',
            'telp',
        ]);
        return view('poli.create', compact('request'));
    }

        function store()
        {
            $request = request([
                'nama',
                'alamat',
                'telp',
            ]);
            return view('poli.store', compact('request'));
        }

        function show($id)
        {
            $poli = [
                ['id' => 1, 'nama' => 'Poli Umum'],
                ['id' => 2, 'nama' => 'Poli Gigi'],
                ['id' => 3, 'nama' => 'Poli Anak'],
            ];
            $data = null;
            foreach ($poli as $p) {
                if ($p['id'] == $id) {
                    $data = $p;
                    break;
                }
            }
            return view('poli.show', compact('data'));
        }
}
