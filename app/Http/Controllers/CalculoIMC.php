<?php

namespace App\Http\Controllers;

use App\Models\CalculoDoIMC;
use Illuminate\Http\Request;

class CalculoIMC extends Controller
{
    public function index() {
        return view('informacoes');
    }
    public function imc() {
        $CalculoDoIMC = new CalculoDoIMC();

        $imc = $CalculoDoIMC->calculo();
        $idade = $CalculoDoIMC->idade();
        $peso = $CalculoDoIMC->peso();
        $altura = $CalculoDoIMC->altura();
        $nome = $CalculoDoIMC->nome();
        $sono = $CalculoDoIMC->sono();

    return view('resultado', ['imc'=>$imc, 'nome'=>$nome, 'idade'=>$idade, 'peso'=>$peso, 'altura'=>$altura, 'sono'=>$sono]);
    }
}
