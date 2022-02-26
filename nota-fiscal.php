<?php

use Src\ItemOrcamento;
use Src\NotaFiscal\ConstrutorNotaFiscal;
use Src\NotaFiscal\ConstrutorNotaFiscalServico;

require 'vendor/autoload.php';

$builder = new ConstrutorNotaFiscalServico;

$item1 = new ItemOrcamento();
$item1->valor = 500;

$item2 = new ItemOrcamento();
$item2->valor = 1500;

$item3 = new ItemOrcamento();
$item3->valor = 1000;

$notaFiscal = $builder->paraEmpresa('1234532.', 'Rafael T.I')
    ->comItem($item1)
    ->comItem($item2)
    ->comItem($item3)
    ->comObservacoes('Esta nota fiscal foi construida com um construtor')
    ->constroi();   


echo $notaFiscal->valorImposto;