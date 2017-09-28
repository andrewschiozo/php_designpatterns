<?php
/**
 * Created by PhpStorm.
 * User: andrews
 * Date: 22/09/17
 * Time: 10:58
 */
//Autoload
require_once '../AutoLoader.php';
new AutoLoader;


$esquerdo = new Soma(new Numero(1), new Numero(3));
$direito= new Soma(new Numero(2), new Numero(1));

$soma = new Subtracao($esquerdo, $direito);

echo $soma->avalia();