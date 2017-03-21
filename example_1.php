<?php
session_start();
 include("connect.php");

$exam_id=$_SESSION['exam_id'];
 if (isset($_POST['edit_exam_user'])) {
 	$sqli = "INSERT INTO `stwExam_User` (`stwUser_id`, `stwExam_id`) VALUES ('".$_POST['edit_exam_user']."'
 	, $exam_id)";
 

        
            $result =mysqli_query($conn,$sqli);
    if ($result) {
    	echo "เพิ่มข้อมูลสมาชิกลงในหัวข้อทดสอบเรียบร้อย";
    }else{
    	echo "ไม่สามารถเพิ่มข้อมูลสมาชิกลงในหัวขอทดสอบได้";
    }
}


  if (isset($_POST['delete_quest_id'])) {
  	$sql = "DELETE FROM stwExam_detail WHERE stwExam_detail_id ='".$_POST['delete_quest_id']."'";
 	$result = mysqli_query($conn,$sql);
   if ($result) {
       echo "ลบคำถามออกจากการทดสอบเรียบร้อย";
   }else{
       echo "ไม่สามารถลบคำถามออกจากการทดสอบเรียบร้อย";
   }



  }




  if (isset($_POST['edit_quest_exam'])) {
  	$sql ="INSERT INTO `stwExam_detail` ( `stwExam_id`, `stwQuestion_id`) VALUES ( $exam_id,'".$_POST['edit_quest_exam']."')";
  	       $result =mysqli_query($conn,$sql);

    if ($result) {
    	echo "เพิ่มคำถามในหัวข้อทดสอบเรียบร้อย";
    }else{
    	echo "ไม่สามารถเพิ่มคำถามลงในหัวขอทดสอบได้";
    }

  }


?>