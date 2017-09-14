<?php
/**
 * Created by PhpStorm.
 * User: andrews
 * Date: 14/09/17
 * Time: 09:45
 */

require_once 'FrontController.php';

$options = array('controller' => 'Usuario', 'method' => 'sayHello', 'params' => array('param1', 'param2', 'param3'));
$fc = new FrontController($options);

$fc->run();

