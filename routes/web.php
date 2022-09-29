<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminProdiController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BidangIlmuController;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\FakultasController;
use App\Http\Controllers\KaprodiController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\ProdiController;
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

Route::get('/dashboard', [AdminController::class, 'index'])->name('dashboard');

Route::get('/login', [AuthController::class, 'login'])->name('login');

Route::get('/forgotpassword', [AuthController::class, 'forgotpassword'])->name('forgotpassword');

Route::get('/fakultas', [FakultasController::class, 'index'])->name('fakultas');

Route::get('/program-studi', [ProdiController::class, 'index'])->name('program-studi');

Route::get('/bidang-ilmu', [BidangIlmuController::class, 'index'])->name('bidang-ilmu');

Route::get('/kepala-prodi', [KaprodiController::class, 'index'])->name('kepala-prodi');

Route::get('/admin-prodi', [AdminProdiController::class, 'index'])->name('admin-prodi');

Route::get('/dosen', [DosenController::class, 'index'])->name('dosen');

Route::get('/mahasiswa', [MahasiswaController::class, 'index'])->name('mahasiswa');

Route::get('/profile', [AdminController::class, 'profile'])->name('profile');