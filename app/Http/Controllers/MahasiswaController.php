<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use App\Models\Prodi;
use App\Models\User;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function index()
    {
        return view('admin/mahasiswa', [
            'title' => 'Mahasiswa',
            'mahasiswa' => Mahasiswa::all(),
            'prodi' => Prodi::all(),
        ]);
    }

    public function store(Request $request)
    {
        // return $request;
        $validateMahasiswaData = $request->validate([
            'nama' => 'required',
            'npm' => 'required',
            'email' => 'required|email:dns',
            'tahun_masuk' => 'required',
            'prodi_id' => 'required',
        ]);

        $validateUserData = $request->validate([
            'email' => 'required|email:dns',
            'password' => 'required|min:8'
        ]);

        if ($request->password == $request->konfirmpassword) {
            if (
                Mahasiswa::create($validateMahasiswaData) &&
                User::create($validateUserData)
            )
                return redirect('mahasiswa')->with('success', 'Mahasiswa berhasil ditambahkan');
            else {
                return back()->with('error', 'Mahasiswa gagal ditambahkan');
            }
        } else {
            return back()->with('errorPassword', 'Password tidak sama!');
        }
    }
}