<?php
include("connect.php");
if (isset($_POST['Personal_ID'])) {
	 $sql = "SELECT * FROM stwUser
                WHERE stwPersonal_id='".$_POST['Personal_ID']."'";
        $result = mysqli_query($conn, $sql);
          if(mysqli_num_rows($result) == 0){
             echo true;
                exit();
          }else {   
             echo false;
                exit();
  
          }
    exit();
  }



?>