<?php
/**
 * Created by PhpStorm.
 * User: andrews
 * Date: 13/09/17
 * Time: 15:08
 */

require_once 'DataBase.php';

$Conexao = DataBase::getInstance();
$OutraConexao = DataBase::getInstance();

if($Conexao === $OutraConexao)
{
    echo 'Mesma instancia';
}
else
{
    echo 'Instancias diferentes';
}
