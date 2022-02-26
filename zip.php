<?php

use Src\Orcamento;
use Src\Relatorio\OrcamentoZip;

require 'vendor/autoload.php';

$orcamentoZip = new OrcamentoZip;
$orcamento = new Orcamento;
$orcamento->value = 500;

$orcamentoZip->exportar($orcamento);