<?php
if ($_SESSION['ses_id']=='') {
	echo "<script>";
		echo "alert(\"กรุณาล๊อกอิน \");"; 
		echo "window.history.back()";
	echo "</script>";
  
} elseif ($_SESSION['status']==2) {
	echo "<script>";
		echo "alert(\"คุณไม่มีสิทธิเข้าถึงหน้า\");"; 
		echo "window.history.back()";
	echo "</script>";
  
} else{

}
?>
