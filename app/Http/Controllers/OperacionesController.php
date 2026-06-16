<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OperacionesController extends Controller
{



    public function frm_sumar()
    {

        return view('frm_sumar');

    }

    public function sumar(Request $request){

    $numero1=$request->numero1;
    $numero2=$request->numero2;

    $resultado=$numero1+$numero2;

    return $resultado;

    }




    public function restar($num1, $num2)
    {

        $resultado = $num1 - $num2;

        return "El resultado de la resta es: " . $resultado;
    }




}
