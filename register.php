<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "agumentic";

// Create a connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection

if (mysqli_connect_error()) {
    echo mysqli_connect_error();
    exit();
} else {
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Retrieve form data
        $name = $_POST["name"];
        $collegeid = $_POST["password"];
        $role = $_POST["role"];
    
        // Insert data into the database
        $sql = "INSERT INTO `register` ( `name`, `collegeid`, `role`) VALUES (' $name', ' $collegeid', '$role')";
        
    
        if ($conn->query($sql) === TRUE) {
            header("Location: index.html");
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
}



$conn->close();
?>
