<?php
session_start();

if ($_SESSION['ses_id']=='') {
		echo "<script>";
		echo "alert(\"กรุณาล๊อกอิน \");"; 
		echo "window.history.back()";
	echo "</script>";
  echo "<meta http-equiv='refresh' content ='1;URL=index.php'>";
  } else if ($_SESSION['status']== 3 ) {
  	echo "<script>";
		echo "alert(\"คุณไม่มีสิทธิเข้าถึงหน้า\");"; 
		echo "window.history.back()";
	echo "</script>";

  echo "<meta http-equiv='refresh' content ='1;URL=logout.php'>";
} else{
}
?>
