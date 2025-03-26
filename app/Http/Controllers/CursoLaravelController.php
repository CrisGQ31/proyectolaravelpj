<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CursoLaravelController extends Controller
{

    public function suma($A,$B)
    {

//        $A =8;
//        $B =8;
        $resultado = ($A+$B);

        return "La suma de los dos numeros es: ". $resultado;

    }
    public function resta($A,$B){

//        $A =8;
//        $B =8;
        $resultado = ($A-$B);

        return "La resta de los dos numeros es: ". $resultado;

    }

    public function multiplicacion ($A,$B){

//        $A =8;
//        $B =8;
        $resultado = ($A*$B);

        return "La multiplicacion de los dos numeros es: ". $resultado;
    }
    public function division ($A,$B){

//        $A =8;
//        $B =8;
        $resultado = ($A/$B);

        return "La division de los dos numeros es: ". $resultado;
    }


}
