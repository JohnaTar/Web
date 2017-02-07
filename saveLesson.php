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





  
//----------------------------------------------------------------------------


if ($_POST['video']==null) {
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
}
  
  

?>