<?php
namespace Builder;
/**
 * Created by PhpStorm.
 * User: andrews
 * Date: 21/09/17
 * Time: 12:13
 */

use Observer\iAcoesBuildNotaFiscal;
use Common\Item;
use Common\NotaFiscal;

class BuilderNotaFiscal
{
    private $empresa;
    private $cnpj;
    private $itens;
    private $valorBruto;
    private $valorImpostos;
    private $observacoes;
    private $dataEmissao;

    private $acoesBuild;

    public function __construct()
    {
        $this->valorBruto = 0;
        $this->valorImpostos = 0;
        $this->itens = array();
        $this->acoesBuild = array();
    }

    public function addAcao(iAcoesBuildNotaFiscal$Acao)
    {
        $this->acoesBuild[] = $Acao;
        return $this;
    }

    public function comEmpresa($nomeEmpresa)
    {
        $this->empresa = $nomeEmpresa;
    }

    public function comCnpj($cnpj)
    {
        $this->cnpj = $cnpj;
    }

    public function addItem(Item $novoItem)
    {
        $this->itens[] = $novoItem;
        $this->valorBruto += $novoItem->getValor();
        $this->valorImpostos += $novoItem->getValor() * 0.2;
    }

    public function comObservacoes($observacao)
    {
        $this->observacoes = $observacao;
        return $this;
    }

    public function naData(\Datetime $data = null)
    {
        if(is_null($data))
        {
            $this->dataEmissao = new \Datetime;
        }
        else
        {
            $this->dataEmissao = $data;
        }
        return $this;
    }

    public function build()
    {
        $nf = new NotaFiscal($this->empresa, $this->cnpj, $this->itens, $this->valorBruto, $this->valorImpostos, $this->observacoes, $this->dataEmissao);

        foreach($this->acoesBuild as $Acao)
        {
            $Acao->executa($nf);
        }
        return $nf;
    }




}