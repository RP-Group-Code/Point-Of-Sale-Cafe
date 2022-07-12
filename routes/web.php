<?php

use App\Http\Controllers\AkunController;
use App\Http\Controllers\Dashboard;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\PenjualanController;
use App\Http\Controllers\StokController;
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


Route::get('login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'logins'])->name('masuk');
Route::get('/', [LoginController::class, 'index'])->name('login');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
Route::get('/register', [LoginController::class, 'register'])->name('register');
Route::post('/createregister', [LoginController::class, 'createregister'])->name('createregister');

Route::group(['middleware' => ['authcheck']], function () {
    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('createmn', [PenjualanController::class, 'createminuman'])->name('createmn');
    Route::post('postminuman', [PenjualanController::class, 'storeminuman'])->name('postminuman');
    Route::resource('penjualans', PenjualanController::class);
    Route::resource('members', MemberController::class);
    Route::resource('stoks', StokController::class);
    Route::resource('akuns', AkunController::class);
    Route::resource('pegawais', PegawaiController::class);
});