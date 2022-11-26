<?php

namespace App\Http\Controllers;

use App\Models\BidangIlmu;
use App\Models\Dosen;
use App\Models\Prodi;
use App\Models\User;
use Illuminate\Http\Request;

class DosenController extends Controller
{
    public function index()
    {
        return view('admin/dosen', [
            'title' => 'Dosen',
            'prodi' => Prodi::all(),
            'bidangilmu' => BidangIlmu::all(),
            'dosen' => Dosen::all(),
        ]);
    }

    public function store(Request $request)
    {
        $request['jabatan'] = 'Dosen';
        $validateDosenData = $request->validate([
            'nama' => 'required',
            'nip' => 'required',
            'email' => 'required|email:dns',
            'prodi_id' => 'required',
            'bidangilmu_id' => 'required',
            'jabatan' => 'required',
        ]);

        $validateUserData = $request->validate([
            'email' => 'required|email:dns',
            'password' => 'required|min:8',
        ]);

        if ($request->password == $request->konfirmpassword) {
            if (
                Dosen::create($validateDosenData) &&
                User::create($validateUserData)
            )
                return redirect('dosen')->with('success', 'Dosen berhasil ditambahkan');
            else {
                return back()->with('error', 'Dosen gagal ditambahkan');
            }
        } else {
            return back()->with('errorPassword', 'Password tidak sama!');
        }
    }
}