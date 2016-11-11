<?php
	include("connect.php");
    
   



				
			
	
$sql = "INSERT INTO `stwUser` (`stwUsername`, `stwPassword`, `stwFirstname`, `stwLastname`, `stwEmail`, `stwTel`, `stwGender`, `stwActivate`, `stwDept_id`,`stwStatus_id`,`stwPrefix_id`,`stwCreated_date`)
 			VALUES ('".$_POST["stwUsername"]."','".md5($_POST["stwPassword"])."'
 				   ,'".$_POST["stwFirstname"]."','".$_POST["stwLastname"]."',
 				   '".$_POST["stwEmail"]."','".$_POST["stwTel"]."','".$_POST["stwGender"]."',
 				   '".$_POST["stwActivate"]."','".$_POST["stwDept_id"]."','".$_POST["stwStatus_id"]."','".$_POST["stwPrefix_id"]."',NOW())";
 	$query = mysqli_query($conn,$sql);
 	
if($query) {
echo "<script>";
        echo "alert(\"บันทึกข้อมูลเรียบร้อย\");"; 
	
		echo "window.history.back()";
	       
    echo "</script>";
    
	}


 
?>

                    
                     



