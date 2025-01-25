<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\jb1;

class Jb1Controller extends Controller
{
    public function index()
    {
        $title = 'Jumlah Penduduk Jabar';
        $jb1 = jb1::all();
        return view('tematik.index', compact('jb1', 'title'));
    }
}
