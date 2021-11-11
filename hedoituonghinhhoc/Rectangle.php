<?php

class Rectangle extends Shape
{
    public $width;
    public $height;

    public function __construct($name, $height, $width)
    {
    parent::__construct($name);
    $this->height = $height;
    $this->width = $width;
    }

    public function calculateArea()
    {
        return $this->width * $this->height;
    }

    public function calculatePerrimeter()
    {
        return ($this->height + $this->width) *2;
    }
}