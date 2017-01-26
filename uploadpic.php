<?php

include("connect.php");
session_start();



if (isset($_FILES['image']['tmp_name'])) {
$check = getimagesize($_FILES['image']['tmp_name']);
    if($check !== false) {
$file=$_FILES['image']['tmp_name'];
$image= addslashes(file_get_contents($_FILES['image']['tmp_name']));
$image_name= addslashes($_FILES['image']['name']);
			
move_uploaded_file($_FILES["image"]["tmp_name"],"photos/" . $_FILES["image"]["name"]);

$user = $_SESSION['ID'];			
$location="photos/" . $_FILES["image"]["name"];

$sqli = "SELECT stwProfileurl FROM stwUser WHERE stwUser_id = '$user' ";
$res =mysqli_query($conn,$sqli);
$row =mysqli_fetch_array($res,MYSQLI_ASSOC);
$del = $row['stwProfileurl'];
unlink($del);




$sql = "UPDATE stwUser SET stwProfileurl = '$location' where stwUser_id = '$user'";
$query=mysqli_query($conn,$sql);

if ($query) {
   echo "<script>window.history.back();</script>";
     echo "<script>location.reload();</script>";
 
} else {
    echo "Error: " ;
}
        
       
    } else {
    	echo "<script>alert('File is not an image')</script>";
    	echo "<script>window.history.back();</script>";
       
       
    }
}


?>
