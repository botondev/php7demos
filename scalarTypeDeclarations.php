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

// passing a just in place implemented strategy
// in a form of an anonymous class
$iPhoneX->setCallStrategy(new class implements IAction {
   public function call(...$params): void{
       //we need the null index because it goes through on ... twice
       foreach ($params[0] as $param) {
           echo "<br/>Calling: $param";
       }

       echo "<br/>All calls finished<br/>";
   }
});

echo "<br/><br/>--------------------<br/>";
// using anonymous class that implements IAction
$iPhoneX->call("+36 30 1234567", "+36 20 1234657", "+36 10 5464567");

echo "<br/><br/>--------------------<br/>";

// contains new unicode style
echo $iPhoneX->getBrand();
