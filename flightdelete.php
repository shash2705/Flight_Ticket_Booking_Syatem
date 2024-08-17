<?php
    include "database.php";
    if(isset($_GET['flight_number'])){
        $id = $_GET['flight_number'];
        $sql = "DELETE from `flights` where flight_number=$id";
        $conn->query($sql);
    }
    header('location:flight.php');
    exit;
?>