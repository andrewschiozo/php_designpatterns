<?php
namespace Interpreter;
use Visitor\Impressora;

/**
 * Created by PhpStorm.
 * User: andrews
 * Date: 22/09/17
 * Time: 11:00
 */
interface iExpressao
{

    public function avalia();

    public function aceita(Impressora $impressora);
}