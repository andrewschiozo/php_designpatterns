<?php
/**
 * Created by PhpStorm.
 * User: andrews
 * Date: 13/09/17
 * Time: 15:46
 */

// Implementaçoes de iOutput
require_once 'ArrayOutput.php';
require_once 'JsonStringOutput.php';
require_once 'SerializedArrayOutput.php';

require_once 'Cliente.php';

$Empresa = new Cliente(171, 'Empresa Falsaria LTDA');
$Empresa->setOutput(new ArrayOutput());
var_dump($Empresa->loadOutput());

$Empresa->setOutput(new JsonStringOutput());
var_dump($Empresa->loadOutput());

$Empresa->setOutput(new SerializedArrayOutput());
var_dump($Empresa->loadOutput());