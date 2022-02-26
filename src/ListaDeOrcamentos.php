<?php

namespace Src;

use Src\EstadosOrcamentos\Finalizado;

class ListaDeOrcamentos implements \IteratorAggregate
{
    private array $orcamentos = [];

    public function addOrcamento(Orcamento $orcamento)
    {
        $this->orcamentos[] = $orcamento;
    }

    public function orcamentosFinalizados()
    {
        return array_filter($this->orcamentos, fn ($orcamento) => $orcamento instanceof Finalizado::class); 
    }

    public function getIterator()
    {
        return new \ArrayIterator($this->orcamentos);
    }
}