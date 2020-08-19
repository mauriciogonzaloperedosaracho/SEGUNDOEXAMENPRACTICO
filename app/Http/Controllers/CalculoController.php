<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculoController extends Controller
{
    public function ecuacion() {
        return view('ecuacion');
    }

    public function solucion(Request $request) {
        $a = 0; //hipotenusa
        $b = (float)$request->input('b');
        $c = (float)$request->input('c');
        //a^2=b^2+c^2
        //a=sqrt()
        $a = sqrt(($b * $b) + ($c * $c));

        return view('solucion', [
            'a' => $a,
            'b' => $b,
            'c' => $c,
        ]);
    }
}
