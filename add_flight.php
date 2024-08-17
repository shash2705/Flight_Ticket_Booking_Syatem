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
    </style>
</head>

<body>
<?php
// Database connection
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

// Prepare and bind SQL statement
$stmt = $conn->prepare("INSERT INTO flights (flight_number, departure_location, destination_location, departure_time, arrival_time, airline, price, available_seats) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
$stmt->bind_param("sssssssi", $flight_number, $departure_location, $destination_location, $departure_time, $arrival_time, $airline, $price, $available_seats);

// Set parameters
$flight_number = $_POST['flight_number'];
$departure_location = $_POST['departure_location'];
$destination_location = $_POST['destination_location'];
$departure_time = $_POST['departure_time'];
$arrival_time = $_POST['arrival_time'];
$airline = $_POST['airline'];
$price = $_POST['price'];
$available_seats = $_POST['available_seats'];

// Execute SQL statement
if ($stmt->execute()) {
    echo "New flight added successfully";
    echo"<br>";
    echo"<br>";
    echo "<a href=home.html class=go>Go back</a>";
} else {
    echo "Error: " . $stmt->error;
}

// Close connection
$stmt->close();
$conn->close();
?>
</body>
</html>