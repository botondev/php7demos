<?php
/**
 * Created by PhpStorm.
 * User: Botondev
 * Date: 2018. 08. 29.
 * Time: 21:02
 */

public class Resolution implements IClonable {

    protected $width;
    protected $height;

    public function getWidth() : int {
        return $this->width;
    }

    public function setWidth(int $width) {
        $this->width = $width;
    }

    public function getHeight() : int {
        return $this->height;
    }

    public function setHeight(int $height) {
        $this->height = $height;
    }

    public function __construct(int $width,int $height)
    {
        $this->setWidth($width);
        $this->setHeight($height);
    }

    public function clone(): Resolution
    {
        return new Resolution($this->getWidth(), $this->getHeight());
    }
}