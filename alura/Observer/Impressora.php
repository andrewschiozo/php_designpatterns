<?php
namespace Observer;
/**
 * Created by PhpStorm.
 * User: andrews
 * Date: 21/09/17
 * Time: 13:55
 */
use Common\NotaFiscal;

class Impressora implements iAcoesBuildNotaFiscal
{

    public function executa(NotaFiscal $nf)
    {
        echo '<br> Eu mandei para a impressora <br>';
    }
}