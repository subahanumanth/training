<?php

class Car {
	public $color = "red";
}

$obj =  new Car();
$obj1 = $obj;
$obj1->color = "green";
$obj1 = null;

echo $obj->color;

$obj1 = & $obj;
$obj1->color = "pink";
echo $obj->color;

?>
