<?php
/**
 * Created by PhpStorm.
 * User: Botondev
 * Date: 2018. 08. 29.
 * Time: 21:19
 */

class Size implements IClonable
{
    protected $height;
    protected $width;
    protected $depth;

    public function getHeight(): double {
        return $this->height;
    }

    public function setHeight(double $height) {
        $this->height = $height;
    }

    public function getWidth(): double {
        return $this->width;
    }

    public function setWidth(double $width) {
        $this->width = $width;
    }

    public function getDepth(): double {
        return $this->depth;
    }

    public function setDepth(double $depth) {
        $this->depth = $depth;
    }

    public function __construct(double $height, double $width, double $depth)
    {
        $this->setHeight($height);
        $this->setWidth($width);
        $this->setDepth($depth);
    }

    public function clone(): object
    {
        return new Size(
            $this->getHeight(),
            $this->getWidth(),
            $this->getDepth()
            );
    }
}