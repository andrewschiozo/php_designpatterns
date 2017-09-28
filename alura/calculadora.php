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
use Adapter\Relogio;
use Bridge\GoogleMaps;

$esquerdo = new Soma(new Numero(1), new Numero(3));
$direito= new Subtracao(new Numero(2), new Numero(1));

$soma = new Soma($esquerdo, $direito);
$impressora = new Impressora();

$data = new Relogio();
$mapa = new GoogleMaps();

echo $data->format('d/m/Y H:i:s') . ' | ';
$soma->aceita($impressora);
echo ' = ' . $soma->avalia();

echo '<br>' . $mapa->getMapa();

