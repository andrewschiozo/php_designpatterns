<?php
namespace Bridge;
/**
 * Created by PhpStorm.
 * User: andrews
 * Date: 28/09/17
 * Time: 14:16
 */
class GoogleMaps
{

    public function getMapa()
    {
        $url = "https://maps.google.com/maps?q=rua+vergueiro";

        return $url;
    }
}