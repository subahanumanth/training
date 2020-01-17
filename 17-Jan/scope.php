<?php

class Birds extends Animal {
    public function call() {
    parent::walk();
}
}

class Animal {
    const name = "lion";
public function name() {
    echo self::name;
}

public static function walk() { 
        echo "class birds";
}
}

$obj = new Birds();
$obj->call();

$obj1 = new Animal();
$obj1->name();
