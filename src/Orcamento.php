<?php

namespace Src;

use DomainException;
use Src\EstadosOrcamentos\EmAprovacao;
use Src\EstadosOrcamentos\Estado;

class Orcamento implements Orcavel
{
    private array $itens;
    public Estado $estadoAtual;

    public function __construct()
    {
        $this->estadoAtual = new EmAprovacao();
        $this->itens = [];
    }

    public function aplicaDescontoExtra()
    {
        $this->value -= $this->estadoAtual->calculaDescontoExtra($this);
    }

    public function aprova()
    {
        $this->estadoAtual->aprova($this);
    }

    public function reprova()
    {
        $this->estadoAtual->reprova($this);
    }

    public function finaliza()
    {
        $this->estadoAtual->finaliza($this);
    }

    public function addItem(Orcavel $item)
    {
        $this->itens[] = $item;
    }

    public function valor(): float
    {
        return array_reduce(
            $this->itens, 
            fn (float $valorAcumulado, Orcavel $item) => $item->valor() + $valorAcumulado, 0);
    }
}