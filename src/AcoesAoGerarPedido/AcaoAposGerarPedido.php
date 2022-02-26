<?php

namespace Src\AcoesAoGerarPedido;

use Src\Pedido;

interface AcaoAposGerarPedido
{
    public function executaAcao(Pedido $pedido): void;
}