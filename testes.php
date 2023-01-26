<?php

use Alura\DesignPattern\CalculadoraDeDescontos;
use Alura\DesignPattern\CalculadoraDeImpostos;
use Alura\DesignPattern\Impostos\ICMS;
use Alura\DesignPattern\Impostos\ICPP;
use Alura\DesignPattern\Impostos\IKCV;
use Alura\DesignPattern\Impostos\ISS;
use Alura\DesignPattern\Orcamento;

require_once 'vendor/autoload.php';


$orcamento = new Orcamento();
$orcamento->valor = 600;
$orcamento->quantidadeItens = 5;

/*$calculadora = new CalculadoraDeImpostos();

$orcamento = new Orcamento();
$orcamento->valor = 100;

echo "ICMS: " .$calculadora->calcula($orcamento, new ICMS());
echo "<br>ISS: " .$calculadora->calcula($orcamento, new ISS());

$calculadora = new CalculadoraDeDescontos();

echo "Desconto: " . $calculadora->calculaDescontos($orcamento);

$imposto = new ICPP();

echo "ICPP: " . $imposto->calculaImposto($orcamento);

$imposto = new IKCV();

echo "<br>ICPP: " . $imposto->calculaImposto($orcamento);*/

$orcamento->aprova();


