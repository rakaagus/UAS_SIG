<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PetaController;
use App\Http\Controllers\ProvinsiController;

Route::get('/', function () {
    return view('home.index');
});

Route::get('/about', function () {
    return view('about.index');
});

Route::get('/our_team', function () {
    return view('OurTeam.index');
});


Route::get('/provinsi', [ProvinsiController::class, 'index']);
Route::get('/kota', [PetaController::class, 'show']);
