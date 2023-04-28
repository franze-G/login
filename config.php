<?php

$sname = "localhost";
$username ="root";
$password ="";

$db_name = "login";

$conn = mysqli_connect($sname, $username, $password, $login);

if (!$conn){
    echo "Connection failed!";
}
