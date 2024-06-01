<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\BarangController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/register', [AuthController::class, 'registerPost'])->name('post-register');

Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'loginPost'])->name('post-login');

Route::get('/main', [AuthController::class, 'main'])->name('main');

Route::get('/', [AuthController::class, 'welcome'])->name('welcome');

Route::get('home', [AuthController::class, 'home'])->name('home');

Route::post('/storeKategori', [\App\Http\Controllers\BarangController::class, 'storeKategori'])->name('storeKategori');

Route::resource('/barangs', BarangController::class);
