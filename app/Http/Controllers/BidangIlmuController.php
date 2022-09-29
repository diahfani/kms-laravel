<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BidangIlmuController extends Controller
{
    public function index()
    {
        return view('bidang_ilmu', [
            'title' => 'Bidang Ilmu'
        ]);
    }
}