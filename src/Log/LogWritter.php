<?php

namespace Src\Log;

interface LogWritter
{
    public function escreve(string $mensagemFormatada): void;
}