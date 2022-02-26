<?php

namespace Src;

use Src\EstadosOrcamentos\Finalizado;
use Src\Http\HttpAdapter;

class RegistroOrcamento
{
    private HttpAdapter $http;

    public function __construct(HttpAdapter $http)
    {
        $this->http = $http;
    }

    public function registrar(Orcamento $orcamento): void
    {   
        if ($orcamento->estadoAtual instanceof Finalizado) {
            throw new \DomainException('Apenas orcçamentos finalizados podem ser registrados');
        }

        $this->http->post('https://api.registrar.orcamento', [
            'valor' => $orcamento->value,
            'qtsItens' => $orcamento->quantidadeItens
        ]);
    }
}