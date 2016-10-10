<?php
session_start();

if ($_SESSION['ses_id']=='') {
  
  echo "<meta http-equiv='refresh' content ='1;URL=index.php'>";
  } elseif ($_SESSION['status']!=1) {
  echo "<meta http-equiv='refresh' content ='1;URL=logout.php'>";
} else{
}
?>
