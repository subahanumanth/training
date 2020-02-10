<?php

$connection = new mysqli("localhost", "root", "aspire@123");
$connection->select_db("Data");

$sqlQuery = "insert into object (name,age) values('hanu',20)";
$connection->query($sqlQuery);
$connection->close();
