<?php
include("connect.php");

  



if (isset($_POST['authen_id'])) {
  $sql ="UPDATE stwUser SET

          stwActivate = '".$_POST["stwActivate"]."'
          WHERE stwUser_id = '".$_POST['authen_id']."' "; 
    $result = mysqli_query($conn,$sql);

    if($result) {

        echo "แก้ไขข้อมูลเรียบร้อย"; 
        exit();
    
    
    }else {
        echo "ไม่สามารถแก้ไขข้อมูลได้"; 
        exit();
    

    }
}

 





  

?>