<?php
/**
 * Created by PhpStorm.
 * User: Botondev
 * Date: 2018. 08. 29.
 * Time: 21:53
 */

public interface IDelegate {
    public function call(...$params): bool;
}