<?php

use Src\CalculadoraDescontos;
use Src\CalculadoraImposto;
use Src\Impostos\Icms;
use Src\Impostos\Ipva;
use Src\Impostos\Iss;
use Src\Orcamento;

require __DIR__ . '/vendor/autoload.php';

$calcula = new CalculadoraImposto;

$orcamento = new Orcamento;
$orcamento->value = 100;

echo $calcula->calcula($orcamento, new Iss(new Icms()));

// $calculadora = new CalculadoraDescontos();

// $orcamento = new Orcamento();
// $orcamento->value = 600;
// $orcamento->quantidadeItens = 5;

// echo $calculadora->calculaDesconto($orcamento);