<?php
namespace Common;
use State\PedidoFinalizado;
use State\PedidoNovo;
use State\PedidoPago;

/**
 * Created by PhpStorm.
 * User: andrews
 * Date: 28/09/17
 * Time: 14:48
 */
class Pedido
{
    private $cliente;
    private $valor;
    private $status;

    public function __construct($cliente, $valor)
    {
        $this->cliente = $cliente;
        $this->valor = $valor;
        $this->status = new PedidoNovo();
    }

    public function pagar()
    {
        $this->status = new PedidoPago();
    }

    public function finalizar()
    {
        $this->status = new PedidoFinalizado();
    }

    public function getCliente()
    {
        return $this->cliente;
    }
}