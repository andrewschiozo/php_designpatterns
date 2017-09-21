<?php

/**
 * Created by PhpStorm.
 * User: andrews
 * Date: 21/09/17
 * Time: 09:48
 */
require_once 'iEmailBody.php';

class eMail implements iEmailBody
{

    public function loadBody()
    {
        // TODO: Implement loadBody() method.
        echo 'Este e-mail tem o objetivo de informar que este e-mail tem o objetivo de informar que este e-mail...<br>';
    }
}