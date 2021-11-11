<?php
include_once "Circle.php";

class Cylinder extends Circle
{
    public $height;

    public function __construct($radius, $color, $height)
    {
        parent::__construct($radius, $color);
        $this->height = $height;
    }

    public function cylinderVolume()
    {
        return parent::calculateArea() * $this->height;
    }

    public function toString()
    {
        echo "radius: " . $this->radius . "<br/>";
        echo "color: " . $this->color . "<br/>";
        echo "height: " . $this->height . "<br/>";
    }
}