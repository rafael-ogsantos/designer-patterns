<?php

use Src\ListaDeOrcamentos;
use Src\Orcamento;

require_once 'vendor/autoload.php';

$orcamento1 = new Orcamento;
$orcamento1->quantidadeItens = 7;
$orcamento1->aprova();
$orcamento1->value = 1500.21;

$orcamento2 = new Orcamento;
$orcamento2->quantidadeItens = 9;
$orcamento2->finaliza();
$orcamento2->value = 1700.23;

$orcamento3 = new Orcamento;
$orcamento3->quantidadeItens = 4;
$orcamento3->finaliza();
$orcamento3->value = 1212.76;

$listaOrcamentos = new ListaDeOrcamentos;
$listaOrcamentos->addOrcamento($orcamento1);
$listaOrcamentos->addOrcamento($orcamento2);
$listaOrcamentos->addOrcamento($orcamento3);


if ($listaOrcamentos->orcamentosFinalizados()) {
    foreach ($listaOrcamentos->orcamentosFinalizados() as $orcamento) {
        echo 'Valor: ' . $orcamento->value . PHP_EOL;
        echo 'Estado: ' . get_class($orcamento->estadoAtual) . PHP_EOL;
        echo 'QUantidade: ' . $orcamento->quantidadeItens . PHP_EOL; 
    
        echo PHP_EOL;
    }
}
