<?php
//Autoload
require_once 'AutoLoader.php';
new AutoLoader;

use Entidade\Orcamento;
use Entidade\Item;
use Calculadora\CalculadoraDeImpostos;
use Calculadora\CalculadoraDeDescontos;
use Imposto\ICMS;
use Imposto\ISS;
use Imposto\KCV;
use Builder\BuilderNotaFiscal;
use Acoes\Impressora;
use Acoes\Sms;
use Dao\DaoNotaFiscal;

//Params
$reforma = new Orcamento();
$reforma->addItem(new Item('Tijolo', 40));
$reforma->addItem(new Item('Cimento 10kg', 50));
$reforma->addItem(new Item('Areia 100kg', 200));
$reforma->addItem(new Item('Tinta branca 16L', 200));

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
echo '<hr>';

//Estados
$reforma->aplicaDesconto();
echo '<br> Valor do orçamento em aprovaçao: R$ ' . number_format($reforma->getValor(), 2, ',', '.');

$reforma->aprova();
$reforma->aplicaDesconto();
echo '<br> Valor do orçamento aprovado: R$ ' . number_format($reforma->getValor(), 2, ',', '.');

$reforma->finaliza();
echo '<br>Orçamento finalizado';
echo '<hr>';

//Nota Fiscal
echo 'Nota Fiscal:<br>';

$geradorDeNf = new BuilderNotaFiscal();

$geradorDeNf->comEmpresa('Alura');
$geradorDeNf->comCnpj('1234');
$itens = $reforma->getItens();
foreach($itens as $item)
{
    $geradorDeNf->addItem($item);
}
$geradorDeNf->comObservacoes('NF do orçamento numero 134');
$geradorDeNf->naData();
$geradorDeNf->addAcao(new Impressora);
$geradorDeNf->addAcao(new DaoNotaFiscal);
$geradorDeNf->addAcao(new Sms);

$notaFiscal = $geradorDeNf->build();

var_dump($notaFiscal);