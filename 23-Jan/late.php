<?php

class name {
    protected static $value = "hanu";
    public static function display() {
        echo static::$value;
    }
}

class age extends name {
    protected static $value = "hanumanth";
    public static function display() {
        echo self::$value;
    }
}

age::display();

?>
