<?php
/**
 * Created by PhpStorm.
 * User: andrews
 * Date: 28/09/17
 * Time: 14:48
 */
require_once 'AutoLoader.php';
new AutoLoader();

use Command\Pedido;
use Command\FilaDeExecucao;
use Command\ComandoPagar;
use Command\ComandoFinalizar;

$pedido1 = new Pedido("Renan", 250);
$pedido2 = new Pedido("Marcelo", 350);
$pedido3 = new Pedido("Bianca", 50);
$pedido4 = new Pedido("Caelum", 550);
$pedido5 = new Pedido("Alura", 750);

$fila = new FilaDeExecucao();
$fila->add(new ComandoPagar($pedido1));
$fila->add(new ComandoPagar($pedido2));
$fila->add(new ComandoPagar($pedido3));
$fila->add(new ComandoPagar($pedido4));
$fila->add(new ComandoPagar($pedido5));
$fila->add(new ComandoFinalizar($pedido3));

$fila->processa();
