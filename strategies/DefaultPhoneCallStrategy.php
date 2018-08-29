<?php
/**
 * Created by PhpStorm.
 * User: Bboto
 * Date: 2018. 08. 29.
 * Time: 21:59
 */
include_once 'interfaces\IAction.php';

class DefaultPhoneCallStrategy implements IAction
{

    public function call(...$params): void
    {
        // we need the first array since it boxed it twice in ...
        $phoneNumbers = $params[0];
        if (count($phoneNumbers) > 0) {
            $firstPhoneNumber = $phoneNumbers[0];
            echo "<br/>Calling: $firstPhoneNumber";
        } else {
            echo "<br/>Please give me a phone number.";
        }

        echo "<br/>Call ended";
    }
}