<?php

class Car {
     public $color = "red";
}

$car = new Car();
$car1 = 10;
$car1 = clone $car;
$car1->color = "pink";
print_r($car1->color);
print_r($car->color);
