<?php

namespace ChainOfResponsability;
/**
 * Created by PhpStorm.
 * User: andrews
 * Date: 18/09/17
 * Time: 11:48
 */

use Common\Orcamento;

class SemDesconto implements iDesconto
{

    public function desconto(Orcamento $Orcamento)
    {
        // TODO: Implement desconto() method.
        return 0;
    }

    public function setProximoDesconto(iDesconto $proximoDesconto)
    {
        // TODO: Implement setProximo() method.
    }
}