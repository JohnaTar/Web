<?php
$servername = "localhost";
$username = "root";
$password = "445566";
$dbname ="mydb";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
mysqli_set_charset($conn, "utf8");
date_default_timezone_set("Asia/Bangkok");
if (isset($_POST['kuy'])) {
	$data = $_POST['kuy'];
	$sql = "INSERT INTO `stwContent` (`stwContent_id`, `stwLesson_id`, `stwContent_detail`) VALUES ('', '1', '$data')";
	$result = mysqli_query($conn, $sql);
	if ($result) {
		echo "8;p";
	}else{
		echo "lyl";
	}





}




$ss ="select * from stwContent";
$e =mysqli_query($conn,$ss);
while($row=mysqli_fetch_array($e,MYSQLI_ASSOC)){
	echo $row['stwContent_detail'];
}


?>