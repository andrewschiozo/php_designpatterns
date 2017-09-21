<?php

/**
 * Created by PhpStorm.
 * User: andrews
 * Date: 21/09/17
 * Time: 09:49
 */
require_once 'iEmailBody.php';

abstract class eMailBodyDecorator implements iEmailBody
{

    protected $emailBody;

    public function __construct(iEmailBody $emailBody)
    {
        $this->emailBody = $emailBody;
    }

    abstract public function loadBody();
}