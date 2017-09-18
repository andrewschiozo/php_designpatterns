<?php

/**
 * Created by PhpStorm.
 * User: andrews
 * Date: 18/09/17
 * Time: 10:08
 */
class CalculadoraDeImpostos
{

    public function calcula(Orcamento $Orcamento, iImposto $Imposto)
    {
        return  $Imposto->calcula($Orcamento);
    }

}