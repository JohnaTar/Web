<?php
session_start();
//**************connect DB
include("connect.php");

	$Username = $_POST['Username'];
	$Password = md5($_POST['Password']); // ประกาศตัวแปร


	$sql = "SELECT * FROM stwUser 
						WHERE stwUsername = '$Username'
						AND stwPassword = '$Password' ";
						//exit();
	$result = mysqli_query($conn, $sql);	
	$num = mysqli_num_rows($result);
	if($num <= 0){
		echo "<script>";
		echo "alert(\"Username และ password ไม่ถูกโว้ย\");"; 
		echo "window.history.back()";
	echo "</script>";
	} else{
		while ($user = mysqli_fetch_array($result,MYSQLI_ASSOC)){  
			
		//admin**********************************************************************
			if ($user['stwStatus_id']== 1)
			 {
				$_SESSION['ses_id'] = session_id();
				$_SESSION['stwUsername'] = $user['stwUsername'];
				$_SESSION['status'] =$user['stwStatus_id'];


		echo "<meta http-equiv='refresh' content ='1;URL=admin.php'>";
		//Super User****************************************************************
	
			} else{
				$_SESSION['ses_id'] = session_id();
				$_SESSION['username'] = $user['username'];
				$_SESSION['status'] =$user['stwStatus_id'];

		echo "<meta http-equiv='refresh' content ='1;URL=tables1.php'>";
			}
			
		} // end while
	}//end else






?>
