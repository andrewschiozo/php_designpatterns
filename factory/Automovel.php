<?php

/**
 * Created by PhpStorm.
 * User: andrews
 * Date: 13/09/17
 * Time: 14:44
 */

class Automovel
{
    private $marca;
    private $modelo;

    public function __construct($marca, $modelo)
    {
        $this->marca = $marca;
        $this->modelo = $modelo;
    }

    public function __toString()
    {
        // TODO: Implement __toString() method.
        return $this->marca . ' - ' . $this->modelo;
    }
}