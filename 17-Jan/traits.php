<?php

trait A {
    public function RAM() {
        echo "4GB";
    }
}
trait B {
    public function ROM() {
	echo "32GB";
    }
}
interface camera {
    public function flash();
}

class Phone implements camera{
    use A,B; 
    public function flash() {
        echo "flash";
}

}

$obj = new Phone();
$obj->Rom();
$obj->flash();
