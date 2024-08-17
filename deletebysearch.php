
<?php
include "database.php";
    
  
  if(isset($_POST['submit'])){
    $id=$_POST['id'];
 
   ?>
   <table class="table"><tr>
    <th>ID</th>
    <th>USERNAME</th>
    <th>FIRSTNAME</th>
    <th>LASTNAME</th>
  </tr>
 
     <?php
        include "database.php";
          $sql="SELECT * FROM userdetails WHERE id=$id";
        $result = $conn->query($sql);
        if(!$result){
          die("Invalid query!");
        }
        while($row=$result->fetch_assoc()){
          echo "
      <tr>
        <td>$row[id]</td>
        <td>$row[Username]</td>
       
        
        <td>$row[Firstname]</td>
        <td>$row[Lastname]</td>
   </tr>";
 
   
   
        }}
  $conn->close();
  ?>
  <html>
    <head>
       <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
<style>


.table{
                display:inline-block;
                margin:auto;

            }
.cen{
  text-align:center;
}
  </style>
  
</head>
<body>
  <br>
  <h2 class="cen">search user</h2>
    <form method="POST" >
        <label for="id">enter the id</label>
        <input type="text" id="id" name="id" required>
        <button type="submit" name="submit">search </button>
</form>
      
</body>
</html>
