<?php
include_once("circle.php");
include_once("shapeInterface.php");
include_once("square.php");

$shapes = [
    new Circle(5),
    new Square(4),
];

foreach ($shapes as $shape) {
if ($shape instanceof shape) {  
        echo "<br>";
        echo 'This is a shape';
        echo "<br>";
}
echo "Nombre de la clase: " . get_class($shape);
echo "<br>";
echo "Área: ".$shape->calculateArea();
}