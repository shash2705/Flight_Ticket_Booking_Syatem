<html><head></head><link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
<style>

    .go{
        margin:auto;
        display:inline block;
        border:4px solid black;
        padding:5px;
        
    }
    </style>
<body>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "db";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if(isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $firstName = $_POST['first_name'];
    $lastName = $_POST['last_name'];

    $sql = "INSERT INTO userdetails (Username, Password, Email, FirstName, LastName) VALUES ('$username', '$password', '$email', '$firstName', '$lastName')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
        echo"<br>";
        echo"<br>";
        echo "<a href=user.php class=go>Go back</a>";
    
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();

?>
</body>
</html>