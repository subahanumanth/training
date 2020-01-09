<?php

$name = [];
array_push($name,"hanu","siva");
print_r($name);
array_pop($name);
print_r($name);
echo array_rand($name);
print_r(array_slice($name,0,1));

?>
