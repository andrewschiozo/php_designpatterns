<?php
/**
 * Created by PhpStorm.
 * User: andrews
 * Date: 28/09/17
 * Time: 14:59
 */

namespace Command;

class FilaDeExecucao
{
    private $listaDeComandos;

    public function __construct()
    {
        $this->listaDeComandos = array();
    }

    public function add(Comando $comando)
    {
        $this->listaDeComandos[] = $comando;
    }

    public function processa()
    {
        foreach($this->listaDeComandos as $comando)
        {
            $comando->executa();
        }
    }
}