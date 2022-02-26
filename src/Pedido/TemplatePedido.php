<?php

namespace Src\Pedido;

class TemplatePedido
{
    private string $nomeCliente;
    private  \DateTimeInterface $dataFinalizacao;

    public function __construct(string $nomeCliente, \DateTimeInterface $dataFinalizacao)
    {
        $this->nomeCliente = $nomeCliente;
        $this->dataFinalizacao = $dataFinalizacao;
    }

    /**
     * Get the value of nomeCliente
     */ 
    public function getNomeCliente(): string
    {
        return $this->nomeCliente;
    }

    /**
     * Get the value of dataFinalizacao
     */ 
    public function getDataFinalizacao(): \DateTimeInterface 
    {
        return $this->dataFinalizacao;
    }
}
