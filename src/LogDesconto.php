<?php

namespace Src;

class LogDesconto
{
    public function informar(float $descontoCalculado): void 
    {
        echo "Salvando log desconto: $descontoCalculado";
    }
}