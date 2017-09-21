<?php
namespace State;
/**
 * Created by PhpStorm.
 * User: andrews
 * Date: 21/09/17
 * Time: 11:20
 */
use Interfaces\iEstadoDeUmOrcamento;
use Entidade\Orcamento;

class EstadoFinalizado implements iEstadoDeUmOrcamento
{

    public function aplica(Orcamento $Orcamento)
    {
        throw new \Exception("Um orçamento finalizado nao pode receber descontos");
    }

    public function aprova(Orcamento $Orcamento)
    {
        throw new \Exception("Apenas orçamentos em aprovaçao podem ser aprovados");
    }

    public function reprova(Orcamento $Orcamento)
    {
        throw new \Exception("Este orçamento ja se encontra finalizado");
    }

    public function finaliza(Orcamento $Orcamento)
    {
        throw new \Exception("Apenas orlamentos aprovados podem ser finalizados");
    }
}