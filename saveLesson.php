<?php
include('connect.php');
if (isset($_POST['addinfo'])) {
	
	$title =$_POST['title'];
	$content=$_POST['content'];
	$lesson=$_POST['lesson'];
if ($file=$_FILES['image']['tmp_name'] == NULL) {

	$location ="";
} else {
//-----------------------------------------------------------------------------
$name = $_FILES["image_upload"]["name"];
 $size = $_FILES["image_upload"]["size"];
 $ext = end(explode(".", $name));


  if($size < (1024*1024))
  {
   $new_image = '';
   $new_name = md5(rand()) . '.' . $ext;
   $location = "Infophoto/" . $new_name;
   list($width, $height) = getimagesize($_FILES["image_upload"]["tmp_name"]);
   if($ext == 'png')
   {
    $new_image = imagecreatefrompng($_FILES["image_upload"]["tmp_name"]);
   }
   if($ext == 'jpg' || $ext == 'jpeg')  
            {  
               $new_image = imagecreatefromjpeg($_FILES["image_upload"]["tmp_name"]);  
            }
            $new_width=200;
            $new_height = ($height/$width)*200;
            $tmp_image = imagecreatetruecolor($new_width, $new_height);
            imagecopyresampled($tmp_image, $new_image, 0, 0, 0, 0, $new_width, $new_height, $width, $height);
            imagejpeg($tmp_image, $path, 100);
            imagedestroy($new_image);
            imagedestroy($tmp_image);
           
  }
  else
  {
   echo 'Image File size must be less than 1 MB';
  }
}






	
//----------------------------------------------------------------------------


} if ($_POST['video']==null) {
	$Vdo ="";
} else{
	
$sub = $_POST['video'];
$Vdo = substr($sub,32);

	
}




$sql ="INSERT INTO `stwContent` (`stwLesson_id`, `stwContent_title`, `stwContent_detail`, `stwContent_img`, `stwYoutube`) VALUES ('$lesson', '$title', '$content','$location','$Vdo')";
$query=mysqli_query($conn,$sql);

if ($query) {
    echo "<script>alert('Success!!')</script>";
     echo "<script>window.history.back()</script>";
    
} else {
    echo "Error " ;
}

}
	
	

?>
