<?php

namespace App\Http\Controllers;

use App\Models\BidangIlmu;
use App\Models\Fakultas;
use App\Models\Prodi;
use Illuminate\Http\Request;

class BidangIlmuController extends Controller
{
    public function index()
    {
        return view('admin/bidang_ilmu', [
            'title' => 'Bidang Ilmu',
            'bidang_ilmu' => BidangIlmu::all(),
            'fakultas' => Fakultas::all(),
            'prodi' => Prodi::all(),
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama' => 'required',
            'prodi_id' => 'required',
        ]);

        if (BidangIlmu::create($validatedData)) {
            return redirect('bidang-ilmu')->with('success', 'Bidang ilmu berhasil ditambahkan');
        }
    }
}