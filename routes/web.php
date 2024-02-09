<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClassificadosController;
use App\Http\Controllers\Empresas;


Route::get('/', [ClassificadosController::class, 'index'])->name('home');
Route::get('/classificados/{id}', [ClassificadosController::class, 'show'])->name('classificados');
Route::get('/anuncio', [ClassificadosController::class, 'create'])->name('anuncio')->middleware('auth');
Route::post('/anunciar',[ClassificadosController::class, 'store'])->name('anunciar');
Route::get('/empresa/nova', [Empresas::class, 'create'])->name('nova-empresa')->middleware('auth');
Route::post('/empresa/cadastrar', [Empresas::class, 'store'])->name('cadastrar-empresa');