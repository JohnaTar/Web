<?php
include("connect.php");
if (isset($_POST['content_edit'])) {

  if ($file=$_FILES['image']['tmp_name'] == NULL) {
$sub = $_POST['video'];
$Vdo = substr($sub,32);

    $sql ="UPDATE `stwcontent` 
    SET `stwContent_title`='".$_POST['title']."', `stwContent_detail`='".$_POST['content']."',`stwYoutube`='$Vdo' 
    WHERE (`stwContent_id`='".$_POST['content_edit']."') ";
  
    
   } else{

$file=$_FILES['image']['tmp_name'];
$image= addslashes(file_get_contents($_FILES['image']['tmp_name']));
$image_name= addslashes($_FILES['image']['name']);
      
move_uploaded_file($_FILES["image"]["tmp_name"],"Infophoto/" . $_FILES["image"]["name"]);
     
$location="Infophoto/".$_FILES["image"]["name"];
$sqli = "SELECT stwContent_img FROM stwcontent WHERE stwContent_id ='".$_POST['content_edit']."'";
$res = mysqli_query($conn,$sqli);
$row =mysqli_fetch_array($res,MYSQLI_ASSOC);
$del = $row['stwContent_img'];
unlink($del);

$sub = $_POST['video'];
$Vdo = substr($sub,32);


$sql ="UPDATE `stwcontent` 
SET `stwContent_title`='".$_POST['title']."', `stwContent_detail`='".$_POST['content']."', `stwContent_img`='$location',`stwYoutube`='$Vdo'
WHERE (`stwContent_id`='".$_POST['content_edit']."')  ";

   }

   $query =mysqli_query($conn,$sql);
   if($query) {
    
      echo "<script>alert('แก้ไขข้อมูลเนื้อหา้เรียบร้อย!!')</script>";
     echo "<script>window.history.back()</script>";
   
        
        exit();    
    }else {
        echo "ไม่สามารถแก้ไขข้อมูลเนื้อหา้เรียบร้อย"; 
        exit();
    

    }



}
?>