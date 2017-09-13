<?php
/**
 * Created by PhpStorm.
 * User: andrews
 * Date: 13/09/17
 * Time: 14:48
 */

require_once 'FactoryAutomovel.php';

$Tracker = FactoryAutomovel::create('Chevrolet', 'Tracker LTZ');
$Ka      = FactoryAutomovel::create('Ford', 'Ka');

echo $Tracker;
echo '<br>';
echo $Ka;