<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin/dashboard', [
            'title' => 'Dashboard'
        ]);
    }

    public function profile()
    {
        return view('admin/profile', [
            'title' => 'profile'
        ]);
    }

    public function admin()
    {
        return view('admin/admin', [
            'title' => 'Admin'
        ]);
    }
}