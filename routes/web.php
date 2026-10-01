<?php

use illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome')->name('home');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::view('dashboard', 'dashboard')->name('dashboard');
});
Route::get('/formulario-horoscopo', function () {
    return view('formulario');
});
Route::post('/recibe-formulario', function (Request $request) {
    return $request->all();
});

require __DIR__.'/settings.php';
