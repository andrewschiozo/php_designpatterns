<?php
/**
 * Created by PhpStorm.
 * User: andrews
 * Date: 28/09/17
 * Time: 15:32
 */
require_once 'AutoLoader.php';
new AutoLoader();

use Facade\EmpresaFacade;

$Empresa = EmpresaFacade::getInstance();
$Contrato = $Empresa->criaContrato('Contrato 1', new \DateTime);
var_dump($Contrato);