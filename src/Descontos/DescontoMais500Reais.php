<?php

namespace Src\Descontos;

use Src\Orcamento;

class DescontoMais500Reais extends Desconto
{ 
    public function calculaDesconto(Orcamento $orcamento): float
    {
        if($orcamento->value > 500) {
            return $orcamento->value * 0.5;
        }

        return $this->proximoDesconto->calculaDesconto($orcamento);
    }
}


