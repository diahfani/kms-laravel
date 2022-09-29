<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('dashboard', [
            'title' => 'Dashboard'
        ]);
    }

    public function profile()
    {
        return view('profile', [
            'title' => 'profile'
        ]);
    }
}