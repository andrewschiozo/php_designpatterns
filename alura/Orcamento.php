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

    public function __construct($novoValor)
    {
        $this->valor = $novoValor;
        $this->itens = array();
    }

    public function addItem(Item $novoItem)
    {
        $this->itens[] = $novoItem;
    }

    public function getValor()
    {
        return $this->valor;
    }

    public function getItens()
    {
        return $this->itens;
    }


}