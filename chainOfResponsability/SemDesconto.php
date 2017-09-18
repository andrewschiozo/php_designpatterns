<?php

/**
 * Created by PhpStorm.
 * User: andrews
 * Date: 18/09/17
 * Time: 11:48
 */

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