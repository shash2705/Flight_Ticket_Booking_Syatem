<?php
include("database.php");
if(isset($_POST["submit"])){
    $fid=$_POST["flid"];
    $user=$_POST["user"];
    $first=$_POST["first"];
    $last=$_POST["last"];  
    $gender=$_POST["gen"];
    $age=$_POST["age"];
    $nation=$_POST["nation"];
    $phone=$_POST["phone"];
    $acc=$_POST["account"];
    $dep=$_POST["depart"];
    $dest=$_POST["dest"];
    $price=$_POST["price"];
    $adhar=$_POST["adhaar"];
   
    $sql5 = "SELECT * FROM flights WHERE flight_number= '$fid'";
            $result = mysqli_query($conn, $sql5);
            $u = mysqli_fetch_array($result, MYSQLI_ASSOC);
    $sql4 = "SELECT * FROM userdetails WHERE username= '$user'";
            $result = mysqli_query($conn, $sql4);
            $p = mysqli_fetch_array($result, MYSQLI_ASSOC);
if ($u && $p) {
    
    $sql = "INSERT INTO ticket (f_no,username,firstname,lastname,gender,age,nationality,phoneno,account,fromt,tot,price) VALUES ('$fid','$user','$first','$last','$gender','$age','$nation','$phone','$acc','$dep', '$dest','$price')";
    $sq2="INSERT INTO payment(flight_id,username,firstname,lastname,accountno,price,phoneno) VALUES ('$fid','$user','$first','$last','$acc','$price','$phone')";
    $sql3= "INSERT INTO passenger (flight_id,username,firstname,lastname,gender,age,nationality,phoneno,adhaarno) VALUES ('$fid','$user','$first','$last','$gender','$age','$nation','$phone','$adhar')";
    if ($conn->query($sql) === TRUE && $conn->query($sq2) === TRUE && $conn->query($sql3) === TRUE ) {
        echo"<script>alert('done')</script>";
        }
        else{
            echo"<script>alert('error')</script>";
        }
    }
    else{
        echo"<script>alert('no flight found or username found')</script>";
    }
}

    $conn->close();

?>

<!DOCTYPE html>
<html>
    <head>
        <title>

            Ticket Booking</title>
            <style>
                
                div.center{
                    border:1px solid black;
                    margin:auto;
                    width:50%;
                    padding:10px;

                }
                a{
                border:3px solid blue;
                display: inline-block;
                padding:3px;
                text-decoration:double;
                margin:auto ;
            }
                h2{
                    text-align:center;
                }
                </style>
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"></head>
    <body class="one"
    >
        <h2>Ticket Booking</h2><br>
        <?php
                echo "<a href=user.php class=go>Go back</a>";
         ?>
        <br><div class="center">
        <form method="post">
            <label>flight_id:</label>
            <input type="number" name="flid" class="flight"/><br><br>
            <label>username:</label>
            <input type="text" name="user" class="fligt"/><br><br>
            <label>firstname:</label>
            <input type="text" name="first" class="fght"/><br><br>
            <label>lastname:</label>
            <input type="text" name="last" class="flht"/><br><br>
            <label>gender:</label>
            <input type="text" name="gen" class="ft"/><br><br>
            <label>age:</label>
            <input type="number" name="age" class="flight"/><br><br>
            <label>nationality:</label>
            <input type="text" name="nation" class="flight"/><br><br>
            <label>account no:</label>
            <input type="text" name="account" class="flght"/><br><br>
            <label>phoneno:</label>
            <input type="number" name="phone" class="flight"/><br><br>
            <label>adhaarno:</label>
            <input type="number" name="adhaar" class="flight"/><br><br>
            <select name="depart">
                <?php
                include("database.php");
                $co=mysqli_query($conn,"select * from flights");
                while($c=mysqli_fetch_array($co)){
                    ?>
                    <option value="<?php echo $c['departure_location']?>"><?php echo $c["departure_location"]?>
                    <?php
                }?>
                </select>
                <select name="dest">
                <?php
                include("database.php");
                $co=mysqli_query($conn,"select * from flights");
                while($c=mysqli_fetch_array($co)){
                    ?>
                    <option value="<?php echo $c['destination_location']?>"><?php echo $c["destination_location"]?>
                    <?php
                }?>
                </select>
                <select name="price">
                <?php
                include("database.php");
                $co=mysqli_query($conn,"select * from flights");
                while($c=mysqli_fetch_array($co)){
                    ?>
                    <option value="<?php echo $c['price']?>"><?php echo $c["price"]?>
                    <?php
                }?>
                </select>
                

                <button type="submit" name="submit" >submit</button>
            </div>
            </body>
 </html>