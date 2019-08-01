<?php
include_once "Point.php";
include_once "MovablePoint.php";
$point = new Point(1.2,2.3);
$point->toString();
echo "<br>";
$mp = new MovablePoint(1.5,2.5,5.2,6.1);
$mp->toString();
echo "<br>Move: <br>";
$mp->move();
$mp->toString();
