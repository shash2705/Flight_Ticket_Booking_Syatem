<html>
    <head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
<style>
  
             a{
                border:3px solid blue;
                display: inline-block;
                padding:3px;
                text-decoration:double;
                margin:auto ;
            }
            .table{
                display:block;

            }

</style>
    </head>
    <body>
        
            <div class="two">
                <h2>user details</h2>
                <a href="manageuser.html">add user</a><br>
                
                <div class="container my-4">
    <table class="table">
    <thead>
      <tr>
        <th>ID</th>
        <th>USERNAME</th>
        <th>EMAIL</th>
        <th>FIRSTNAME</th>
        <th>LASTNAME</th>
      
      </tr>
    </thead>
    <tbody>
    <?php
        include "database.php";
        $sql = "select * from userdetails";
        $result = $conn->query($sql);
        if(!$result){
          die("Invalid query!");
        }
        while($row=$result->fetch_assoc()){
          echo "
      <tr>
        <th>$row[id]</th>
        <td>$row[Username]</td>
       
        <td>$row[Email]</td>
        <td>$row[Firstname]</td>
        <td>$row[Lastname]</td>
        <td>
                  <a class='btn btn-success' href='useredit.php?id=$row[id]'>Edit</a>
                  <a class='btn btn-danger' href='userdelete.php?id=$row[id]'>Delete</a>
                </td>
      </tr>";}
      ?>
      </tbody>

        </div>
    </body>
</html>