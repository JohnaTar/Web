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

    if (isset($_POST['User'])) {
     $id=$_POST['User'];
     $N = count($id);
     for($i=0; $i < $N; $i++){
  $sql = "DELETE  FROM stwUser 
                        WHERE stwUser_id = '$id[$i]'  ";
    $query = mysqli_query($conn,$sql);
    }    
  echo "ลบข้อมูลเรียบร้อย";
}else{
  echo "กรุณาเลือกข้อมูลสมาชิก";
}




?>