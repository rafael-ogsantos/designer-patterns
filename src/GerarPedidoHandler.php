<?php

namespace Src;

use Src\AcoesAoGerarPedido\AcaoAposGerarPedido;
use Src\AcoesAoGerarPedido\CriarPedidoNoBanco;
use Src\AcoesAoGerarPedido\EnviarPedidoPorEmail;
use Src\AcoesAoGerarPedido\LogGerarPedido;

class GerarPedidoHandler
{
    /** @var AcaoAposGerarPedido */
    private array $acoesAposGerarPedido = [];

    public function __construct()
    {
        
    }

    public function adicionarAcaoAoGerarPedido(AcaoAposGerarPedido $acao)
    {
        $this->acoesAposGerarPedido[] = $acao;
    }

    public function execute(GeraPedido $geraPedido) 
    {
        $orcamento = new Orcamento();
        $orcamento->quantidadeItens = $geraPedido->getNumeroItens();
        $orcamento->value = $geraPedido->getValorOrcamento();
  
        $pedido = new Pedido;
        $pedido->nomeCliente = $geraPedido->getNomeCliente();
        $pedido->dataFinalizacao = new \DateTimeImmutable;
        $pedido->orcamento = $orcamento;
  
        foreach ($this->acoesAposGerarPedido as $acao) {
            $acao->executaAcao($pedido);
        }
    }
}