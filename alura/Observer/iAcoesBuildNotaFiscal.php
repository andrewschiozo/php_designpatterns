<?php
namespace Observer;
/**
 * Created by PhpStorm.
 * User: andrews
 * Date: 21/09/17
 * Time: 13:58
 */

use Entidade\NotaFiscal;

interface iAcoesBuildNotaFiscal
{
    public function executa(NotaFiscal $nf);
}