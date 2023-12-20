<?php

use App\Http\Controllers\DeskBarangController;
use App\Http\Controllers\StokJualController;
use App\Http\Controllers\LaporanPenjualanController;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [StokJualController::class, 'index']);

Route::get('/laporan', [LaporanPenjualanController::class, 'index']);
Route::post('/laporan', [LaporanPenjualanController::class, 'search']);
Route::get('/barang', [DeskBarangController::class, 'index']);