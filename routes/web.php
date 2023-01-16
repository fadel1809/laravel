<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;
use App\Models\Mahasiswa;

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

Route::get('/', [MahasiswaController::class, 'index']);
Route::get('/tambah', [MahasiswaController::class, 'tambah']);
Route::post('/tambah/store', [MahasiswaController::class, 'store']);
Route::get('/edit/{id}', [MahasiswaController::class, 'edit']);
Route::put('/{id}', [MahasiswaController::class, 'update']);
Route::delete('/{id}', [MahasiswaController::class, 'destroy']);