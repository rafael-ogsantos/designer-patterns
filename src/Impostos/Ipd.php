<?php

namespace Src\Impostos;

use Src\Orcamento;

class Ipd implements ImpostoDuasAliquotas
{
    protected function deveAplicarTaxaMaxima(Orcamento $orcamento): bool
    {
        return $orcamento->value > 300 && $orcamento->quantidadeItens > 3;
    }

    protected function calculaTaxaMax(Orcamento $orcamento)
    {
        return $orcamento->value * 0.04;
    }

    protected function calculaTaxaMin(Orcamento $orcamento)
    {
        return $orcamento->value * 0.025;
    }
}