<?php
/**
 * Created by PhpStorm.
 * User: andrews
 * Date: 13/09/17
 * Time: 14:48
 */

require_once 'Automovel.php';

$Tracker = FactoryAutomovel::create('Chevrollet', 'Tracker LTZ');

echo $Tracker;