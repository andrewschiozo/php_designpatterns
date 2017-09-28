<?php
namespace Interpreter;
use Visitor\Impressora;

/**
 * Created by PhpStorm.
 * User: andrews
 * Date: 22/09/17
 * Time: 10:59
 */

class Numero implements iExpressao
{

    private $numero;

    public function __construct($inteiro)
    {
        $this->numero = $inteiro;
    }

    public function avalia()
    {
        return $this->numero;
    }

    public function getNumero()
    {
        return $this->numero;
    }

    public function aceita(Impressora $impressora)
    {
        $impressora->visitaNumero($this);
    }
}