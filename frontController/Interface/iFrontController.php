<?php

/**
 * Created by PhpStorm.
 * User: andrews
 * Date: 14/09/17
 * Time: 10:58
 */
interface iFrontController
{
    public function __construct(array $options = array());

    public function setController($controller);
    public function setMethod($method);
    public function setParams(array $params);
    public function run();
}