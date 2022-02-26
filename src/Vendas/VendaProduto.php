<?php

namespace Src\Vendas;

class VendaProduto extends Venda
{
    private int $pesoProduto;

    public function __construct(\DateTimeInterface $dataRealização, int $pesoProduto)
    {
        parent::__construct($dataRealização);
        $this->pesoProduto = $pesoProduto;
    }
}