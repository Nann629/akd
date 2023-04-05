<?php

use App\Http\Controllers\KriteriaController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\SubController;
use App\Http\Controllers\DokumenController;
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

Route::get('login', [AuthController::class, 'login'])->name('login');
Route::get('login', [AuthController::class, 'authentication']);

Route::get('/', function () {
    return view('home');
});

Route::get('kriteria', [KriteriaController::class, 'index']);
Route::get('kriteria-add', [KriteriaController::class, 'create']);
Route::post('kriteria', [KriteriaController::class, 'store']);

Route::get('sub', [SubController::class, 'index']);
Route::get('dokumen', [DokumenController::class, 'index'])->middleware('auth');
