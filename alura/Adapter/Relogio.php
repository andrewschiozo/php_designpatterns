<?php
namespace Adapter;
use DateTimeZone;

/**
 * Created by PhpStorm.
 * User: andrews
 * Date: 28/09/17
 * Time: 14:11
 */
class Relogio extends \DateTime implements iData
{
    public function __construct($time = 'now', DateTimeZone $timezone = null)
    {
        parent::__construct($time, $timezone);
    }

    public function getDia()
    {
        return $this->format('d');
    }

    public function getMes()
    {
        return $this->format('m');
    }
}