<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FakultasController extends Controller
{
    public function index()
    {
        return view('fakultas', [
            'title' => 'Fakultas'
        ]);
        // $fakultas = \App\Models\fakultas::all();
        // return view('fakultas.index', ['fakultas' => $fakultas]);
    }
}