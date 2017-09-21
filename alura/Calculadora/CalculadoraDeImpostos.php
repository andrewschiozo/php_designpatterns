<?php
namespace Calculadora;
/**
 * Created by PhpStorm.
 * User: andrews
 * Date: 18/09/17
 * Time: 10:08
 */
use Entidade\Orcamento;
use Imposto\Imposto;

class CalculadoraDeImpostos
{

    public function calcula(Orcamento $Orcamento, Imposto $Imposto)
    {
        return  $Imposto->calcula($Orcamento);
    }

}