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
                <h2>Payment Details</h2>
                <?php
                echo "<a href=user.php class=go>Go back</a>";
         ?>
         
                
                <div class="container my-4">
    <table class="table">
    <thead>
      <tr>
        <th>FLIGHT NUMBER</th>
        <th>USERNAME</th>
       
        <th>FIRSTNAME</th>
        <th>LASTNAME</th>
        <th>PHONE NUMBER</th>
        <th>AMOUNT</th>
      </tr>
    </thead>
    <tbody>
    <?php
        include "database.php";
        $sql = "select * from payment";
        $result = $conn->query($sql);
        if(!$result){
          die("Invalid query!");
        }
        while($row=$result->fetch_assoc()){
          echo "
      <tr>
        <th>$row[flight_id]</th>
        <td>$row[username]</td>
       
     
        <td>$row[firstname]</td>
        <td>$row[lastname]</td>
        <td>$row[phoneno]</td>
        <td>$row[price]</td>
      </tr>";}
      ?>
      </tbody>

        </div>
    </body>
</html>