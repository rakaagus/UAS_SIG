// <?php

// namespace App\Http\Controllers;

// use Illuminate\Http\Request;
// use App\Models\jb1;

// class Jb1Controller extends Controller
// {
//     public function index()
//     {
//         $title = 'Jumlah Penduduk Jabar';
//         $jb1 = jb1::all();
//         return view('tematik.index', compact('jb1', 'title'));
//     }
// }

// update:

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
        return view('jb1', compact('jb1'));
    }

    public function jb2()
    {
        $jb2 = jb1::all();
        return view('jb2', compact('jb2'));
    }

    public function jb3()
    {
        $jb3 = jb1::all();
        return view('jb3', compact('jb3'));
    }

    public function jb4()
    {
        $jb4 = jb1::all();
        return view('jb4', compact('jb4'));
    }
}


