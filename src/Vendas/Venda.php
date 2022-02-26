<?php

namespace Src\Vendas;

abstract class Venda
{
    public \DateTimeInterface $dataRealização;

    public function __construct(\DateTimeInterface $dataRealização)
    {
        $this->dataRealização = $dataRealização;
    }
}