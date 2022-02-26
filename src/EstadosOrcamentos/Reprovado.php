<?php

namespace Src\EstadosOrcamentos;

use Src\Orcamento;

class Reprovado extends Estado
{
    public function calculaDescontoExtra(Orcamento $orcamento): float
    {
        throw new \DomainException('Um orçamentos reprovado não pode receber descontos');
    }

    public function finaliza(Orcamento $orcamento)
    {
        $orcamento->estadoAtual = new Finalizado;
    }
}