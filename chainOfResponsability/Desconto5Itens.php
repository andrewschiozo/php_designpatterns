<?php

/**
 * Created by PhpStorm.
 * User: andrews
 * Date: 18/09/17
 * Time: 11:37
 */
require_once 'iDesconto.php';

class Desconto5Itens implements iDesconto
{
    private $proximoDesconto;

    public function desconto(Orcamento $Orcamento)
    {
        if(count($Orcamento->getItens()) >= 5)
        {
            return $Orcamento->getValor() * 0.1;
        }
        else
        {
            return $this->proximoDesconto->desconto($Orcamento);
        }
    }

    public function setProximoDesconto(iDesconto $proximoDesconto)
    {
        $this->proximoDesconto = $proximoDesconto;
    }
}