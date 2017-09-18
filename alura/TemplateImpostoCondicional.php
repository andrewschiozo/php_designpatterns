<?php

/**
 * Created by PhpStorm.
 * User: andrews
 * Date: 18/09/17
 * Time: 14:14
 */
require_once 'iImposto.php';

abstract class TemplateImpostoCondicional implements iImposto
{

    public function calcula(Orcamento $Orcamento)
    {
        // TODO: Implement calcula() method.
        if($this->deveUsarOmaximo($Orcamento))
        {
            return $this->taxacaoMaxima($Orcamento);
        }
        else
        {
            return $this->taxacaoMinima($Orcamento);
        }
    }

    abstract public function deveUsarOMaximo(Orcamento $Orcamento);

    abstract public function taxacaoMinima(Orcamento $Orcamento);

    abstract public function taxacaoMaxima(Orcamento $Orcamento);

}