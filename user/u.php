<html>
  <head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <style>
      .table{
      border:3px solid blue;
      border-radius:3px;
      }

    </style></head>
<body>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, full_name,email FROM users";
$result = $conn->query($sql);

?>

<table class="table">
  <thead>
    <tr>
     
     
      <th>ID</th>
      <th>FULL NAME</th>
      <th>EMAIL</th>
     
    
    </tr>
  </thead>
  <tbody>
  <?php
      include "database.php";
      $sql = "select * from users";
      $result = $conn->query($sql);
      if(!$result){
        die("Invalid query!");
      }
      while($row=$result->fetch_assoc()){
        echo "
    <tr>
      
     
   
      <td>$row[id]</td>
      <td>$row[full_name]</td>
      <td>$row[email]</td>
     
     
    </tr>";}
    ?>
    </tbody>
      </table>
    <?php
$conn->close();
?>
</html>