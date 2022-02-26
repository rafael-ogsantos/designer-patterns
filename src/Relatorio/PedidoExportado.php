<?php

namespace Src\Relatorio;

use Src\Pedido;

class PedidoExportado implements ConteudoExportado
{
    private Pedido $pedido;

    public function __construct(Pedido $pedido)
    {
        $this->pedido = $pedido;
    }

    public function conteudo(): array
    {
        return [
            'data_finalizacao' => $this->pedido->dataFinalizacao->format('d/m/y'),
            'nome_cliente' => $this->pedido->nomeCliente
        ];
    }
}