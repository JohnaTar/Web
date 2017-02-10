<?php
include("connect.php");

//delete Subject *********************************

  if(isset($_POST['delete'])){

 $sql = "DELETE FROM stwSubject
WHERE stwSubject_id = '".$_POST['delete']."' ";
          $query = mysqli_query($conn,$sql);

    if ($query) {
        echo "ลบข้อมูลเรียบร้อย";
        exit();
     
    }else {
        echo "ไม่สามารถลบข้อมูลได้"; 
      exit();
    }
}





?>

