<?php
use App\Models\InformacionPersonal;
use illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome')->name('home');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::view('dashboard', 'dashboard')->name('dashboard');
});
Route::get('/formulario-horoscopo', [InformacionPersonalController::class, 'create']);
Route::get('/horoscopos', [InformacionPersonalController::class, 'index']);
Route::post('/recibe-formulario', [InformacionPersonalController::class, 'store']);

require __DIR__.'/settings.php';
