<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\jb1;

class Jb1Controller extends Controller
{
    public function index()
    {
        $jb1 = jb1::all();
        return view('jb1', compact('jb1'));
    }
}
