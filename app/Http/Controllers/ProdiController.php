<?php

namespace App\Http\Controllers;

use App\Models\Fakultas;
use App\Models\Prodi;
use Illuminate\Http\Request;

class ProdiController extends Controller
{
    public function index()
    {
        return view('admin/program_studi', [
            'title' => 'Program Studi',
            'prodi' => Prodi::all(),
            'fakultas' => Fakultas::all()
        ]);
    }

    public function store(Request $request)
    {
        // return $request;
        $validatedData = $request->validate([
            'nama_prodi' => 'required',
            'fakultas_id' => 'required',
        ]);

        Prodi::create($validatedData);

        return redirect('program-studi')->with('success', 'Program Studi baru berhasil ditambahkan');
    }
}