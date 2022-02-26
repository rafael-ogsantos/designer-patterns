<?php

namespace Src\EstadosOrcamentos;

use Src\Orcamento;

class Aprovado extends Estado
{
    public function calculaDescontoExtra(Orcamento $orcamento): float
    {
        return $orcamento->value * 0.02;
    }

    public function finaliza(Orcamento $orcamento)
    {
        $orcamento->estadoAtual = new Finalizado;
    }
}