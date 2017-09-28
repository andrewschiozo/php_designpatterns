<?php
/**
 * Created by PhpStorm.
 * User: andrews
 * Date: 22/09/17
 * Time: 10:43
 */

namespace Memento;


use Common\Contrato;

class EstadoDeContrato
{
    private $contrato;
    private $horaGerada;

    public function __construct(Contrato $contrato)
    {
        $this->contrato = $contrato;
        $this->horaGerada = new \DateTime;
    }

    public function getContrato()
    {
        return $this->contrato;
    }
}