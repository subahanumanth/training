<?php

abstract class name{

	abstract function sayhi();
}

class car extends name{

	function sayhi(){

	echo "hi";

	}
}


class hello extends name{

	function sayhi(){

	echo "hello";

	}

}

$obj = new hello();
$obj->sayhi();
