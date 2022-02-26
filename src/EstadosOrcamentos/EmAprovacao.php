<?php

namespace Src\EstadosOrcamentos;

use Src\Orcamento;

class EmAprovacao extends Estado
{
    public function calculaDescontoExtra(Orcamento $orcamento): float
    {
        return $orcamento->value * 0.05;
    }

    public function aprova(Orcamento $orcamento)
    {
        $orcamento->estadoAtual = new Aprovado;
    }

    public function reprova(Orcamento $orcamento)
    {
        $orcamento->estadoAtual = new Reprovado;    
    }

    public function finaliza(Orcamento $orcamento)
    {
        $orcamento->estadoAtual = new Finalizado;  
    }
}