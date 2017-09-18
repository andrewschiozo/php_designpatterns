<?php

/**
 * Created by PhpStorm.
 * User: andrews
 * Date: 13/09/17
 * Time: 15:30
 */

require_once 'iOutput.php';

class JsonStringOutput implements iOutput
{

    public function load($arrayData)
    {
        // TODO: Implement load() method.
        return json_encode($arrayData);
    }
}