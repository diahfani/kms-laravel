<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminProdiController extends Controller
{
    public function index()
    {
        return view('admin/admin_prodi', [
            'title' => 'Admin Program Studi'
        ]);
    }
}