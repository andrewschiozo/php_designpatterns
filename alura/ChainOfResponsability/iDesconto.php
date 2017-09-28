<?php
namespace ChainOfResponsability;
/**
 * Created by PhpStorm.
 * User: andrews
 * Date: 18/09/17
 * Time: 11:42
 */
use Common\Orcamento;

interface iDesconto
{

    public function desconto(Orcamento $Orcamento);

    public function setProximoDesconto(iDesconto $proximoDesconto);
}