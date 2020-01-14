<?php

class Price {

	private $price;

	public function onlyNumber(int $price) {

		echo $price;

	}
}

$obj = new Price();
$obj->onlyNumber("hello");
