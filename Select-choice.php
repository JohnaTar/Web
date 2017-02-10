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
$subject_id = $_POST['subject_id'];

//ป้องกันการทำแบบทดสอบหัวเดิมซ้ำ(อาจเกิดกรณีผู้ใช้เปิดหลายเบราเซอร์พร้อมกัน)
$sql = "SELECT COUNT(*) FROM stwscore 
 			WHERE stwSubject_id = $subject_id AND stwUser_id = $testee_id";
			
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result);

if($row[0] !=0) {
	mysqli_close($conn);
	exit("alert('ท่านได้ทำแบบสอบทดสอบนี้ไปแล้ว ไม่สามารถทำซ้ำได้อีก');
			 window.location = 'Create.php';");
}

//ตรวจสอบว่าอยู่ในช่วงวันเวลาที่กำหนดในการทำแบบทดสอบหรือไม่
$sql = "SELECT stwDate_test, stwTime_start, stwTime_end
 			FROM stwsubject WHERE stwSubject_id = $subject_id";
			
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result);

$now = strtotime("now");
$start = $row[0] . " " . $row[1];
$end = $row[0] . " " . $row[2];
$start = strtotime($start);
$end = strtotime($end);
//ถ้ากำหนดวันเวลาในการทำแบบทดสอบ และไม่อยู่ในช่วงเวลานั้น
//ให้โหลดเพจ testing.phpใหม่ ซึ่งจะไปบรรจบกับการตรวจสอบภายในเพจนี้พอดี
if(($row[0] != "0000-00-00") && (($now < $start) || ($now > $end))) {
	mysqli_close($conn);
	exit("window.location = 'testing.php?id=$subject_id';");
}

$uid = $_SESSION['ID'];
$sid = $_POST['stwSubject_id'];
$qid = $_POST['stwQuestion_id'];
$cid = $_POST['stwchoice_id'];
//ถ้าไม่มีอะไรผิดพลาด ก็ให้บันทึกข้อมูลลงในตาราง testing
$sql = "REPLACE INTO stwtesting VALUES('$uid', '$sid', '$qid', '$cid')";
mysqli_query($conn, $sql);
mysqli_close($conn);
?>