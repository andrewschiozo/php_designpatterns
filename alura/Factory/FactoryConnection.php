<?php
namespace Factory;
/**
 * Created by PhpStorm.
 * User: andrews
 * Date: 21/09/17
 * Time: 16:13
 */
class FactoryConnection
{

    public function getConnection()
    {
        $host = 'localhost';
        $user = 'root';
        $pass = 'root';
        $database = 'dashbordah';

        $conn = new \mysqli($host, $user, $pass, $database);

        return $conn;
    }
}