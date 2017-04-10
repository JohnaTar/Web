<?php
include ("connect.php");
if(isset($_POST["Import"])){
           echo $filename=$_FILES["file"]["tmp_name"];
	  if($_FILES["file"]["size"] > 0) {
             $file = fopen($filename, "r");
	         while (($emapData = fgetcsv($file, 10000, ",")) !== FALSE)  {
	         	$password =md5($emapData[2]);
	      $sql ="SELECT stwPersonal_id FROM stwUser WHERE stwPersonal_id='$emapData[0]'";
	      $result = mysqli_query($conn, $sql);
	        if(mysqli_num_rows($result) == 1){

	        	$sqll="UPDATE `stwUser` SET `stwPersonal_id`='$emapData[0]',`stwUsername`='$emapData[1]', 
	        	`stwPassword`='$password', `stwFirstname`='$emapData[3]', `stwLastname`='$emapData[4]', `stwEmail`='$emapData[5]', `stwTel`='$emapData[6]', `stwGender`='$emapData[7]', `stwDept_id`='$emapData[8]', `stwStatus_id`='$emapData[9]', `stwPrefix_id`='$emapData[10]', `stwEdit_date`=NOW() WHERE (`stwPersonal_id`='$emapData[0]') ";
	        	
	        }else{
	        	$sqll = "INSERT INTO `stwUser` (`stwPersonal_id`,`stwUsername`, `stwPassword`, `stwFirstname`, `stwLastname`, `stwEmail`, `stwTel`, `stwGender`,`stwDept_id`,`stwStatus_id`,`stwPrefix_id`,`stwCreated_date`)
	            	values('$emapData[0]','$emapData[1]','$password','$emapData[3]','$emapData[4]','$emapData[5]','$emapData[6]','$emapData[7]','$emapData[8]','$emapData[9]','$emapData[10]',NOW())";

	        }


	    
	   
	          //It wiil insert a row to our subject table from our csv file`
	          
	         //we are using mysql_query function. it returns a resource on true else False on error
	          $result = mysqli_query($conn, $sqll);
				if(! $result )
				{
					echo "<script type=\"text/javascript\">
							alert(\"Invalid File:Please Upload CSV File.\");
							
						</script>";
				
				}

	         }
	         fclose($file);
	         //throws a message if data successfully imported to mysql database from excel file
	         echo "<script type=\"text/javascript\">
						alert(\"CSV File has been successfully Imported.\");
						window.location = \"Tables\"
					</script>";
	        
			 

			 //close of connection
			mysql_close($conn); 
				
		 	
			
		 }
	}	 
?>		 