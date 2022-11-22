<?php

namespace App\Http\Controllers;

use App\Models\Dosen;
use App\Models\Fakultas;
use App\Models\Prodi;
use Illuminate\Http\Request;

class KaprodiController extends Controller
{
    public function index()
    {
        return view('admin/kepala_prodi', [
            'title' => 'Kepala Program Studi',
            'kaprodi' => Dosen::where('jabatan', 'Kaprodi')->with(['prodi'])->get(),
            'prodi' => Prodi::all(),
            'fakultas' => Fakultas::all()
            // 'identity' => Dosen::with(['prodi', 'fakultas'])->get()
        ]);
    }

    public function store(Request $request)
    {
        $request['jabatan'] = 'Kaprodi';
        // dd($request);
        $validatedData = $request->validate(
            [
                'nama' => 'required',
                'nip' => 'required',
                'email' => 'required|email:dns',
                'prodi_id' => 'required',
                'jabatan' => 'required',
                'bidangilmu_id' => 'nullable'
            ]
        );

        if (Dosen::create($validatedData)) {
            return redirect('kepala-prodi')->with('success', 'Kepala Program Studi berhasil ditambahkan');
        }
        return back()->with('errorEmail', 'Format email tidak sesuai!');
    }

    public function dashboard()
    {
        return view('kaprodi.dashboard', [
            'title' => 'Dashboard'
        ]);
    }

    public function kurikulum()
    {
        return view('kaprodi.dashboard', [
            'title' => 'Kurikulum'
        ]);
    }

    public function matakuliah()
    {
        return view('kaprodi.dashboard', [
            'title' => 'Mata Kuliah'
        ]);
    }

    public function tahunajaran()
    {
        return view('kaprodi.dashboard', [
            'title' => 'Tahun Ajaran'
        ]);
    }
}