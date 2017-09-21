<?php

namespace Strategy;
/**
 * Created by PhpStorm.
 * User: andrews
 * Date: 18/09/17
 * Time: 10:15
 */
use TemplateMethod\TemplateImpostoCondicional;
use Entidade\Orcamento;

class ISS extends TemplateImpostoCondicional
{

    public function deveUsarOMaximo(Orcamento $Orcamento)
    {
        $Orcamento->getValor() > 300;
    }

    public function taxacaoMinima(Orcamento $Orcamento)
    {
        return $Orcamento->getValor() * 0.1;
    }

    public function taxacaoMaxima(Orcamento $Orcamento)
    {
        return $Orcamento->getValor() * 0.15;
    }
}