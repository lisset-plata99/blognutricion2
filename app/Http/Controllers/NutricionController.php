<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NutricionController extends Controller
{
    public function Inicio()
    {
        return view('index');
    }

    public function ViewDietas()
    {
        return view('Dietas');
    }

    public function ViewComposiciondeAlimentos()
    {
        return view('ComposicionAlimentos'); 
    }

    public function ViewProcesoNutricion()
    {
        return view('ProcesodeNutricion'); 
    }
    public function ViewTest()
    {
        return view('Tests'); 
    }
}
