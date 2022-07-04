<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
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

Route::get('/home', [HomeController::class, 'index'])->name('home');
route::get('/login',[LoginController::class,'halamanlogin'])->name('halamanlogin');
route::post('/postlogin',[LoginController::class,'postlogin'])->name('postlogin');
route::get('/logout',[LoginController::class,'logout'])->name('logout');