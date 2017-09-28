<?php
namespace Facade;
/**
 * Created by PhpStorm.
 * User: andrews
 * Date: 28/09/17
 * Time: 15:33
 */
use Common\Contrato;

class EmpresaFacade
{
    private static $instance = null;

    private function __construct(){}

    public static function getInstance()
    {
        if(is_null(self::$instance))
        {
            self::$instance = new EmpresaFacade();
        }
        return self::$instance;
    }

    public function criaContrato($nome, $data, $tipo = null)
    {
        return new Contrato($nome, $data, $tipo);
    }

    public function criarItem()
    {

    }

    public function criarPedido()
    {

    }

    public function finalizarPedido()
    {

    }


}