<?php
/**
 * Created by PhpStorm.
 * User: andrews
 * Date: 22/09/17
 * Time: 10:19
 */

namespace State;

use Common\Contrato;

class TipoEmAndamento implements iTipoDeContrato
{

    public function avanca(Contrato $Contrato)
    {
        $Contrato->setTipo(new TipoFinalizado);
    }
}