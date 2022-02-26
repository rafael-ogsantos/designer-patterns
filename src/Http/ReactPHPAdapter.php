<?php

namespace Src\Http;

class ReactPHPAdapter implements HttpAdapter
{
    public function post(string $url, array $data = []): void   
    {
        echo 'React PHP';
    }
}