<?php

/**
 * Created by PhpStorm.
 * User: andrews
 * Date: 21/09/17
 * Time: 11:20
 */

class EstadoAprovado implements iEstadoDeUmOrcamento
{

    public function aplica(Orcamento $Orcamento)
    {
        $Orcamento->setValor($Orcamento->getValor() - ($Orcamento->getValor() * 0.05));
    }

    public function aprova(Orcamento $Orcamento)
    {
        throw new Exception("Este orçamento ja se encontra aprovado");
    }

    public function reprova(Orcamento $Orcamento)
    {
        throw new Exception("Um orçamento aprovado nao pode ser reprovado");
    }

    public function finaliza(Orcamento $Orcamento)
    {
        $Orcamento->setEstado(new EstadoFinalizado);
    }
}