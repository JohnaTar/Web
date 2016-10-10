<?php
include("connect.php");
 	$sql = "INSERT INTO `member` (`username`, `password`, `fname`, `lname`, `gender`, `email`, `tel`, `dept_id`, `status_id`)values('".$_POST["username"]."','".md5($_POST["password"])."',
 									 '".$_POST["fname"]."','".$_POST["lname"]."','".$_POST["gender"]."','".$_POST["email"]."','".$_POST["tel"]."','".$_POST["dept"]."','".$_POST["status"]."')";
 	$query = mysqli_query($conn,$sql);
 	

if($query) {

echo "<script>";
        echo "alert(\"บันทึกข้อมูลเรียบร้อย\");";        
    echo "</script>";

}

?>
