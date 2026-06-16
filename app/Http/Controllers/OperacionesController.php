<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Add;


class OperacionesController extends Controller
{



    public function frm_sumar()
    {

        return view('frm_sumar');

    }

    public function sumar(Request $request){

    $add=new Add();

    $add->num1=$request->numero1;
    $add->num2=$request->numero2;

    $add->resul=$add->num1+$add->num2;
    $add->save();
    return $add;

    }




    public function restar($num1, $num2)
    {

        $resultado = $num1 - $num2;

        return "El resultado de la resta es: " . $resultado;
    }




}
