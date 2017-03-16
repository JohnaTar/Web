<?php
session_start();

if ($_SESSION['ses_id']=='') {
     echo "<script>alert('PLEASE LOGIN')</script>";
     echo "<script>window.location='index'</script>";
 

}
?>

<?php

include("connect.php");
$testee_id = $_SESSION['ID'];
$subject_id = $_GET['id'];


$sql = "SELECT COUNT(*) FROM stwtesting WHERE stwSubject_id = $subject_id AND stwUser_id = $testee_id";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result);

if($row[0] == 0) {
	mysqli_close($conn);
	echo "<script>";
		echo "alert(\"ไม่พบข้อมูลการทำแบบสอบทดสอบของท่านในหัวข้อนี้\");"; 
		echo "window.history.back()";
	echo "</script>";
	
}

else {	
	$sql = "SELECT COUNT(*) FROM stwtesting
				WHERE stwSubject_id = $subject_id AND stwUser_id = $testee_id AND stwChoice_id IN(
					SELECT stwChoice_id 
					FROM stwChoice 
					WHERE  stwSubject_id = $subject_id AND stwAnswer = 'yes')";
			
	$result =  mysqli_query($conn, $sql);
	$row = mysqli_fetch_array($result);
	$score = $row[0];

	//$sql = "REPLACE INTO stwExam_User VALUES($testee_id, $subject_id, $score)";
	$sql= "UPDATE `stwExam_User` 
	      SET `stwScore`='$score', `stwScore_date`= NOW() 
		  WHERE (`stwUser_id`='$testee_id') AND (`stwExam_id`='$subject_id') ";


	mysqli_query($conn, $sql);

	$sql = "DELETE FROM stwtesting WHERE stwUser_id = $testee_id AND stwSubject_id = $subject_id";
	mysqli_query($conn, $sql);
				
	mysqli_close($conn);

	echo "<script>alert('เสร็จสิ้นการทดสอบและตรวจนับคะแนนแล้ว')</script>";
    echo "<script>window.location='Create'</script>";

}
?>
