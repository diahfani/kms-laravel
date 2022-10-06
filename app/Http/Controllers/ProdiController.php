<?php

namespace App\Http\Controllers;

use App\Models\Prodi;
use Illuminate\Http\Request;

class ProdiController extends Controller
{
    public function index()
    {
        return view('program_studi', [
            'title' => 'Program Studi',
            'prodi' => Prodi::all(),
        ]);
    }
}