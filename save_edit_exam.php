<?php
	include("connect.php");
	if (isset($_POST['subject'])) {
    $subject = $_POST['subject'];
    $date_test = $_POST['date'];
    $past =$_POST['Past'];
    $time_start =$_POST['time_start'];
    $time_end =$_POST['time_end'];
    $exam_id =$_POST['Exam_no'];
    $date = str_replace('/', '-', $date_test);
   $datetest=date('Y-m-d', strtotime($date));

    	$sql ="UPDATE `stwExam` SET `stwExam_name`='$subject', `stwExam_date`='$datetest', `stwExam_start`= 
    	'$time_start', `stwExam_end`='$time_end', `stwExam_edit`=NOW(), `stwExam_past`= '$past' WHERE (`stwExam_id`='$exam_id') ";
    	$res =mysqli_query($conn,$sql);
    	if ($res) {
    		
    		 echo "<script>alert('แก้ไขข้อมูลเรียบร้อย')</script>";
     echo "<script>window.location='Create'</script>";

	
	}else {
			 echo "<script>alert('ไม่สามารถแก้ไขข้อมูลได้')</script>";
     echo "<script>window.location='Create'</script>";
	}
	


}

?>