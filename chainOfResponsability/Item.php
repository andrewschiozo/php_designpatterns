<?php

/**
 * Created by PhpStorm.
 * User: andrews
 * Date: 18/09/17
 * Time: 11:12
 */
class Item
{
    private $nome;
    private $valor;

    public function __construct($novoNome, $novoValor)
    {
        $this->nome = $novoNome;
        $this->valor = $novoValor;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function getValor()
    {
        return $this->valor;
    }


}