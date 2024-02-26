<?php

namespace App\Http\Controllers;
use App\Models\Amortizacion;
use App\Models\Prestamo;

use Illuminate\Http\Request;

class amortizacionController extends Controller
{
    public function getAmortizacion($prestamo){

        $prestamo = Prestamo::find($prestamo);
        
        //echo $prestamo;(
       return view('amortizacion',compact('prestamo'));
    }
}
