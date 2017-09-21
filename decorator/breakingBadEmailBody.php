<?php

/**
 * Created by PhpStorm.
 * User: andrews
 * Date: 21/09/17
 * Time: 09:55
 */
require_once 'eMailBodyDecorator.php';

class breakingBadEmailBody extends eMailBodyDecorator
{
    public function loadBody()
    {
        echo "I'm not in danger. I'm the danger!<br>";
        $this->emailBody->loadBody();
    }
}