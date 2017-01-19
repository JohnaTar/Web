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
		echo "alert(\"Username และ Password ไม่ถูกต้อง\");"; 
		echo "window.history.back()";
	echo "</script>";
	} else{
		while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){  
			
		//admin*************************************************
			if ($row['stwStatus_id']== 1)
			 {
				$_SESSION['ses_id'] = session_id();
				$_SESSION['username'] = $row['stwUsername'];
				$_SESSION['status'] =$row['stwStatus_id'];
				$_SESSION['ID'] = $row['stwUser_id'];
				

		echo "<meta http-equiv='refresh' content ='1;URL=Tables'>";
		//Super User********************************************
	
			} else if ($row['stwStatus_id']== 2) {
				# 
				$_SESSION['ses_id'] = session_id();
				$_SESSION['username'] = $row['stwUsername'];
				$_SESSION['status'] =$row['stwStatus_id'];
				$_SESSION['ID'] = $row['stwUser_id'];
				

		echo "<meta http-equiv='refresh' content ='1;URL=Tables'>";
			}
			 else{
				$_SESSION['ses_id'] = session_id();
				$_SESSION['ID'] = $row['stwUser_id'];
				$_SESSION['status'] =$row['stwStatus_id'];
				

		echo "<meta http-equiv='refresh' content ='1;URL=User'>";
			}
			
		} // end while
	}//end else






?>
