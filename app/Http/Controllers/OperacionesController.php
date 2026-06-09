<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OperacionesController extends Controller
{



    public function sumar($num1, $num2)
    {

        $resultado = $num1 + $num2;

        return "El resultado de la suma es: " . $resultado;
    }

    public function restar($num1, $num2)
    {

        $resultado = $num1 - $num2;

        return "El resultado de la resta es: " . $resultado;
    }
}
