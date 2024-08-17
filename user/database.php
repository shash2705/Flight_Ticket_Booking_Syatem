<?php

$hostName = "localhost";
$dbUser = "root";
$dbPassword = "root";
$dbName = "new";
$conn = mysqli_connect($hostName, $dbUser, $dbPassword, $dbName);
if (!$conn) {
    die("Something went wrong;");
}

?>