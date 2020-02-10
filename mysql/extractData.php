<?php

$connection = mysqli_connect("localhost", "root", "aspire@123");
mysqli_select_db($connection, "Data");
$sql = "select *from object where age=20;";
$result = mysqli_query($connection,$sql);
$rows = mysqli_num_rows($result);
if($rows > 0) {
    while($row = mysqli_fetch_assoc($result)) {
        echo $row['name']."\n";
    }
}

