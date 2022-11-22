<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function index()
    {
        return view('admin/mahasiswa', [
            'title' => 'Mahasiswa',
            'mahasiswa' => Mahasiswa::all(),
        ]);
    }
}