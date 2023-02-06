<?php

use App\Http\Controllers\Pengajian\AbsensiController;
use App\Http\Controllers\Pengajian\IndexController;
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

Route::resource('/', IndexController::class, ['names' => [
    'index' => 'pengajian',
    'show' => 'pengajian.show',
    'edit' => 'pengajian.edit',
    'destroy' => 'pengajian.destroy',
]]);

Route::get('/absensi', [AbsensiController::class, 'index'])->name('absensi');
Route::post('/absensi', [AbsensiController::class, 'store'])->name('absensi.store');