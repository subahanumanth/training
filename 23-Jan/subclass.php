
<?php

include("autoload.php");

class second extends name {
    function sayhi() {
        echo "hi";
    }
}


$obj = new second ();
$obj->sayhi();
$obj->display();
