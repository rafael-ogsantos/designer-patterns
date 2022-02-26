<?php

namespace Src\EstadosOrcamentos;

use Src\Orcamento;

class Finalizado extends Estado
{ 
    public function calculaDescontoExtra(Orcamento $orcamento): float
    {
        throw new \DomainException('Orçamentos reprovados e finalizados não podem receber descontos');
    }
}