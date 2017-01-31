
<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname ="mydb";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
mysqli_set_charset($conn, "utf8");
date_default_timezone_set("Asia/Bangkok");


?>
