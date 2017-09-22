<?php

//Autoload
require_once 'AutoLoader.php';
new AutoLoader;

use Factory\FactoryConnection;

$factory = new FactoryConnection();
$conexao = $factory->getConnection();
var_dump($conexao);