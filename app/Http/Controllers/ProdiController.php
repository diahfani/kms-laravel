<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdiController extends Controller
{
    public function index()
    {
        return view('program_studi', [
            'title' => 'Program Studi'
        ]);
    }
}