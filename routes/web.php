<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PetaController;
use App\Http\Controllers\ProvinsiController;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/provinsi', [ProvinsiController::class, 'index']);
Route::get('/kota', [PetaController::class, 'show']);
