<?php

/**
 * Created by PhpStorm.
 * User: andrews
 * Date: 21/09/17
 * Time: 13:56
 */
require_once 'iAcoesBuildNota.php';

class DaoNotaFiscal implements iAcoesBuildNotaFiscal
{

    public function executa(NotaFiscal $nf)
    {
        echo '<br> Eu salvei no banco <br>';
    }
}