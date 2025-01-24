<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Provinsi;

class ProvinsiController extends Controller
{
    public function index(){
        $provinces = Provinsi::all();
        return view('provinsi.index', [
            'provinces' => $provinces,
            'title' => 'Provinsi'
        ]);
    }
}
