<?php
namespace Interpreter;
use Visitor\Impressora;

/**
 * Created by PhpStorm.
 * User: andrews
 * Date: 22/09/17
 * Time: 10:59
 */

class Soma extends Expressao
{

    public function avalia()
    {
        $valorEsquerdo = $this->esquerdo->avalia();
        $valorDireito = $this->direito->avalia();

        return $valorEsquerdo + $valorDireito;
    }

    public function aceita(Impressora $impressora)
    {
        $impressora->visitaSoma($this);
    }
}