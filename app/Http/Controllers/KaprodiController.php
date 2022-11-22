<?php

namespace App\Http\Controllers;

use App\Models\Dosen;
use App\Models\Prodi;
use Illuminate\Http\Request;

class KaprodiController extends Controller
{
    public function index()
    {
        return view('admin/kepala_prodi', [
            'title' => 'Kepala Program Studi',
            'kaprodi' => Dosen::where('jabatan', 'Kaprodi')->with(['prodi'])->get(),
            // 'identity' => Dosen::with(['prodi', 'fakultas'])->get()
        ]);
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