<?php
setcookie("name","Daniel",time()+86400);
echo $_COOKIE["name"];
$_SESSION['name'] = "10";

