<?php
/**
 * Created by PhpStorm.
 * User: Botondev
 * Date: 2018. 08. 29.
 * Time: 20:45
 */

include_once 'models\iPhoneX.php';

$iPhoneX = new iPhoneX();
// using DefaultPhoneCallStrategy
$iPhoneX->call("+36 30 1234567");
$iPhoneX->call(006301234567);
