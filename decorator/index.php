<?php
/**
 * Created by PhpStorm.
 * User: andrews
 * Date: 21/09/17
 * Time: 10:14
 */

require_once 'eMail.php';
require_once 'breakingBadEmailBody.php';
require_once 'halloweenEmailBody.php';
$email = new eMail();


echo 'E-mail padrao:<br><br>';
$email->loadBody();
echo '<hr />';

echo 'E-mail padrao com e-mail do dia das bruxas:<br><br>';
$halloweenEmail = new halloweenEmailBody($email);
$halloweenEmail->loadBody();
echo '<hr />';

echo 'E-mail padrao com e-mail do Breaking Bad:<br><br>';
$breakingBadEmail = new breakingBadEmailBody($email);
$breakingBadEmail->loadBody();
echo '<hr />';

echo 'E-mail padrao com e-mail do dia das bruxas e com e-mail do Breaking Bad:<br><br>';
$halloweenEmail = new halloweenEmailBody($breakingBadEmail);
$halloweenEmail->loadBody();