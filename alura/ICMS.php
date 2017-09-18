<?php

/**
 * Created by PhpStorm.
 * User: andrews
 * Date: 18/09/17
 * Time: 10:14
 */
require_once 'TemplateImpostoCondicional.php';

class ICMS extends TemplateImpostoCondicional
{

    public function deveUsarOMaximo(Orcamento $Orcamento)
    {
        return $Orcamento->getValor() > 500;
    }

    public function taxacaoMinima(Orcamento $Orcamento)
    {
        return $Orcamento->getValor() * 0.05;
    }

    public function taxacaoMaxima(Orcamento $Orcamento)
    {
        return $Orcamento->getValor() * 0.15;
    }
}