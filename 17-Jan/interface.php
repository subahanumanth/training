<?php
interface PhoneModel {
    public function samsung();
    public function realme();
    public function apple();
}

class Phone {
    public function samsung() {
    echo "it is samsung";
    }
    public function realme() {
    echo "it is realme";
    }
    public function apple() {
    echo "it is apple";
    }
}

$obj = new Phone();
$obj->apple();
