<?php

/**
 * Created by PhpStorm.
 * User: andrews
 * Date: 13/09/17
 * Time: 14:59
 */
class Singleton
{
    public static $instance = null;

    public static function getInstance()
    {
        if(is_null(self::$instance))
        {
            self::$instance = new static();
        }

        return self::$instance;
    }

    final protected function __construct()
    {

    }

    final protected function __clone()
    {
        // TODO: Implement __clone() method.
    }

    final protected function __wakeup()
    {
        // TODO: Implement __wakeup() method.
    }
}