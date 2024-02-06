<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClassificadosController;

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

Route::get('/', [ClassificadosController::class, 'index'])->name('home');
Route::get('/classificados/{id}', [ClassificadosController::class, 'show'])->name('classificados');
Route::get('/anuncio', [ClassificadosController::class, 'create'])->name('anuncio')->middleware('auth');
Route::post('/anunciar',[ClassificadosController::class, 'store'])->name('anunciar');