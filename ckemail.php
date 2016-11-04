<?php
include("connect.php");

//เช็คจากตาราง User
$sql = "SELECT * FROM stwUser WHERE stwEmail='".$_POST['Email']."'";
$result = mysqli_query($conn, $sql);
if(mysqli_num_rows($result) == 0){
	echo "true,<span style='color:green'>อีเมลล์ใช้งานได้</span>";
}
else{ 
	echo "false,<span style='color:red'>อีเมลล์ใช้งานไม่ได้</span>";
}
?>


