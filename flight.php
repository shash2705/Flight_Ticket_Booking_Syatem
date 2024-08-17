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
                <h2>Flight Details</h2>
                <a href="add_flight.html">Add Flight</a>
                <?php
                echo "<a href=home.html class=go>Go back</a>";
         ?>
                
                <div class="container my-4">
    <table class="table">
    <thead>
      <tr>
        <th>FLIGHT ID</th>
        <th>DEPARTURE</th>
        <th>DESTINATION</th>
        <th>AIRLINE</th>
        <th>PRICE</th>
      
      </tr>
    </thead>
    <tbody>
    <?php
        include "database.php";
        $sql = "select * from flights";
        $result = $conn->query($sql);
        if(!$result){
          die("Invalid query!");
        }
        while($row=$result->fetch_assoc()){
          echo "
      <tr>
        <th>$row[flight_number]</th>
        <td>$row[departure_location]</td>
       
        <td>$row[destination_location]</td>
        <td>$row[airline]</td>
        <td>$row[price]</td>
        <td>
                  <a class='btn btn-success' href='flightedit.php?flight_number=$row[flight_number]'>Edit</a>
                  <a class='btn btn-danger' href='flightdelete.php?flight_number=$row[flight_number]'>Delete</a>
                </td>
      </tr>";}
      ?>
      </tbody>

        </div>
    </body>
</html>