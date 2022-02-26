<?php

namespace Src\AcoesAoGerarPedido;

use Src\Pedido;

class EnviarPedidoPorEmail implements AcaoAposGerarPedido
{
    public function executaAcao(Pedido $pedido): void
    {
        echo 'Enviando Email de pedido gerado';
    }
}