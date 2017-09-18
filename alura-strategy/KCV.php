<?php

/**
 * Created by PhpStorm.
 * User: andrews
 * Date: 18/09/17
 * Time: 10:34
 */
require_once 'iImposto.php';

class KCV implements iImposto
{

    public function calcula(Orcamento $Orcamento)
    {
        // TODO: Implement calcula() method.
        return $Orcamento->getValor() * 0.2;
    }
}