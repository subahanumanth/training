<?php

$a = 30;
try {
    if ($a > 6) {
        echo "Are crct";
    }
    else {
        throw new exception("not crct");
    }
} catch(exception $e) {
    echo "error : ".$e->getmessage();
}
