<?php
namespace Common;
/**
 * Created by PhpStorm.
 * User: andrews
 * Date: 18/09/17
 * Time: 10:08
 */
use Decorator\Imposto;

class CalculadoraDeImpostos
{

    public function calcula(Orcamento $Orcamento, Imposto $Imposto)
    {
        return  $Imposto->calcula($Orcamento);
    }

}