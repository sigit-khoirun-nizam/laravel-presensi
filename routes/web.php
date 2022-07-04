<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PresensiController;
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

route::get('/registrasi', [LoginController::class,'registrasi'])->name('registrasi');
route::post('/simpanregistrasi', [LoginController::class,'simpanregistrasi'])->name('simpanregistrasi');
route::get('/login', [LoginController::class,'halamanlogin'])->name('login');
route::post('/postlogin', [LoginController::class,'postlogin'])->name('postlogin');
route::get('/logout', [LoginController::class,'logout'])->name('logout');

Route::group(['middleware' => ['auth','ceklevel:admin,karyawan']], function () {
    route::get('/home', [HomeController::class,'index'])->name('home');
});

Route::group(['middleware' => ['auth','ceklevel:karyawan']], function () {
    route::post('/simpan-masuk', [PresensiController::class,'store'])->name('simpan-masuk');
    route::get('/presensi-masuk', [PresensiController::class,'index'])->name('presensi-masuk');
    route::get('/presensi-keluar', [PresensiController::class,'keluar'])->name('presensi-keluar');
    route::post('/ubah-presensi', [PresensiController::class, 'presensipulang'])->name('ubah-presensi');
});
