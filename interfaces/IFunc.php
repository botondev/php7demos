<?php
/**
 * Created by PhpStorm.
 * User: Botondev
 * Date: 2018. 08. 29.
 * Time: 21:50
 */

public interface IFunc {
    public function call(...$params): mixed;
}