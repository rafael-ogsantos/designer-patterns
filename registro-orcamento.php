<?php

use Src\Http\CurlHttpAdapter;
use Src\Http\ReactPHPAdapter;
use Src\Orcamento;
use Src\RegistroOrcamento;

require 'vendor/autoload.php';

$registro = new RegistroOrcamento(new ReactPHPAdapter);
$registro->registrar(new Orcamento);