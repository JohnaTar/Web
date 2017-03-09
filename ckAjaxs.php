<?php
include("connect.php");
 if (isset($_POST['del_logo'])){

$sql ="SELECT * FROM stwUrllogo WHERE stwUrllogo_id ='".$_POST['del_logo']."'";
$res =mysqli_query($conn,$sql);
$row =mysqli_fetch_array($res,MYSQLI_ASSOC);
$del =$row['stwUrlname'];
unlink($del);

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
        echo "ไม่สามารถเปลี่ยนโลโก้"; 
        exit();
    

    }

  
}
/////////////////////////////////////////////////////////////////////////////////

///////////////////////////////////////////////////////////////////////////
if (isset($_POST['del_fileupload'])) {
  $sqli = "SELECT stwFileupload_path FROM stwFileupload WHERE stwFileupload_id ='".$_POST['del_fileupload']."'";
  $res = mysqli_query($conn,$sqli);
  $row =mysqli_fetch_array($res,MYSQLI_ASSOC);
  $del = $row['stwFileupload_path'];
  unlink($del);

  $sql= "DELETE FROM stwFileupload WHERE stwFileupload_id ='".$_POST['del_fileupload']."'";
  $result = mysqli_query($conn,$sql);
    if($result) {
        echo "ลบไฟล์เรียบร้อย"; 
        exit();    
    }else {
        echo "ไม่สามารถลบไฟล์ได้"; 
        exit();
    

    }

}



?>