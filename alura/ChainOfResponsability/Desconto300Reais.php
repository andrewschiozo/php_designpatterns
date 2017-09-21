<?php
namespace ChainOfResponsability;

/**
 * Created by PhpStorm.
 * User: andrews
 * Date: 18/09/17
 * Time: 11:54
 */
use Entidade\Orcamento;

class Desconto300Reais implements iDesconto
{

    private $proximoDesconto;

    public function desconto(Orcamento $Orcamento)
    {
        // TODO: Implement desconto() method.
        if($Orcamento->getValor() > 300)
        {
            return $Orcamento->getValor() * 0.01;
        }
        else
        {
            return $this->proximoDesconto->desconto($Orcamento);
        }
    }

    public function setProximoDesconto(iDesconto $proximoDesconto)
    {
        // TODO: Implement setProximoDesconto() method.
        $this->proximoDesconto = $proximoDesconto;
    }
}