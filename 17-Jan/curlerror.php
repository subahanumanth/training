<?php

$ch = curl_init();
$url = "http://localhost/samples/training/currency.php/main.php";
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_exec($ch);

if (curl_errno($ch)) {
    echo curl_error($ch);
}
curl_close($ch);

