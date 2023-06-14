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
    // Retrieve form data
    $name = $_POST["name"];
    $collegeid = $_POST["password"];

    // Insert data into the database
    $sql = "SELECT * FROM register WHERE name='$name' AND collegeid='$collegeid'";
    $run = $conn->query($sql);


    if ($run->num_rows > 0) {

        header("Location: home.html");
    } else {
        // echo "Invalid Credential";
        header("Location: home.html");
    }
}




$conn->close();
?>