<?php

/**
 * Created by PhpStorm.
 * User: andrews
 * Date: 13/09/17
 * Time: 14:46
 */

require_once 'Automovel.php';

class FactoryAutomovel
{
    public static function create($marca, $modelo)
    {
        return new Automovel($marca, $modelo);
    }
}