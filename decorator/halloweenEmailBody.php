<?php

/**
 * Created by PhpStorm.
 * User: andrews
 * Date: 21/09/17
 * Time: 09:51
 */
require_once 'eMailBodyDecorator.php';

class halloweenEmailBody extends eMailBodyDecorator
{

    public function loadBody()
    {
        echo 'Feliz dia das bruxas =) Muhuhuhahahha!!<br>';
        $this->emailBody->loadBody();
    }
}