<?php
namespace State;
/**
 * Created by PhpStorm.
 * User: andrews
 * Date: 21/09/17
 * Time: 11:20
 */
use Entidade\Orcamento;

class EstadoEmAprovacao implements iEstadoDeUmOrcamento
{

    public function aplica(Orcamento $Orcamento)
    {
        $Orcamento->setValor($Orcamento->getValor() - ($Orcamento->getValor() * 0.02));
    }

    public function aprova(Orcamento $Orcamento)
    {
        $Orcamento->setEstado(new EstadoAprovado);
    }

    public function reprova(Orcamento $Orcamento)
    {
        $Orcamento->setEstado(new EstadoReprovado);
    }

    public function finaliza(Orcamento $Orcamento)
    {
        throw new \Exception("Apenas orçamentos aprovados podem ser finalizados");
    }
}