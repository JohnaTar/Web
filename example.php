<?php
session_start();
include("connect.php");

if (isset($_POST['subject'])) {


    $topic =$_POST['topic'];
    $subject = $_POST['subject'];
    $date_test = $_POST['date'] ;
    $past =$_POST['Past'];
    $time_start =$_POST['time_start'];
    $time_end =$_POST['time_end'];
    $date = str_replace('/', '-', $date_test);
   $datetest=date('Y-m-d', strtotime($date));
   

    $sql ="INSERT INTO `stwExam` (`stwSubject_id`, `stwExam_name`, `stwExam_date`, `stwExam_start`, `stwExam_end`, `stwExam_create`, `stwExam_past`) VALUES ('$topic', '$subject', '$datetest', '$time_start', '$time_end', NOW(), '$past')";
   
   
       
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

if (isset($_POST['sub_id'])) {
	
$sql = "SELECT * FROM stwExam_User
        WHERE stwUser_id = '".$_SESSION['ID']."'
         AND stwExam_id = '".$_POST['sub_id']."' 
         AND stwScore ";
$result = mysqli_query($conn, $sql);    
    $num = mysqli_num_rows($result);
    if($num <= 0){
    echo '<center>ไม่พบข้อมูลการทำแบบทดสอบของท่าน</center>';

	} else{

		$row =mysqli_fetch_array($result,MYSQLI_ASSOC);
		echo '<center>คะแนนที่ท่านได้คือ : '.$row['stwScore'].'</center>';

		 $sqli = "SELECT COUNT(*) FROM stwExam_detail WHERE stwExam_id = '".$_POST['sub_id']."'";  //
    		$r = mysqli_query($conn, $sqli);
    		$num_q = 0;
    		if($r) {
        			$rows = mysqli_fetch_array($r);
        			$num_q = $rows[0];
        		}
        		$sq ="SELECT stwExam_past FROM stwExam WHERE stwExam_id ='".$_POST['sub_id']."'";
        		$re =mysqli_query($conn,$sq);
        		$rowss =mysqli_fetch_array($re,MYSQLI_ASSOC);
        		$pass=$rowss['stwExam_past'];
        		$SC=$num_q *$pass/100;
      

        		if ($row['stwScore']<=$SC) {
                                   echo '<center><i class="fa fa-times fa-2x" style="color:red"></i> : ไม่ผ่านการทดสอบ </center>';
                               
                                }else{
                                   echo '<center><i class="fa fa-check fa-2x"style="color:green"></i> : ผ่านการทดสอบ </center>';
                               }


                  


		


	}
}


if (isset($_POST['exam_user_id'])) {
   $sql = "DELETE FROM stwExam_User WHERE stwExam_User_id ='".$_POST['exam_user_id']."'";
   $result = mysqli_query($conn,$sql);
   if ($result) {
       echo "ลบสมาชิกออกจากการทดสอบเรียบร้อย";
   }else{
       echo "ไม่สามารถลบสมาชิกออกจากการทดสอบเรียบร้อย";
   }
}




?>