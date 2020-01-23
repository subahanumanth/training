<?php

class name {
    public $age = 20;
    public $gender = "male";
    private $privatevar = "its private";
    protected $protectvar = "its protected";

    function iterate () {
       foreach($this as $key=>$value) {
           echo $key."=>".$value." ";
       }
    }
}

$obj = new name();

foreach($obj as $key=>$value) {
    echo $key."=>".$value." ";
    }
$obj->iterate();
