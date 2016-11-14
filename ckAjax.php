<?php
include("connect.php");

if (isset($_POST['UserName']))
	{
	
	$sql = "SELECT * FROM stwUser WHERE stwUserName='".$_POST['UserName']."'";
	$result = mysqli_query($conn, $sql);
	if(mysqli_num_rows($result) == 0)
		{
			
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
	if(mysqli_num_rows($result) == 0){
			
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





	if(isset($_POST['delete'])){
		
    include("connect.php");
    $sql = "DELETE  FROM stwUser 
                        WHERE stwUser_id = '".$_POST['delete']."' ";
    $query = mysqli_query($conn,$sql);

    if ($query) {
        echo "ลบข้อมูลเรียบร้อย";
        exit();
     
    }else {
        echo "ไม่สามารถลบข้อมูลได้"; 
     	exit();
    }
    

		
		

	}
	

?>