<?php

/**
 * Created by PhpStorm.
 * User: andrews
 * Date: 28/09/17
 * Time: 13:20
 */
abstract class Expressao implements iExpressao
{
    protected $esquerdo;
    protected $direito;

    public function __construct(iExpressao $ladoEsquerdo, iExpressao $ladoDireito)
    {
        $this->esquerdo = $ladoEsquerdo;
        $this->direito = $ladoDireito;
    }
}