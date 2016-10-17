<?php
$servername = "localhost";
$username = "root";
$password = "445566";
$dbname ="mydb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
mysqli_set_charset($conn, "utf8");
// Check connection

?>
