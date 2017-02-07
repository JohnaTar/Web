<?php

include("connect.php");
session_start();



if (isset($_FILES['image']['tmp_name'])) {



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

move_uploaded_file($_FILES['image']['tmp_name'],"photo/".$_FILES['image']['name']);
$location="photo/".$_FILES["image"]["name"];





$sql = "INSERT INTO stwUrllogo VALUES ('','$location')";
$query=mysqli_query($conn,$sql);

if ($query) {
    echo "<script>alert('Success!!')</script>";
     echo "<script>window.location='Logo'</script>";
} else {
    echo "Error " ;
}

}

?>