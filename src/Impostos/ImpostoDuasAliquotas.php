<?php

namespace Src\Impostos;

use Src\Orcamento;

abstract class ImpostoDuasAliquotas extends Imposto
{   
    public function realizaCalculoEspecifico(Orcamento $orcamento): float
    {
        if ($this->deveAplicarTaxaMaxima($orcamento)) {
            return $this->calculaTaxaMax($orcamento);
        }   

        return $this->calculaTaxaMin($orcamento);
    }

    abstract protected function deveAplicarTaxaMaxima(Orcamento $orcamento): bool;
    abstract protected function calculaTaxaMax(Orcamento $orcamento): float;
    abstract protected function calculaTaxaMin (Orcamento $orcamento): float;
}