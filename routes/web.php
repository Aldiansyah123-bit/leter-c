<?php

use App\Http\Controllers\AssetController;
use App\Http\Controllers\DataController;
use App\Http\Controllers\HomeController;
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
    return view('auth.login');
});

Route::middleware(['auth'])->group(function(){
    Route::get('/dashboard',[HomeController::class, 'index'])->name('dashboard');
    Route::resource('data', DataController::class);
    Route::resource('asset', AssetController::class);
    Route::get('laporan/{id}',[HomeController::class, 'cetak'])->name('laporan');
    Route::get('pemilik',[HomeController::class, 'print'])->name('pemilik');
});
require __DIR__.'/auth.php';
