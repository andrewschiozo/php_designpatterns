<?php
//Requires

    //Descontos
    require_once 'CalculadoraDeDescontos.php';

    //Entidade para teste
    require_once 'Orcamento.php';
    require_once 'Item.php';

//Params
$reforma = new Orcamento();
$reforma->addItem(new Item('Tijolo', 50));
$reforma->addItem(new Item('Cimento 1kg', 50));
$reforma->addItem(new Item('Cimento 1kg', 100));
$reforma->addItem(new Item('Cimento 1kg', 101));

echo '<h3>Valor do orcamento: R$ ' . $reforma->getValor();
echo '</h3><hr>';


//Descontos
echo 'Descontos <br>';

$calculadoraDeDescontos = new CalculadoraDeDescontos();
echo '<br>Descontos: R$ ' . number_format($calculadoraDeDescontos->desconto($reforma), 2, ',', '.');