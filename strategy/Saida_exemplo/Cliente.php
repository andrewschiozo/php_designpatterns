<?php

/**
 * Created by PhpStorm.
 * User: andrews
 * Date: 13/09/17
 * Time: 15:47
 */

require_once 'iOutput.php';

class Cliente
{
    private $output;
    private $arrayData;

    public function __construct($codigo, $nome)
    {
        $this->arrayData['codigo'] = $codigo;
        $this->arrayData['nome'] = $nome;
    }

    public function setOutput(iOutput $outputType)
    {
        $this->output = $outputType;
    }

    public function loadOutput()
    {
        return $this->output->load($this->arrayData);
    }
}