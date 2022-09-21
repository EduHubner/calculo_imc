<?php

namespace App\Models;

use Illuminate\Database\DBAL\TimestampType;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CalculoDoIMC extends Model
{
    use HasFactory;
    public function calculo() {
        $altura = $_GET['altura'];
        $peso = $_GET['peso'];

        $imc = $peso / ($altura * $altura);

        return $imc;
    }
    public function idade () {
        $idade = date('Y') - $_GET['datanasci'];
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
}
