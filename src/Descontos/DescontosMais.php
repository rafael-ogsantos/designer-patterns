<?php

namespace Src\Descontos;

use Src\Orcamento;

class DescontosMais extends Desconto
{
    public function calculaDesconto(Orcamento $orcamento): float
    {
        if($orcamento->quantidadeItens > 5) {
            return $orcamento->value * 0.1;
        }

        return $this->proximoDesconto->calculaDesconto($orcamento);
    }
}