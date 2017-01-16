<?php
include('connect.php');
if (isset($_GET['action'])) {
	if ($_GET['action']=="reset") {
		$encrypt = mysqli_real_escape_string($conn,$_GET['encrypt']);
		$sql ="SELECT stwUser_id FROM stwUser WHERE md5(55+10+stwUser_id)='".$encrypt."'";
		$result= mysqli_query($conn,$sql);
		$row=mysqli_fetch_array($result);
		if (count($row)<=1) {
			echo "Invalid key please try again. ";
		
		} else { 
			 include("blank.php");
		}


	}
}
else {

	header("location:index");

	
}

?>	











