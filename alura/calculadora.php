<?php
/**
 * Created by PhpStorm.
 * User: andrews
 * Date: 22/09/17
 * Time: 10:58
 */
//Autoload
require_once 'AutoLoader.php';
new AutoLoader;

use Interpreter\Soma;
use Interpreter\Numero;
use Interpreter\Subtracao;
use Visitor\Impressora;

$esquerdo = new Soma(new Numero(1), new Numero(3));
$direito= new Subtracao(new Numero(2), new Numero(1));

$soma = new Soma($esquerdo, $direito);

$impressora = new Impressora();
$soma->aceita($impressora);

echo $soma->avalia();