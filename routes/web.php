<?php

use App\Http\Controllers\InformacionPersonalController;
use App\Models\InformacionPersonal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome')->name('home');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::view('dashboard', 'dashboard')->name('dashboard');
});

Route::resource('informacion-personal', InformacionPersonalController::class);
/*Route::get('/formulario-horoscopo', [InformacionPersonalController::class, 'create']);
Route::get('/horoscopos', [InformacionPersonalController::class, 'index']);
Route::post('/recibe-formulario', [InformacionPersonalController::class, 'store']);
Route::get('/detalle/informacionPersonal/{informacionPersonal}', [InformacionPersonalController::class, 'show']);
*/
require __DIR__.'/settings.php';
