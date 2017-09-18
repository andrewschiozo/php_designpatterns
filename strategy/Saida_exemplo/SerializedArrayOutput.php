<?php

/**
 * Created by PhpStorm.
 * User: andrews
 * Date: 13/09/17
 * Time: 15:27
 */

require_once 'iOutput.php';

class SerializedArrayOutput implements iOutput
{

    public function load($arrayData)
    {
        // TODO: Implement load() method.
        return serialize($arrayData);
    }
}