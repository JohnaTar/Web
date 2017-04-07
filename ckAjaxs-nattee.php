<?php
include("connect.php");

if (isset($_POST['exam_id'])) {
	
	
	$sql =   "DELETE FROM `stwExam`, `stwExam_User`, `stwExam_detail`
USING `stwExam`
INNER JOIN `stwExam_User`
INNER JOIN `stwExam_detail`
WHERE `stwExam`.`stwExam_id` = '".$_POST['exam_id']."'
AND `stwExam_User`.`stwExam_id` = `stwExam`.`stwExam_id`
AND `stwExam_detail`.`stwExam_id` = `stwExam`.`stwExam_id`
";
	$reslut =mysqli_query($conn,$sql);
	if ($reslut) {
		 echo "ลบข้อมูลเรียบร้อย";
	}else{
		echo "ไม่สามารถลบข้อมูลได้";
	}
	

}




?>

