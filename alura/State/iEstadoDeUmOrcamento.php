<?php
namespace State;
/**
 * Created by PhpStorm.
 * User: andrews
 * Date: 21/09/17
 * Time: 11:33
 */
use Common\Orcamento;

interface iEstadoDeUmOrcamento
{

    public function aplica(Orcamento $Orcamento);

    public function aprova(Orcamento $Orcamento);

    public function reprova(Orcamento $Orcamento);

    public function finaliza(Orcamento $Orcamento);
}