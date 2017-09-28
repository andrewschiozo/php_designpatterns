<?php
/**
 * Created by PhpStorm.
 * User: andrews
 * Date: 22/09/17
 * Time: 10:19
 */

namespace State;

use Common\Contrato;

class TipoNovo implements iTipoDeContrato
{

    public function avanca(Contrato $Contrato = null)
    {
        $Contrato->setTipo(new TipoEmAndamento);
    }
}