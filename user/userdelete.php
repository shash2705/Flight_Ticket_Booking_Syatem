<?php
    include "database.php";
    
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $sql = "DELETE from `userdetails` where id=$id";
        
        $conn->query($sql);
    }
   
    header('location:userint.php');
    exit;
?>