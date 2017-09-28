<?php
/**
 * Created by PhpStorm.
 * User: andrews
 * Date: 22/09/17
 * Time: 10:32
 */

namespace Common;


use Memento\EstadoDeContrato;

class Historico
{
    private $estadosContrato;

    public function __construct()
    {
        $this->estadosContrato = array();
    }

    public function getEstado($index)
    {
        return $this->estadosContrato[$index];
    }

    public function addEstado(EstadoDeContrato $estado)
    {
        $this->estadosContrato[] = $estado;
    }
}