<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kabkota;

class KabkotaController extends Controller
{
    //

    function index(){
        $kabkota = Kabkota::all();
        return view('kabkota.index', [
            'kabkota' => $kabkota,
            'title' => 'Kabkota'
        ]);
    }
}
