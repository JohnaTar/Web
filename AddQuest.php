<?php
include("connect.php");
if (isset($_POST['show_add_quest'])) {

	$sql ="SELECT stwSubject_text FROM stwSubject
			WHERE stwSubject_id ='".$_POST['show_add_quest']."'";
	$row=mysqli_query($conn,$sql);
	$res =mysqli_fetch_array($row,MYSQLI_ASSOC); 
	echo '<div class="alert alert-info alert-dismissable">ชื่อแบบทดสอบ :'.$res['stwSubject_text'].' </div>';
	

  $id = $_POST['show_add_quest'];

    echo '
            <input name="suject_id" type="hidden" value="'.$id.'">
            
            
           ';
  } 

if (isset($_POST['suject_id'])) {
	$sql = "SELECT CONCAT(stwDate_test, ' ', stwTime_start) FROM stwSubject WHERE stwSubject_id = '".$_POST['suject_id']."'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result);
$dt_test = strtotime($row[0]);
$now = strtotime("now");

if(($row[0] != "0000-00-00 00:00:00") && ($now >= $dt_test)) {
    echo '
                    ขณะนี้เลยวันเวลาที่กำหนดในการทำแบบทดสอบหัวข้อนี้แล้ว
                    ดังนั้นจึงไม่อนุญาตให้เพิ่มคำถามในแบบทดสอบหัวข้อนี้อีก
            
            ';

} else { 

			
		
		$sql = "REPLACE INTO stwQuestion VALUES('','".$_POST['suject_id']."','".$_POST['question']."')";
		if(mysqli_query($conn, $sql)) {
			//อ่านค่า id ของคำถามที่เพิ่มใหม่ เพื่อนำไปเชื่อมโยงกับตัวเลือกในตาราง choice
			$question_id = mysqli_insert_id($conn);   
			
			//ตัวเลือกถูกส่งขึ้นมาในรูปแบบอาร์เรย์ เราจะใส่ลงในตาราง choice ทีละตัวเลือก
			for($i = 1; $i <= count($_POST['choice']); $i++) {
				$ch_text = $_POST['choice'][$i];
				$answer = "no";
				if($_POST['answer'] == $i) {	//ถ้าตัวเลือกนั้นถูกกำหนดให้เป็นคำตอบ(ดูเลขลำดับอาร์เรย์ในฟอร์มประกอบ)
					$answer =  "yes";
				}
				$sql = "REPLACE INTO stwChoice VALUES('', '$question_id', '$ch_text', '$answer')";
				mysqli_query($conn, $sql);
			}
			echo 'บันทึกข้อมูลเรียบร้อยแล้ว ';
			
		}
		else {
			 echo "เกิดข้อผิดพลาดในการบันทึกข้อมูล กรุณาลองใหม่";
		}



					}
		




	
}




  






  

?>