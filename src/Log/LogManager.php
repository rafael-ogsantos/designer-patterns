<?php

namespace Src\Log;

abstract class LogManager
{
   public function log(string $severidade, string $mensagem): void
   {
       $logWritter = $this->criarLogWritter();

       $dataHoje = date('d/m/y');
       $mensagemFormatada = "[$dataHoje][$severidade]: $mensagem";
       $logWritter->escreve($mensagemFormatada);
   }

   abstract public function criarLogWritter(): LogWritter;
}