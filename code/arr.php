<?php

$name = ["hanu"=>36,"bharath"=>21,"love"=>100,"ajay"=>1];
$keys = array_keys($name);
sort($keys);

for($i=0;$i<count($keys);$i++){

	echo $keys[$i]." : ".$name[$keys[$i]];

}


