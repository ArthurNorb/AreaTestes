<?php

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
