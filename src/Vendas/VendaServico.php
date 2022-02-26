<?php

namespace Src\Vendas;

class VendaServico extends Venda
{
    private string $nomePrestador;

    public function __construct(\DateTimeInterface $dataRealização, string $nomePrestador)
    {
        parent::__construct($dataRealização);
        $this->nomePrestador = $nomePrestador;
    }
}