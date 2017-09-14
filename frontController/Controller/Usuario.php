<?php

/**
 * Created by PhpStorm.
 * User: andrews
 * Date: 14/09/17
 * Time: 12:02
 */
class Usuario
{

    public function index()
    {
        echo '<br>Default method from ' . get_class($this) . ' controller. ';
    }

    public function sayHello()
    {
        echo '<br>Hello';
    }

    public function sayHelloWithParams($name, $param2)
    {
        echo "<br>Hello dear {$name}";
        echo "<br>Your second param was {$param2}";
    }
}