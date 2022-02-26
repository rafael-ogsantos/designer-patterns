<?php

namespace Src;

use Src\Descontos\DescontoMais500Reais;
use Src\Descontos\DescontosMais;
use Src\Descontos\SemDesconto;

class CalculadoraDescontos
{
    public function calculaDesconto(Orcamento $orcamento): float
    {
        $cadeiaDesconto = new DescontosMais(
            new DescontoMais500Reais(
                new SemDesconto()
            )
        );

        $descontoCalculado = $cadeiaDesconto->calculaDesconto($orcamento);
        
        $logDesconto = new LogDesconto;
        $logDesconto->informar($descontoCalculado);

        return $descontoCalculado;
    }
}