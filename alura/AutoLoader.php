<?php

/**
 * Created by PhpStorm.
 * User: andrews
 * Date: 21/09/17
 * Time: 14:35
 */
class AutoLoader
{

    public function __construct()
    {
        spl_autoload_register(array($this, 'loader'));
    }

    private function loader($className)
    {
        if(!include_once $className . '.php')
        {
            throw new Exception("Classe {$className} nao encontrada");
        }
    }
}