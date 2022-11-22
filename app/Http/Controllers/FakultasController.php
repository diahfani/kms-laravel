<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Fakultas;

class FakultasController extends Controller
{
    public function index()
    {
        return view('admin/fakultas', [
            'title' => 'Fakultas',
            'fakultas' => Fakultas::all()
        ]);
        // $fakultas = \App\Models\fakultas::all();
        // return view('fakultas.index', ['fakultas' => $fakultas]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama' => 'required',
        ]);

        Fakultas::create($validatedData);

        return redirect('fakultas')->with('success', 'Fakultas baru berhasil ditambahkan');
    }
}