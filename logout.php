<?php
session_start();
unset($_SESSION['ses_id']);
unset($_SESSION['username']);
unset($_SESSION['status_id']);
session_destroy();
echo "<meta http-equiv='refresh' content ='1;URL=index'>";
?>