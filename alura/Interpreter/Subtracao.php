<?php
namespace Interpreter;
use Visitor\Impressora;

/**
 * Created by PhpStorm.
 * User: andrews
 * Date: 28/09/17
 * Time: 13:19
 */
class Subtracao extends Expressao
{

    public function avalia()
    {
        $valorEsquerdo = $this->esquerdo->avalia();
        $valorDireito = $this->direito->avalia();

        return $valorEsquerdo - $valorDireito;
    }

    public function aceita(Impressora $impressora)
    {
        $impressora->visitaSubtracao($this);
    }
}