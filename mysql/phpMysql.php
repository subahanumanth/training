<?php

if(isset($_POST["submit"])) {
    $name = $_POST["name"];
    $age = $_POST["age"];
    echo $name." ".$age;

$dbServerName = "localhost";
$dbUserName = "root";
$dbPassword = "aspire@123";
$dbName = "Data";

$connection = mysqli_connect($dbServerName,$dbUserName,$dbPassword,$dbName);

if($connection) {
    echo "database connected";
} else {
    echo "not connected";
}
mysqli_select_db($connection,"Data");

$query = "insert into person (name,age) values('$name','$age')";
if($mysqli_query($connection,$query)) {
    echo "Inserted into person table";
} else {
    echo "Not inserted";
}

mysqli_close($connection);
}
?>

<html>
<form action="form.php" method="POST">
Name : <input type="text" name="name"><br><br>
Age : <input type="text" name="age"><br><br>
<input type="submit" name="submit">
</form>
</html>


