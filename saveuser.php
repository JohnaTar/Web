
<?php
	
	include("connect.php");
	$password = md5($_POST['repassword']);
	$id = $_POST['id'];



	$sql = "UPDATE `member` SET 
			`password` = '$password'
			WHERE id =$id";

			

	$query = mysqli_query($conn,$sql);

	if($query) {
	 echo "<script>";
        echo "alert(\"บันทึกข้อมูลเรียบร้อย\");"; 
    echo "</script>";
    echo "<meta http-equiv='refresh' content ='1;URL=tables1.php'>";
	}

?>
