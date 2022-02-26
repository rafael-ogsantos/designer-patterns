<?php

use Src\CacheOrcamentoProxy;
use Src\ItemOrcamento;
use Src\Orcamento;

require 'vendor/autoload.php';

$orcamentos = new Orcamento;
$item1 = new ItemOrcamento;
$item1->valor = 300;

$item2 = new ItemOrcamento;
$item2->valor = 500;

$orcamentos->addItem($item1);
$orcamentos->addItem($item2);

$orcamentoAntigo = new Orcamento;
$item3 = new ItemOrcamento;
$item3->valor = 150;
$orcamentoAntigo->addItem($item3);

$orcamentos->addItem($orcamentoAntigo);

$proxyCache = new CacheOrcamentoProxy($orcamentos);

echo $proxyCache->valor() . PHP_EOL;
echo $proxyCache->valor() . PHP_EOL;
echo $proxyCache->valor() . PHP_EOL;
echo $proxyCache->valor() . PHP_EOL;
echo $proxyCache->valor() . PHP_EOL;