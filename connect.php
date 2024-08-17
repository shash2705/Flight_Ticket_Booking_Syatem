<?php
$servername="localhost";
$username="root";
$password="";
$db_name="users";
$conn= new mysqli($servername,$username,$password,$db_name);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>