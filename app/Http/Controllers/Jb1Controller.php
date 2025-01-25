<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\jb1;
use App\Models\jb2;
use App\Models\jb3;


class Jb1Controller extends Controller
{
    public function jb1()
    {
        $jb1 = jb1::all();
        $title = "Jumlah Penduduk";
        return view('tematik.index', compact('jb1', 'title'));
    }

    public function jb2()
    {
        $jb2 = jb1::all();
        $title = "Jumlah Presentasi Perokok";
        return view('tematik.prokok', compact('jb2', 'title'));
    }

    public function jb3()
    {
        $jb3 = jb1::all();
        $title = "Jumlah Ternak sapi potong";
        return view('tematik.ternak', compact('jb3', 'title'));
    }

    public function jb4()
    {
        $jb4 = jb1::all();
        $title = "Jumlah Penduduk Miskin";
        return view('tematik.miskin', compact('jb4', 'title'));
    }
}


