<?php

/**
 * Created by PhpStorm.
 * User: andrews
 * Date: 18/09/17
 * Time: 11:15
 */
require_once 'Desconto5Itens.php';
require_once 'Desconto300Reais.php';
require_once 'Desconto500Reais.php';
require_once 'SemDesconto.php';

class CalculadoraDeDescontos
{

    public function desconto(Orcamento $Orcamento)
    {
        $desconto5Itens = new Desconto5Itens();
        $desconto500Reais = new Desconto500Reais();
        $desconto300Reais = new Desconto300Reais();
        $semDesconto = new SemDesconto();

        $desconto5Itens->setProximoDesconto($desconto500Reais);
        $desconto500Reais->setProximoDesconto($desconto300Reais);
        $desconto300Reais->setProximoDesconto($semDesconto);

        return $desconto5Itens->desconto($Orcamento);

    }
}