<?php

require_once 'CalculadoraDeImpostos.php';

require_once 'ICMS.php';
require_once 'ISS.php';
require_once 'KCV.php';

require_once 'Orcamento.php';


$reforma = new Orcamento(500);
$calculadora = new CalculadoraDeImpostos();

echo $calculadora->calcula($reforma, new ICMS);
echo '<br>';

echo $calculadora->calcula($reforma, new ISS);
echo '<br>';

echo $calculadora->calcula($reforma, new KCV);
echo '<br>';