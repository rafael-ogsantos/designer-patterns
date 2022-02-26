<?php

use Src\DadosExtrinsecosPedido;
use Src\Orcamento;
use Src\Pedido\CriadorPedido;
use Src\Pedido\Pedido;
use Src\Pedido\TemplatePedido;

require 'vendor/autoload.php';

$pedidos = [];
$criadorPedido = new CriadorPedido;

for($i = 0; $i < 1000; $i ++) {
    $orcamento = new Orcamento;
    $pedido = $criadorPedido->criaPedido(
        'Rafael',
        date('y-m-d'),
        $orcamento
    );

    $pedidos[] = $pedido;
}

echo memory_get_peak_usage();