<?php
/**
 * Created by PhpStorm.
 * User: andrews
 * Date: 28/09/17
 * Time: 15:02
 */

namespace Command;


abstract class Comando implements iComando
{
    protected $pedido;

    public function __construct(Pedido $pedido)
    {
        $this->pedido = $pedido;
    }
}