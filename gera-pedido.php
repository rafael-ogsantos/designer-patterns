<?php

require_once 'vendor/autoload.php';

use Src\{GeraPedido, GerarPedidoHandler, Orcamento, Pedido};
use Src\AcoesAoGerarPedido\CriarPedidoNoBanco;
use Src\AcoesAoGerarPedido\EnviarPedidoPorEmail;
use Src\AcoesAoGerarPedido\LogGerarPedido;

$valorOrcamento = $argv[1];
$numeroItens = $argv[2];
$nomeCliente = $argv[3];

$gerarPedido = new GeraPedido($valorOrcamento, $numeroItens, $nomeCliente);
$gerarPedidoHandler = new GerarPedidoHandler();
$gerarPedidoHandler->adicionarAcaoAoGerarPedido(new CriarPedidoNoBanco);
$gerarPedidoHandler->adicionarAcaoAoGerarPedido(new EnviarPedidoPorEmail);
$gerarPedidoHandler->adicionarAcaoAoGerarPedido(new LogGerarPedido);
$gerarPedidoHandler->execute($gerarPedido);
