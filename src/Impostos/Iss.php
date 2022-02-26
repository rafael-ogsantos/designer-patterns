<?php

namespace Src\Impostos;

use Src\Orcamento;

class Iss extends Imposto
{
    public function realizaCalculoEspecifico(Orcamento $orcamento): float
    {
        return $orcamento->value * 2;
    }
}