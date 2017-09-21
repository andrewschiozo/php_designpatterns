<?php
namespace Calculadora;
/**
 * Created by PhpStorm.
 * User: andrews
 * Date: 18/09/17
 * Time: 11:15
 */

use Entidade\Orcamento;
use Desconto\Desconto5Itens;
use Desconto\Desconto500Reais;
use Desconto\Desconto300Reais;
use Desconto\SemDesconto;

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