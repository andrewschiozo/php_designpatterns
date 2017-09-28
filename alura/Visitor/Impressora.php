<?php
namespace Visitor;
/**
 * Created by PhpStorm.
 * User: andrews
 * Date: 28/09/17
 * Time: 13:35
 */
use Interpreter\Numero;
use Interpreter\Soma;
use Interpreter\Subtracao;

class Impressora
{

    public function visitaSoma(Soma $soma)
    {
        echo "(";
        $soma->getEsquerdo()->aceita($this);
        echo "+";
        $soma->getDireito()->aceita($this);
        echo ")";
    }

    public function visitaSubtracao(Subtracao $subtracao)
    {
        echo "(";
        $subtracao->getEsquerdo()->aceita($this);
        echo "-";
        $subtracao->getDireito()->aceita($this);
        echo ")";
    }

    public function visitaNumero(Numero $numero)
    {
        echo $numero->getNumero();
    }
}