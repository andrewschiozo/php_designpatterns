<?php
//Autoload
require_once 'AutoLoader.php';
new AutoLoader;

use Builder\BuilderNotaFiscal;
use ChainOfResponsability\CalculadoraDeDescontos;
use Common\Orcamento;
use Common\Item;
use Observer\Impressora;
use Observer\Sms;
use Observer\DaoNotaFiscal;
use Common\CalculadoraDeImpostos;
use Strategy\ICMS;
use Strategy\ISS;
use Strategy\KCV;

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
$geradorDeNf->comObservacoes('NF do orçamento numero 134')
            ->naData()
            ->addAcao(new Impressora)
            ->addAcao(new DaoNotaFiscal)
            ->addAcao(new Sms);

$notaFiscal = $geradorDeNf->build();

echo '<br>Nome da empresa: ' . $notaFiscal->getEmpresa();
echo '<br>CNPJ: ' . $notaFiscal->getCnpj();
echo '<br>Data/Hora de Emissao: ' . $notaFiscal->getDataEmissao();
echo '
<table border>
    <caption>Itens</caption>
    <tr>
        <th>Preço</th>
        <th>Valor (R$)</th>
    </tr>';
foreach($itens = $notaFiscal->getItens() as $item)
{
    echo '
<tr>
    <td>' . $item->getNome() . '</td>
    <td>' . number_format($item->getValor(), 2, ',', '.') . '</td>
</tr>';
}
echo '</table>';
echo '<br>Valor Bruto: ' . number_format($notaFiscal->getValorBruto(), 2, ',', '.');
echo '<br>Impostos: ' . number_format($notaFiscal->getValorImpostos(), 2, ',', '.');
echo '<hr>';