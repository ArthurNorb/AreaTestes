<?php

use App\Http\Controllers\CategoriasControllers;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/testes', function () {
    return view('testes');
})->name('testes');

Route::get('/testes/icones-personalizados', function () {
    return view('testes.icones-personalizados');
})->name('icones-personalizados');

Route::resource('categorias', CategoriasControllers::class);