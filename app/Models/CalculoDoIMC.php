<?php

namespace App\Models;

use Illuminate\Database\DBAL\TimestampType;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CalculoDoIMC extends Model
{
    use HasFactory;
    public function calculo() {
        $altura = floatval($_GET['altura']);
        $peso = floatval($_GET['peso']);

        $calimc = $peso / ($altura * $altura);
        if($calimc < 18.5){
            $imc = "Abaixo do peso";
        } elseif ($calimc < 25) {
            $imc = "Peso normal";
        } elseif ($calimc < 30) {
            $imc = "Acima do peso (sobrepeso)";
        } elseif ($calimc < 35) {
            $imc = "Obesidade I";
        } elseif ($calimc < 40) {
            $imc = "Obesidade II";
        } else {
            $imc = "Obesidade III";
        }

        return $imc;
    }
    public function idade() {
        $data = $_GET['datanasci'];
        list($dia, $mes, $ano) = explode('/', $data);

        $hoje = mktime(0, 0, 0, date('d'), date('m'), date('Y'));
        $nascimento = mktime(0, 0, 0, $dia, $mes, $ano);
    
        $idadefloat = ((((($hoje - $nascimento) /60) /60) /24) /365.25);
        $idade = floor($idadefloat);

        return $idade;
    }
    public function peso() {
        $peso = $_GET['peso'];
        return $peso;
    }
    public function altura() {
        $altura = $_GET['altura'];
        return $altura;
    }
    public function nome() {
        $nome = $_GET['nome'];
        return $nome;
    }
    public function sono() {
        $sono = $_GET['sono'];
        $qualidade = false;

        $data = $_GET['datanasci'];
        list($dia, $mes, $ano) = explode('/', $data);

        $hoje = mktime(0, 0, 0, date('d'), date('m'), date('Y'));
        $nascimento = mktime(0, 0, 0, $dia, $mes, $ano);
    
        $idadefloat = ((((($hoje - $nascimento) /60) /60) /24) /365.25);

        if ($idadefloat <= 0.3) {
            if ($sono >= 14 && $sono <=17){
                $qualidade = true;
            }
        } elseif ($idadefloat <= 0.11) {
            if ($sono >= 12 && $sono <= 15){
                $qualidade = true;
            }
        } elseif ($idadefloat <= 2) {
            if ($sono >= 11 && $sono <= 14){
                $qualidade = true;
            }
        } elseif ($idadefloat <= 5) {
            if ($sono >= 10 && $sono <= 13){
                $qualidade = true;
            }
        } elseif ($idadefloat <= 13) {
            if ($sono >= 9 && $sono <= 11){
                $qualidade = true;
            }
        } elseif ($idadefloat <= 17) {
            if ($sono >= 8 && $sono <= 10){
                $qualidade = true;
            }
        } elseif ($idadefloat <= 64) {
            if ($sono >= 7 && $sono <= 9){
                $qualidade = true;
            }
        } else {
            if ($sono >= 14 && $sono <= 8){
                $qualidade = true;
            }
        } 
        if ($qualidade) {
            $sonorecomendado = "Você está dentro dos padrões de horas de sono recomendado";
        } else {
            $sonorecomendado = "Você não está dentro dos padrões de horas de sono recomendado";
        }

        return $sonorecomendado;
        
    }
}
