<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KabkotaController;
use App\Http\Controllers\ProvinsiController;
use App\Http\Controllers\Jb1Controller;

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
Route::get('/tematik/jumlah-penduduk', [Jb1Controller::class, 'jb1']);
Route::get('/tematik/jumlah-perokok', [Jb1Controller::class, 'jb2']);
Route::get('/tematik/jumlah-ternak', [Jb1Controller::class, 'jb3']);
Route::get('/tematik/jumlah-kemiskinan', [Jb1Controller::class, 'jb4']);

Route::get('/jb1', [Jb1Controller::class, 'jb1']);
Route::get('/jb2', [Jb1Controller::class, 'jb2']);
Route::get('/jb3', [Jb1Controller::class, 'jb3']);
Route::get('/jb4', [Jb1Controller::class, 'jb4']);
