<?php
include("connect.php");

//เช็คจากตาราง User
$sql = "SELECT * FROM stwUser WHERE stwUserName='".$_POST['UserName']."'";
$result = mysqli_query($conn, $sql);
if(mysqli_num_rows($result) == 0){
	echo "true,<span style='color:green'>ชื่อผู้ใช้งานได้</span>";
}
else{ 
	echo "false,<span style='color:red'>ชื่อผู้ใช้งานไม่ได้</span>";
}
?>


