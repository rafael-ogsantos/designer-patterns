<?php

namespace Src\Log;

class StdOutLogManager extends LogManager
{
    public function criarLogWritter(): LogWritter
    {
        return new StdOutLogWritter();
    }
}