<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard', [
        'title' => 'Dashboard'
    ]);
})->name('dashboard');

Route::get('/login', function () {
    return view('login', [
        'title' => 'Login'
    ]);
})->name('login');

Route::get('/forgotpassword', function () {
    return view('forgotpassword');
})->name('forgotpassword');

Route::get('/fakultas', function () {
    return view('fakultas', [
        'title' => 'Fakultas'
    ]);
})->name('fakultas');

Route::get('/program-studi', function () {
    return view('program_studi', [
        'title' => 'Program Studi'
    ]);
})->name('program-studi');

Route::get('/bidang-ilmu', function () {
    return view('bidang_ilmu', [[
        'title' => 'Bidang Ilmu'
    ]]);
})->name('bidang-ilmu');

Route::get('/kepala-prodi', function () {
    return view('kepala_prodi', [
        'title' => 'Kepala Program Studi'
    ]);
})->name('kepala-prodi');

Route::get('/admin-prodi', function () {
    return view('admin_prodi', [
        'title' => 'Admin Program Studi'
    ]);
})->name('admin-prodi');

Route::get('/dosen', function () {
    return view('dosen', [
        'title' => 'Dosen'
    ]);
})->name('dosen');

Route::get('/mahasiswa', function () {
    return view('mahasiswa', [
        'title' => 'Mahasiswa'
    ]);
})->name('mahasiswa');