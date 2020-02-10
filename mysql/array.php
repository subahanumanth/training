<?php

$dbServerName = "localhost";
$dbUserName = "root";
$dbPassword = "aspire@123";
$dbName = "Data";

$connection = mysqli_connect($dbServerName, $dbUserName, $dbPassword, $dbName);

if($connection) {
    echo "database connected";
} else {
    echo "not connected";
}
mysqli_select_db($connection,"Data");

$name = $_POST['name'];
$age = $_POST['age'];
$gender = "male";

    $sqlQuery = "insert into object (name, age, gender) values ('$name', '$age', '$gender')";
    mysqli_query($connection,$sqlQuery);


?>

<html>
<form action="array.php" method="POST">
Name : <input type="text" name="name"><br><br>
Age : <input type="text" name="age"><br><br>
<input type="checkbox" name="gender[]" value="Male">Male</input>
<input type="checkbox" name="gender[]" value="Female">Female</input>
<input type="submit" name="submit">
</form>
</html>



