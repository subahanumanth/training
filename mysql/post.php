<?php
include("test.php");

$name = "hanumanth";
$age = 20;


$dbServerName = "localhost";
$dbUserName = "root";
$dbPassword = "aspire@123";
$dbName = "Data";

$connection = mysqli_connect($dbServerName,$dbUserName,$dbPassword,$dbName);
mysqli_select_db($connection,"Data");

mysqli_query($connection,"insert into test (name,age) values('$name','$age')");
mysqli_close($connection);

?>
