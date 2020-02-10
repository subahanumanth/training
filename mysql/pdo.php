<?php

$servername = "localhost";
$username = "root";
$password = "aspire@123";
$dbname = "Data";

$name= "hanu";
$age = 20;

$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
$stmt = $conn->prepare("INSERT INTO object (name, age) VALUES ('hanu',20)");
$stmt->execute();
