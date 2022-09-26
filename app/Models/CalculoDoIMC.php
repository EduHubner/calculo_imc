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

        $imc = $peso / ($altura * $altura);

        return $imc;
    }
    public function idade () {
        $data = $_GET['datanasci'];
        list($dia, $mes, $ano) = explode('/', $data);

        $hoje = mktime(0, 0, 0, date('d'), date('m'), date('Y'));
        $nascimento = mktime(0, 0, 0, $dia, $mes, $ano);

        $idade = floor((((($hoje - $nascimento) /60) /60) /24) /365.25);

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
}
