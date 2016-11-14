<?php
session_start();

if ($_SESSION['ses_id']=='') {
		echo "<script>";
		echo "alert(\"Please Login \");"; 
		echo "window.history.back()";
	echo "</script>";
  echo "<meta http-equiv='refresh' content ='1;URL=index.php'>";
  } elseif ($_SESSION['status']!=1) {
  	echo "<script>";
		echo "alert(\"NO Permission\");"; 
		echo "window.history.back()";
	echo "</script>";

  echo "<meta http-equiv='refresh' content ='1;URL=logout.php'>";
} else{
}
?>
