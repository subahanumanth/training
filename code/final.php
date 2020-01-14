<?php

class BaseClass {

	public function test() {

		echo "This is test";
	}

	final public function other() {

		echo "This is other function";

	}
}

class ChildClass extends BaseClass {

	public function other() {

		echo "This is child other";
	}
}

$obj = new BaseClass();
$obj->test();
