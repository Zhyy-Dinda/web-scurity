<?php

use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\ArtikelControllerController;
use App\Http\Controllers\authController;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\DashboasrdController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KontakController;
use App\Http\Controllers\LayananController;
use App\Http\Controllers\PanduanController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\RfcController;
use App\Models\rfc;
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

Route::get('/test', function () {
    return view('admin.template');
});


Route::get('/',[HomeController::class,'beranda'])->name('home');
Route::get('/profile',[HomeController::class,'profile'])->name('profile');
Route::get('/artikel',[HomeController::class,'artikel'])->name('artikel');
Route::get('/rfc',[HomeController::class,'rfc'])->name('rfc');
Route::get('/layanan',[HomeController::class,'layanan'])->name('lyanan');
Route::get('/panduan',[HomeController::class,'panduan'])->name('panduan');
Route::get('/kontak',[HomeController::class,'kontak'])->name('kontak');

// authentication
//==============================================================================
Route::post('/login', [authController::class, 'authenticated']);
Route::get('/login', [authController::class, 'login'])->name('login');
Route::get('/logout', [authController::class, 'logout'])->name('logout');
Route::get('/register', [RegisterController::class, 'index'])->name('register.index');
Route::post('/register', [RegisterController::class, 'store'])->name('register.store');
//==============================================================================

Route::resource('/admin/dashboard',DashboasrdController::class)->middleware('auth');
Route::resource('/admin/post',PostController::class)->middleware('auth');
Route::resource('/admin/beranda',BerandaController::class)->middleware('auth');
Route::resource('/admin/profile',ProfileController::class)->middleware('auth');
Route::resource('/admin/artikel',ArtikelController::class)->middleware('auth');
Route::resource('/admin/rfc',RfcController::class)->middleware('auth');
Route::resource('/admin/layanan',LayananController::class)->middleware('auth');
Route::resource('/admin/panduan',PanduanController::class)->middleware('auth');
Route::resource('/admin/kontak',KontakController::class)->middleware('auth');