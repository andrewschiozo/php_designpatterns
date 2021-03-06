<?php
namespace Common;
/**
 * Created by PhpStorm.
 * User: andrews
 * Date: 21/09/17
 * Time: 12:09
 */
class NotaFiscal
{
    private $empresa;
    private $cnpj;
    private $itens;
    private $valorBruto;
    private $valorImpostos;
    private $observacoes;
    private $dataEmissao;

    public function __construct($nomeEmpresa, $cnpj, $listaItens, $valorBruto, $valorImpostos, $observacoes, \Datetime $data)
    {
        $this->empresa = $nomeEmpresa;
        $this->cnpj = $cnpj;
        $this->itens = $listaItens;
        $this->valorBruto = $valorBruto;
        $this->valorImpostos = $valorImpostos;
        $this->observacoes = $observacoes;
        $this->dataEmissao = $data;
    }

    public function getEmpresa()
    {
        return $this->empresa;
    }

    public function getCnpj()
    {
        return $this->cnpj;
    }

    public function getItens()
    {
        return $this->itens;
    }

    public function getValorBruto()
    {
        return $this->valorBruto;
    }

    public function getValorImpostos()
    {
        return $this->valorImpostos;
    }

    public function getObservacoes()
    {
        return $this->observacoes;
    }

    public function getDataEmissao()
    {
        return $this->dataEmissao->format('d/m/Y H:i:s');
    }


}