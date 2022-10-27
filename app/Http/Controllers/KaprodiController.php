<?php

namespace App\Http\Controllers;

use App\Models\Dosen;
use App\Models\Prodi;
use Illuminate\Http\Request;

class KaprodiController extends Controller
{
    public function index()
    {
        return view('kepala_prodi', [
            'title' => 'Kepala Program Studi',
            'kaprodi' => Dosen::where('jabatan', 'Kaprodi')->with(['prodi'])->get(),
            // 'identity' => Dosen::with(['prodi', 'fakultas'])->get()
        ]);
    }
}