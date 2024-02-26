<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Prestamo;

class prestamoControlller extends Controller
{
    public function inicio() {

        $prestamos = Prestamo::all();

        return view('inicio', compact('prestamos'));
    }

    public function crearPrestamo(){

        return view('crearPrestamo');
    }

    public function guardarPrestamo(Request $req){

        $prestamo = new Prestamo();
        

        $monto = $req->input('monto');
        $interes = $req->input('tasaInteres');
        $plazo = $req->input('plazo');
        $cuota = ($monto * ($interes / 1200)) / (1 - (1 + ($interes / 1200)))-$plazo * 12;


        
        $prestamo->id =$req->input('codigoPrestamo');
        $prestamo->cuota = $cuota;
        $prestamo->monto = $monto;
        $prestamo->tasa_de_interes = $interes;
        $prestamo->plazo = $plazo;
     

        $prestamo->save();

        return redirect()->route('inicio');



        
    }
}
