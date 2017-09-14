<?php

/**
 * Created by PhpStorm.
 * User: andrews
 * Date: 14/09/17
 * Time: 13:12
 */
class Welcome
{

    public function index()
    {
        echo '<br>Default method from ' . get_class($this) . ' controller. ';
    }
}