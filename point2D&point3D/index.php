<?php
include_once "Point2D.php";
include_once "Point3D.php";

$point2d = new Point2D(3,4);
$point2d->toString();
echo "<br/>";
$point3d = new Point3D(4,5,7);
$point3d->toString();