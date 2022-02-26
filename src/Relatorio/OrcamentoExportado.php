<?php

namespace Src\Relatorio;

use Src\Orcamento;

class OrcamentoExportado implements ConteudoExportado
{
    private Orcamento $orcamento;

    public function __construct(Orcamento $orcamento)
    {
        $this->orcamento = $orcamento;
    }

    public function conteudo(): array
    {
        return [
            'valor' => $this->orcamento->value,
            'quantidadeItens' => $this->orcamento->quantidadeItens
        ];
    }
}