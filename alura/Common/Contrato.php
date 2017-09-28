<?php
namespace Common;
use Memento\EstadoDeContrato;
use State\iTipoDeContrato;
use State\TipoNovo;

/**
 * Created by PhpStorm.
 * User: andrews
 * Date: 22/09/17
 * Time: 10:17
 */

class Contrato
{

    private $nome;
    private $data;
    private $tipo;

    public function __construct($novoNome, \Datetime $data, iTipoDeContrato $tipo = null)
    {
        $this->nome = $novoNome;
        $this->data = $data;
        if(is_null($tipo))
        {
            $this->tipo = new TipoNovo;
        }
        else
        {
            $this->tipo = $tipo;
        }
    }

    public function setTipo(iTipoDeContrato $novoTipo)
    {
        $this->tipo = $novoTipo;
    }

    public function avanca()
    {
        $this->tipo->avanca($this);
    }

    public function salvaEstado()
    {
        return new EstadoDeContrato(new Contrato($this->nome, $this->data, $this->tipo));
    }
}