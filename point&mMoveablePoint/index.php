<?php
include_once "Point.php";
include_once "MoveablePoint.php";


$point = new Point(5,10);
echo "Point: <br/>";
$point->toString();
echo "<br/>";

$move = new MoveablePoint(5,10,15,20);
echo "Move able Point: <br/>";
$move->toString();