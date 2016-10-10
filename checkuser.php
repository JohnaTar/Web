<?php
if ($_SESSION['ses_id']=='') {
  echo "<meta http-equiv='refresh' content ='1;URL=index.php'>";
} elseif ($_SESSION['status']!=2) {
  echo "<meta http-equiv='refresh' content ='1;URL=logout.php'>";
} else{
?>  

<?php
}
?>
