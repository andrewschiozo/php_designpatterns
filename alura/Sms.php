<?php

/**
 * Created by PhpStorm.
 * User: andrews
 * Date: 21/09/17
 * Time: 14:06
 */
require_once 'iAcoesBuildNota.php';

class Sms implements iAcoesBuildNotaFiscal
{

    public function executa(NotaFiscal $nf)
    {
        echo '<br>Eu enviei o sms...<br>';
    }
}