<?php
include_once "Circle.php";
include_once "Cylinder.php";

$circle = new Circle(6,"red");
$circle->toString();
echo "circle area: " . $circle->calculateArea() . "<br/>";

$cylinder = new Cylinder(8,"blue",6);
$cylinder->toString();
echo "cylinder volume: " . $cylinder->cylinderVolume() . "<br/>";
