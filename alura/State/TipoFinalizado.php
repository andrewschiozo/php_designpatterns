<?php
/**
 * Created by PhpStorm.
 * User: andrews
 * Date: 22/09/17
 * Time: 10:21
 */

namespace State;

use Common\Contrato;

class TipoFinalizado implements iTipoDeContrato
{

    public function avanca(Contrato $Contrato)
    {
        throw new \Exception('Este contrato ja se encontra finalizado');
    }
}