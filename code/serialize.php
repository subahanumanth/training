
<?php

class Country {

        public function countryName() {

                echo "India";
        }
}

$obj = new Country();

$s = serialize($obj);
file_put_contents("training",$s);

file_get_contents($s);
$obj = unserialize($s);

$obj->countryName();


