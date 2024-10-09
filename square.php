<?php
include_once("shapeInterface.php");

class Square implements Shape{

    private $sideLength;

    public function __construct($a) {
        $this->sideLength = $a;
    }

    public function calculateArea(): float {
      return  $this->sideLength* $this->sideLength;
    }
}
