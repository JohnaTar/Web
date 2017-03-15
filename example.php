<?php
include("connect.php");
if (isset($_POST['subject'])) {



	 $subject = $_POST['subject'];
    $date_test = $_POST['date'];
    $past =$_POST['Past'];
    $time_start =$_POST['time_start'];
    $time_end =$_POST['time_end'];

   
   
        $sql ="INSERT INTO `stwExam` (`stwExam_name`, `stwExam_date`,`stwExam_start`,`stwExam_end`, `stwExam_create`, `stwExam_past`) 
        	VALUES ('$subject', '$date_test','$time_start','$time_end',NOW(),'$past')";
        if (mysqli_query($conn,$sql)) {

        	$exam =mysqli_insert_id($conn);

        		
			$id=$_POST['select'];

			$N = count($id);

			for($i=0; $i < $N; $i++){

				$sqli = "INSERT INTO `stwExam_User` (`stwUser_id`, `stwExam_id`) VALUES ('$id[$i]', '$exam')";
				$res = mysqli_query($conn,$sqli);
				
					
				} 

			$Q_id=$_POST['question'];

			$Nn = count($Q_id);

			for($c=0; $c < $Nn; $c++){

				$sqll ="INSERT INTO `stwExam_detail` (`stwExam_id`, `stwQuestion_id`) VALUES ('$exam', '$Q_id[$c]')";
				$ress = mysqli_query($conn,$sqll);
					
				} echo "บันทึกข้อมูลเรียบร้อย";





	
			
			}
        	
        













	




	
	
}




?>