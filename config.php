<?php
$servername = "localhost";
$username = "root";
$password = "2004";
$database = "dailyexpense";

// Create connection
$con = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
?>
