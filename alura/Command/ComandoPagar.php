<?php
/**
 * Created by PhpStorm.
 * User: andrews
 * Date: 28/09/17
 * Time: 15:01
 */

namespace Command;


class ComandoPagar extends Comando
{

    public function executa()
    {
        echo '<br>Pagando o pedido do cliente: ' . $this->pedido->getCliente();
        $this->pedido->pagar();
    }
}