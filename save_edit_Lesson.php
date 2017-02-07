<?php
include("connect.php");
if (isset($_POST['content_edit'])) {

  if ($file=$_FILES['image']['tmp_name'] == NULL) {
$sub = $_POST['video'];
$Vdo = substr($sub,32);

    $sql ="UPDATE `stwContent` 
    SET `stwContent_title`='".$_POST['title']."', `stwContent_detail`='".$_POST['content']."',`stwYoutube`='$Vdo' 
    WHERE (`stwContent_id`='".$_POST['content_edit']."') ";
  
    
   } else{

$maxDimW = 450;
$maxDimH = 450;
list($width, $height, $type, $attr) = getimagesize( $_FILES['image']['tmp_name'] );
if ( $width > $maxDimW || $height > $maxDimH ) {
    $target_filename = $_FILES['image']['tmp_name'];
    $fn = $_FILES['image']['tmp_name'];
    $size = getimagesize( $fn );
    $ratio = $size[0]/$size[1]; // width/height
    if( $ratio > 1) {
        $width = $maxDimW;
        $height = $maxDimH/$ratio;
    } else {
        $width = $maxDimW*$ratio;
        $height = $maxDimH;
    }
    $src = imagecreatefromstring(file_get_contents($fn));
    $dst = imagecreatetruecolor( $width, $height );
    imagecopyresampled($dst, $src, 0, 0, 0, 0, $width, $height, $size[0], $size[1] );

    imagejpeg($dst, $target_filename); // adjust format as needed


}

move_uploaded_file($_FILES['image']['tmp_name'],"Infophoto/".$_FILES['image']['name']);
$location="Infophoto/".$_FILES["image"]["name"];





  
$sqli = "SELECT stwContent_img FROM stwcontent WHERE stwContent_id ='".$_POST['content_edit']."'";
$res = mysqli_query($conn,$sqli);
$row =mysqli_fetch_array($res,MYSQLI_ASSOC);
$del = $row['stwContent_img'];
unlink($del);

$sub = $_POST['video'];
$Vdo = substr($sub,32);


$sql ="UPDATE `stwContent` 
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