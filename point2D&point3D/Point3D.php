<?php
include_once "Point2D.php";

class Point3D extends Point2D
{
    public $z;

    public function __construct($x, $y, $z)
    {
        parent::__construct($x, $y);
        $this->z = $z;
    }

    /**
     * @return mixed
     */
    public function getZ()
    {
        return $this->z;
    }

    /**
     * @param mixed $z
     */
    public function setZ($z): void
    {
        $this->z = $z;
    }

    public function setXYZ($x,$y,$z)
    {
        parent::setXY($x,$y);
        $this->z = $z;
    }

    public function getXYZ()
    {
        return $arr = [$this->x, $this->y, $this->z];
    }

    public function toString()
    {
        echo $this->x . "," . $this->y . "," .$this->z ;
    }
}