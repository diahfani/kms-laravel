<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Fakultas;

class FakultasController extends Controller
{
    public function index()
    {
        return view('fakultas', [
            'title' => 'Fakultas',
            'fakultas' => Fakultas::all()
        ]);
        // $fakultas = \App\Models\fakultas::all();
        // return view('fakultas.index', ['fakultas' => $fakultas]);
    }

    public function store()
    {
        return view('fakultas', [
            'title' => 'Tambah Fakultas',
            'fakultas' => new Fakultas()
        ]);
    }
}