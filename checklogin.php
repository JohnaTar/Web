<?php
session_start();
//**************connect DB
include("connect.php");

	$Username = $_POST['Username'];
	$Password = md5($_POST['Password']); // ประกาศตัวแปร


	$sql = "SELECT * FROM stwUser 
						WHERE stwUsername = '$Username'
						AND stwPassword = '$Password' ";
	$result = $conn->query($sql);	
	$num = $result->num_rows;
	if($num <= 0){
		echo "<script>";
		echo "alert(\"Username และ password ไม่ถูกโว้ย\");"; 
		echo "window.history.back()";
	echo "</script>";
	} else{
		while ($user = $result->fetch_array()){ 
		//admin**********************************************************************
			if ($user['stwStatus_id']== 1)
			 {
				$_SESSION['ses_id'] = session_id();
				$_SESSION['stwUsername'] = $user['stwUsername'];
				$_SESSION['status'] =1;


		echo "<meta http-equiv='refresh' content ='1;URL=admin.php'>";
		//Super User****************************************************************
	
			} else{
				$_SESSION['ses_id'] = session_id();
				$_SESSION['username'] = $user['username'];
				$_SESSION['status'] =2;

		echo "<meta http-equiv='refresh' content ='1;URL=tables1.php'>";
			}
			
		} // end while
	}//end else






?>
