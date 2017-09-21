<?php
//Requires

    //Impostos
    require_once 'CalculadoraDeImpostos.php';
    require_once 'ICMS.php';
    require_once 'ISS.php';
    require_once 'KCV.php';

    //Descontos
    require_once 'CalculadoraDeDescontos.php';

    //Entidade para teste
    require_once 'Orcamento.php';
    require_once 'Item.php';

//Params
$reforma = new Orcamento();
$reforma->addItem(new Item('Tijolo', 40));
$reforma->addItem(new Item('Cimento 1kg', 50));
$reforma->addItem(new Item('Cimento 1kg', 200));
$reforma->addItem(new Item('Cimento 1kg', 300));

echo '<h3>Valor do orcamento: R$ ' . $reforma->getValor();
echo '</h3><hr>';

$calculadoraDeImpostos = new CalculadoraDeImpostos();
echo '<br>Impostos';
echo '<br>ICMS: R$ ' . number_format($calculadoraDeImpostos->calcula($reforma, new ICMS(new ISS)),2,',', '.');
echo '<br>ISS: R$ '  . number_format($calculadoraDeImpostos->calcula($reforma, new ISS),2,',', '.');;
echo '<br>KCV: R$ '  . number_format($calculadoraDeImpostos->calcula($reforma, new KCV),2,',', '.');;
echo '<hr>';

//Descontos
echo 'Descontos <br>';

$calculadoraDeDescontos = new CalculadoraDeDescontos();
echo '<br>Descontos: R$ ' . number_format($calculadoraDeDescontos->desconto($reforma), 2, ',', '.');