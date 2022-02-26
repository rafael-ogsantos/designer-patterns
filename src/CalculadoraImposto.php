<?php

namespace Src;

use Src\Impostos\Imposto;

class CalculadoraImposto
{
    public function calcula(Orcamento $orcamento, Imposto $imposto): float
    {
        return $imposto->calculaImposto($orcamento);
    }
}