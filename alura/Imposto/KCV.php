<?php

namespace Imposto;
/**
 * Created by PhpStorm.
 * User: andrews
 * Date: 18/09/17
 * Time: 10:34
 */

use Entidade\Orcamento;

class KCV extends Imposto
{


    public function __construct(Imposto $Imposto = null)
    {
        parent::__construct($Imposto);
    }

    public function calcula(Orcamento $Orcamento)
    {
        // TODO: Implement calcula() method.
        return $Orcamento->getValor() * 0.2 + $this->calculaOutroImposto($Orcamento);
    }
}