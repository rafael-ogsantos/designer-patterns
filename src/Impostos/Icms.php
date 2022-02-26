<?php

namespace Src\Impostos;

use Src\Orcamento;

class Icms extends Imposto
{
    public function realizaCalculoEspecifico(Orcamento $orcamento): float
    {
        return $orcamento->value * 10;
    }
}