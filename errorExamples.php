<?php
/**
 * Created by PhpStorm.
 * User: Botondev
 * Date: 2018. 08. 29.
 * Time: 20:45
 */
declare(strict_types=1);

include_once 'models\iPhoneX.php';

$iPhoneX = new iPhoneX();

$iPhoneX->setCallStrategy(new class implements IAction {
    public function call(...$params): void{
        //we need the null index because it goes through on ... twice
        foreach ($params[0] as $param) {
            if(preg_match( '/[a-zA-Z]/', $param, $matches )){
                throw new InvalidArgumentException("Phone number ($param) is invalid. It contains an invalid string pattern: ".$matches[0][0]);
            }
            echo "<br/>Calling: $param";
        }

        echo "<br/>All calls finished<br/>";
    }
});

//Error example
try{
    $iPhoneX->call("+36 20 01234567");
    $iPhoneX->call("nulla nulla harminchat húsz etc.");
    // $iPhoneX->call(006301234567);

}
catch(Error $e){
    echo "<br/>Error caught:".$e->getMessage();
}
catch(InvalidArgumentException $e){
    echo "<br/>More Specific Exception caught: ".$e->getMessage();
}
catch(Exception $e){
    echo "<br/>General Exception caught: ".$e->getMessage();
}
