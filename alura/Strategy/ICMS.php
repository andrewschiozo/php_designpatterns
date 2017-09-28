<?php
namespace Strategy;
/**
 * Created by PhpStorm.
 * User: andrews
 * Date: 18/09/17
 * Time: 10:14
 */

use TemplateMethod\TemplateImpostoCondicional;
use Common\Orcamento;

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