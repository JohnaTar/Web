<?php
session_start();
//**************connect DB
include("connect.php");

	$Username = $_POST['Username'];
	$Password = md5($_POST['Password']); // ประกาศตัวแปร



	$sql = "SELECT * FROM stwUser 
						WHERE stwUsername = '$Username'
						AND stwPassword = '$Password' ";
						
	$result = mysqli_query($conn, $sql);	
	$num = mysqli_num_rows($result);
	if($num <= 0){
	echo "<script>";
		echo "alert(\"Username และ password ไม่ถูกต้อง\");"; 
		echo "window.history.back()";
	echo "</script>";
	} else{
		while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){  
			
		//admin*************************************************
			if ($row['stwStatus_id']== 1)
			 {
				$_SESSION['ses_id'] = session_id();
				$_SESSION['stwUsername'] = $row['stwUsername'];
				$_SESSION['status'] =$row['stwStatus_id'];


		echo "<meta http-equiv='refresh' content ='1;URL=admin.php'>";
		//Super User********************************************
	
			} else if ($row['stwStatus_id']== 2) {
				# 
				$_SESSION['ses_id'] = session_id();
				$_SESSION['username'] = $row['stwUsername'];
				$_SESSION['status'] =$row['stwStatus_id'];

		echo "<meta http-equiv='refresh' content ='1;URL=tables1.php'>";
			}
			 else{
				$_SESSION['ses_id'] = session_id();
				$_SESSION['username'] = $row['stwUsername'];
				$_SESSION['status'] =$row['stwStatus_id'];

		echo "<meta http-equiv='refresh' content ='1;URL=tables2.php'>";
			}
			
		} // end while
	}//end else






?>
