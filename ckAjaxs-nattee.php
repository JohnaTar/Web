<?php
include("connect.php");

if (isset($_POST['exam_id'])) {
	
	$sql ="DELETE stwExam,stwExam_User,stwExam_detail 
		   FROM stwExam   
		   INNER JOIN stwExam_User ON stwExam_User.stwExam_id = stwExam_User.stwExam_id 
		   INNER JOIN stwExam_detail ON stwExam_detail.stwExam_id=stwExam_detail.stwExam_id 
		   WHERE stwExam.stwExam_id ='".$_POST['exam_id']."'";
	$reslut =mysqli_query($conn,$sql);
	if ($reslut) {
		 echo "ลบข้อมูลเรียบร้อย";
	}else{
		echo "ไม่สามารถลบข้อมูลได้";
	}

}




?>

