<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KabkotaController;
use App\Http\Controllers\ProvinsiController;

Route::get('/', function () {
    return view('home.index', [
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about.index', [
        "title" => "About"
    ]);
});

Route::get('/our_team', function () {
    return view('OurTeam.index', [
        "title" => "Our Team"
    ]);
});


Route::get('/provinsi', [ProvinsiController::class, 'index']);
Route::get('/kabkota', [KabkotaController::class, 'index']);
