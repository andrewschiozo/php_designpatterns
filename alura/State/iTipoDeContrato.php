<?php
/**
 * Created by PhpStorm.
 * User: andrews
 * Date: 22/09/17
 * Time: 10:18
 */

namespace State;

use Common\Contrato;

interface iTipoDeContrato
{
    public function avanca(Contrato $Contrato);
}