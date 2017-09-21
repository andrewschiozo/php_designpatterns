<?php

namespace Imposto;
/**
 * Created by PhpStorm.
 * User: andrews
 * Date: 18/09/17
 * Time: 10:14
 */
use Entidade\Orcamento;

abstract class Imposto
{
    protected $outroImposto;

    public function __construct($Imposto = null)
    {
        $this->outroImposto = $Imposto;
    }

    public abstract function calcula(Orcamento $Orcamento);

    public function calculaOutroImposto(Orcamento $Orcamento)
    {
        if(is_null($this->outroImposto))
        {
            return 0;
        }
        return $this->outroImposto->calcula($Orcamento);
    }
}