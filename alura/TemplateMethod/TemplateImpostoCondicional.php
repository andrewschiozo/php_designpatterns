<?php

namespace TemplateMethod;
/**
 * Created by PhpStorm.
 * User: andrews
 * Date: 18/09/17
 * Time: 14:14
 */
use Decorator\Imposto;
use Entidade\Orcamento;

abstract class TemplateImpostoCondicional extends Imposto
{

    public function __construct(Imposto $Imposto = null)
    {
        parent::__construct($Imposto);
    }

    public function calcula(Orcamento $Orcamento)
    {
        // TODO: Implement calcula() method.
        if($this->deveUsarOmaximo($Orcamento))
        {
            return $this->taxacaoMaxima($Orcamento) + $this->calculaOutroImposto($Orcamento);
        }
        else
        {
            return $this->taxacaoMinima($Orcamento) + $this->calculaOutroImposto($Orcamento);
        }
    }

    abstract public function deveUsarOMaximo(Orcamento $Orcamento);

    abstract public function taxacaoMinima(Orcamento $Orcamento);

    abstract public function taxacaoMaxima(Orcamento $Orcamento);

}