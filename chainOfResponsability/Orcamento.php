<?php

/**
 * Created by PhpStorm.
 * User: andrews
 * Date: 18/09/17
 * Time: 10:06
 */
class Orcamento
{
    private $valor;
    private $itens;

    public function __construct()
    {
        $this->valor = 0;
        $this->itens = array();
    }

    public function addItem(Item $novoItem)
    {
        $this->itens[] = $novoItem;
        $this->setValor($novoItem->getValor());
    }

    public function getValor()
    {
        return $this->valor;
    }

    public function getItens()
    {
        return $this->itens;
    }

    protected function setValor($novoValor)
    {
        $this->valor += $novoValor;
    }
}