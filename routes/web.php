<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('pagos', App\Http\Controllers\PagoController::class);
Route::resource('tipos-pagos', App\Http\Controllers\TipoPagoController::class);