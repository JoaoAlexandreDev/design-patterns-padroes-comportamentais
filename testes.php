<?php

use Alura\DesignPattern\CalculadoraDeImpostos;
use Alura\DesignPattern\Impostos\ICMS;
use Alura\DesignPattern\Impostos\ISS;
use Alura\DesignPattern\Orcamento;

require_once 'vendor/autoload.php';

$calculadora = new CalculadoraDeImpostos();

$orcamento = new Orcamento();
$orcamento->valor = 100;

echo "ICMS: " .$calculadora->calcula($orcamento, new ICMS());
echo "<br>ISS: " .$calculadora->calcula($orcamento, new ISS());