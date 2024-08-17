<html>
    <head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <style>

    .go{
        margin:auto;
        display:inline block;
        border:4px solid black;
        padding:5px;
       
        
    }
    
    head{
      dispaly:inline-block;
    }
  
  
            .table{
                display:block;

            }

</style>
    </head>
    <body>
        
            <div class="two">
              <div class="head">
                <h2>Passenger Details</h2>
          </div>
                <?php
                echo "<a href=user.php class=go>Go back</a>";
         ?>
                
                <div class="container my-4">
    <table class="table">
    <thead>
      <tr>
       
       
        <th>FIRSTNAME</th>
        <th>LASTNAME</th>
        <th>AGE</th>
        <th>GENDER</th>
        <th>NATIONALITY</th>
        <th>PHONE NO</th>
        <th>ADHAAR NO</th>
      
      </tr>
    </thead>
    <tbody>
    <?php
        include "database.php";
        $sql = "select * from passenger";
        $result = $conn->query($sql);
        if(!$result){
          die("Invalid query!");
        }
        while($row=$result->fetch_assoc()){
          echo "
      <tr>
        
       
     
        <td>$row[firstname]</td>
        <td>$row[lastname]</td>
        <td>$row[age]</td>
        <td>$row[gender]</td>
        <td>$row[nationality]</td>
        <td>$row[phoneno]</td>
        <td>$row[adhaarno]</td>
       
      </tr>";}
      ?>
      </tbody>

        </div>
    </body>
</html>