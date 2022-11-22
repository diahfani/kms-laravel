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
}