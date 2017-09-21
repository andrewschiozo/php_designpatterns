<?php
namespace Entidade;
/**
 * Created by PhpStorm.
 * User: andrews
 * Date: 18/09/17
 * Time: 10:06
 */
use State\EstadoEmAprovacao;
use Interfaces\iEstadoDeUmOrcamento;

class Orcamento
{
    private $valor;
    private $itens;
    private $estado;

    public function __construct()
    {
        $this->valor = 0;
        $this->itens = array();
        $this->estado = new EstadoEmAprovacao();
    }

    public function addItem(Item $novoItem)
    {
        $this->itens[] = $novoItem;
        $this->setValor($this->getValor() + $novoItem->getValor());
    }

    public function getValor()
    {
        return $this->valor;
    }

    public function getItens()
    {
        return $this->itens;
    }

    public function getEstado()
    {
        return $this->estado;
    }

    public function setEstado(iEstadoDeUmOrcamento $novoEstado)
    {
        $this->estado = $novoEstado;
    }

    public function setValor($novoValor)
    {
        $this->valor = $novoValor;
    }

    public function aplicaDesconto()
    {
        $this->estado->aplica($this);
    }

    public function aprova()
    {
        $this->estado->aprova($this);
    }

    public function reprova()
    {
        $this->estado->reprova($this);
    }

    public function finaliza()
    {
        $this->estado->finaliza($this);
    }

}