<?php

$a = 12211212;
$s = (string)$a;
$b = 2;
$num = strlen($s);
$count = 0;

for($i=0;$i<$num;$i++) {
    if($s[$i] == $b) {
        $count++;
    }
}

echo $count;
