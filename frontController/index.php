<?php
/**
 * Created by PhpStorm.
 * User: andrews
 * Date: 14/09/17
 * Time: 09:45
 */

require_once 'FrontController.php';

//Chamada via codigo
//$options = array('controller' => 'Usuario', 'method' => 'sayHello', 'params' => array('param1', 'param2', 'param3'));
//$fc = new FrontController($options);


//Chamada via URL
//Exemplo de url:  http://www.meusistema.com.br/controller/metodo/param1/param2/paramN
$fc = new FrontController();
$fc->run();

