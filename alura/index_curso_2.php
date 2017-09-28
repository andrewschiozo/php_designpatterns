<?php

//Autoload
require_once 'AutoLoader.php';
new AutoLoader;

use Factory\FactoryConnection;
use Common\Contrato;
use Common\Historico;

//Factory
$factory = new FactoryConnection();
$conexao = $factory->getConnection();

//Memento
$historico = new Historico();
$contrato = new Contrato('Caelum', new \Datetime);
//var_dump($contrato);

$historico->addEstado($contrato->salvaEstado());
$contrato->avanca();
//var_dump($contrato);

$historico->addEstado($contrato->salvaEstado());
$contrato->avanca();
//var_dump($contrato);

//var_dump($historico->getEstado(0));
//var_dump($historico->getEstado(1));