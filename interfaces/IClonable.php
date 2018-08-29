<?php
/**
 * Created by PhpStorm.
 * User: Bboto
 * Date: 2018. 08. 29.
 * Time: 21:09
 */

//a proposal for generics is in progress that would be really useful here
//https://wiki.php.net/rfc/generics

public interface IClonable {
    public function clone() : mixed;
}