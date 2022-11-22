<?php

namespace App\Http\Controllers;

use App\Models\Fakultas;
use App\Models\Prodi;
use App\Models\Tatausaha;
use App\Models\User;
use Illuminate\Http\Request;

class AdminProdiController extends Controller
{
    public function index()
    {
        return view('admin/admin_prodi', [
            'title' => 'Admin Program Studi',
            'fakultas' => Fakultas::all(),
            'prodi' => Prodi::all(),
            'tatausaha' => Tatausaha::all()
        ]);
    }

    // 1. store email dan password di table users
    // 2. store nama, nip, email, prodi_id dan fakultas_id ke table tatausahas
    public function store(Request $request)
    {
        // return $request;
        $validateTatausahaData = $request->validate([
            'nama' => 'required',
            'nip' => 'required',
            'email' => 'required|email:dns',
            'prodi_id' => 'required',
            'fakultas_id' => 'required'
        ]);
        $validateUserData = $request->validate([
            'email' => 'required|email:dns',
            'password' => 'required'
        ]);
        if ($request->password == $request->konfirmpassword) {
            Tatausaha::create($validateTatausahaData);
            User::create($validateUserData);
            return redirect('admin-prodi')->with('success', 'Admin Program Studi/Tata usaha berhasil ditambahkan');
        } else {
            return back()->with('errorPassword', 'Password tidak sama!');
        }
    }
}