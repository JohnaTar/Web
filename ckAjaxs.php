<?php
include("connect.php");
 if (isset($_POST['del_logo'])){
$sql = "DELETE  FROM stwUrllogo
                        WHERE stwUrllogo_id = '".$_POST['del_logo']."' ";
$result = mysqli_query($conn,$sql);
    if($result) {
        echo "ลบโลโก้เรียบร้อย"; 
        exit();    
    }else {
        echo "ไม่สามารถลบโลโกได้"; 
        exit();
    

    }
}
if (isset($_POST['use_logo'])) {
  $id ="1";
  $logo =$_POST['use_logo'];
  $sql = "UPDATE stwShowlogo SET stwUrllogo_id = '$logo' where stwShowlogo_id = '$id'";
  $result = mysqli_query($conn,$sql);
    if($result) {
        echo "เปลี่ยนโลโก้เรียนร้อย"; 
        exit();    
    }else {
        echo "ไม่สามารถเปลี่ยนโลโก้เรียนร้อย"; 
        exit();
    

    }

  
}
/////////////////////////////////////////////////////////////////////////////////
if (isset($_POST['del_lesson'])) {
  $sql= "DELETE FROM stwContent WHERE stwContent_id ='".$_POST['del_lesson']."'";
  $result = mysqli_query($conn,$sql);
    if($result) {
        echo "ลบข้อมูลเนื้อหา้เรียบร้อย"; 
        exit();    
    }else {
        echo "ไม่สามารถลบข้อมูลเนื้อหา้เรียบร้อย"; 
        exit();
    

    }

}


?>