<?php

require 'vendor/autoload.php';

use Src\{Orcamento, Pedido};
use Src\Relatorio\{OrcamentoExportado, PedidoExportado};
use Src\Relatorio\{ArquivoXMLExportado, ArquivoZipExportado};

$orcamento = new Orcamento;
$orcamento->value = 500;
$orcamento->quantidadeItens = 7;

$pedido = new Pedido;
$pedido->nomeCliente = 'Rafael';
$pedido->dataFinalizacao = new DateTimeImmutable();

$orcamentoExportado = new PedidoExportado($pedido);
$orcamentoExportadoXml = new ArquivoXMLExportado('pedido.array');

echo $orcamentoExportadoXml->salvar($orcamentoExportado);