<?php
include("connect.php");

if (isset($_POST['UserName']))
	{
	
	$sql = "SELECT * FROM stwUser WHERE stwUserName='".$_POST['UserName']."'";
	$result = mysqli_query($conn, $sql);
	if(mysqli_num_rows($result) == 0)
		{
			//echo "<span style='color:green'>ชื่อผู้ใช้งานได้</span>";
			echo true;
			exit();
		
		}
			
	else
		{ 	
			echo false;
			exit();
		

	
		}
	exit();
	}


//email *********************************

if (isset($_POST['Email'])) 
{
	

	$sql = "SELECT * FROM stwUser WHERE stwEmail='".$_POST['Email']."'";
	$result = mysqli_query($conn, $sql);
	if(mysqli_num_rows($result) == 0)
		{
			echo "<span style='color:green'>อีเมลล์ใช้งานได้</span>";
		}
	else
	{ 
	echo "<span style='color:red'>อีเมลล์ใช้งานไม่ได้</span>";
	}
	exit();
}

?>

