<?php
/**
 * Created by PhpStorm.
 * User: Bboto
 * Date: 2018. 08. 29.
 * Time: 21:48
 */

interface IAction {
    public function call(...$params): void; // PHP 7.1
}