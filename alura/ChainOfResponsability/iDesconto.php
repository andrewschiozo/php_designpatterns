<?php
namespace ChainOfResponsability;
/**
 * Created by PhpStorm.
 * User: andrews
 * Date: 18/09/17
 * Time: 11:42
 */
use Entidade\Orcamento;

interface iDesconto
{

    public function desconto(Orcamento $Orcamento);

    public function setProximoDesconto(iDesconto $proximoDesconto);
}