<?php

namespace Src\Impostos;

use Src\Orcamento;

class Ipva extends Imposto
{
    public function realizaCalculoEspecifico(Orcamento $orcamento): float
    {
        if ($orcamento->value > 500) {
            return $orcamento->value * 0.03;
        }

        return $orcamento->value * 0.02;
    }
}