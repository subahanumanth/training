<?php
$array = $cars = array
  (
  array("Volvo",22,18),
  array("BMW",15,13),
  array("Saab",5,2),
  array("Land Rover",17,15)
  );
file_put_contents('file.txt', print_r($array,true));
