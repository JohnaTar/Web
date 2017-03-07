<?php
include ("connect.php");
if(isset($_POST["Import"])){
		

		echo $filename=$_FILES["file"]["tmp_name"];
		

		 if($_FILES["file"]["size"] > 0)
		 {
		 	


		  	$file = fopen($filename, "r");
	         while (($emapData = fgetcsv($file, 10000, ",")) !== FALSE)

	         {
	    
	    $password =md5($emapData[1]);
	          //It wiil insert a row to our subject table from our csv file`
	           $sql = "INSERT INTO `stwUser` (`stwUsername`, `stwPassword`, `stwFirstname`, `stwLastname`, `stwEmail`, `stwTel`, `stwGender`,`stwDept_id`,`stwStatus_id`,`stwPrefix_id`,`stwCreated_date`)
	            	values('$emapData[0]','$password','$emapData[2]','$emapData[3]','$emapData[4]','$emapData[5]','$emapData[6]','$emapData[7]','$emapData[8]','$emapData[9]',NOW())";
	         //we are using mysql_query function. it returns a resource on true else False on error
	          $result = mysqli_query($conn, $sql);
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
						window.location = \"tables\"
					</script>";
	        
			 

			 //close of connection
			mysql_close($conn); 
				
		 	
			
		 }
	}	 
?>		 