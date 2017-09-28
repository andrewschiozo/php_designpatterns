<?php

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
        $valorEsquerd0 = $this->esquerdo->avalia();
        $valorDireito = $this->direito->avalia();

        return $valorEsquerd0 - $valorDireito;
    }
}