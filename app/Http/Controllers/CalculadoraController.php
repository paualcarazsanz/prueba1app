<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculadoraController extends Controller
{
    // Suma
    public function suma($num1, $num2)
    {
        return response()->json([
            'num1' => $num1,
            'num2' => $num2,
            'operación' => 'suma',
            'resultado' => $num1 + $num2
        ]);
    }

    // Resta
    public function resta($num1, $num2)
    {
        return response()->json([
            'num1' => $num1,
            'num2' => $num2,
            'operación' => 'resta',
            'resultado' => $num1 - $num2
        ]);
    }

    // Multiplicación
    public function multiplicacion($num1, $num2)
    {
        return response()->json([
            'num1' => $num1,
            'num2' => $num2,
            'operación' => 'multiplicación',
            'resultado' => $num1 * $num2
        ]);
    }

    // División
    public function division($num1, $num2)
    {
        if ($num2 == 0) {
            return response()->json([
                'error' => 'División por 0 no permitida'
            ]);
        }
        return response()->json([
            'num1' => $num1,
            'num2' => $num2,
            'operación' => 'división',
            'resultado' => $num1 / $num2
        ]);
    }

    // Exponencial
    public function exponencial($num1, $num2)
    {
        if ($num2 < 0 || $num2 > 5) {
            return response()->json([
                'error' => 'Exponente debe estar entre 0 y 5'
            ]);
        }
        return response()->json([
            'num1' => $num1,
            'num2' => $num2,
            'operación' => 'exponencial',
            'resultado' => pow($num1, $num2)
        ]);
    }
}
