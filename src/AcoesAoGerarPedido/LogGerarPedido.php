<?php

namespace Src\AcoesAoGerarPedido;

use SplSubject;
use Src\Pedido;

class LogGerarPedido implements AcaoAposGerarPedido
{
    public function executaAcao(Pedido $pedido): void
    {
        echo 'Enviando Email de pedido gerado';
    }
}