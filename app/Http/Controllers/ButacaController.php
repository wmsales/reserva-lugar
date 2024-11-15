<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Butaca;

class ButacaController extends Controller
{
    public function index()
    {
        $registrosA = Butaca::where('asiento', 'like', 'A%')->get();
        $registrosB = Butaca::where('asiento', 'like', 'B%')->get();
        $registrosC = Butaca::where('asiento', 'like', 'C%')->get();
        $registrosD = Butaca::where('asiento', 'like', 'D%')->get();
        $registrosE = Butaca::where('asiento', 'like', 'E%')->get();
        $registrosF = Butaca::where('asiento', 'like', 'F%')->get();
        $registrosG = Butaca::where('asiento', 'like', 'G%')->get();
        $registrosH = Butaca::where('asiento', 'like', 'H%')->get();
        $registrosI = Butaca::where('asiento', 'like', 'I%')->get();
        $registrosJ = Butaca::where('asiento', 'like', 'J%')->get();

        return view('welcome', compact(
            'registrosA',
            'registrosB',
            'registrosC',
            'registrosD',
            'registrosE',
            'registrosF',
            'registrosG',
            'registrosH',
            'registrosI',
            'registrosJ'
        ));
    }

}
