<?php

include("connect.php");
session_start();



if (!isset($_FILES['image']['tmp_name'])) {
echo "";
}else{
$file=$_FILES['image']['tmp_name'];
$image= addslashes(file_get_contents($_FILES['image']['tmp_name']));
$image_name= addslashes($_FILES['image']['name']);
			
move_uploaded_file($_FILES["image"]["tmp_name"],"photos/" . $_FILES["image"]["name"]);

$user = $_SESSION['ID'];			
$location="photos/" . $_FILES["image"]["name"];




$sql = "UPDATE stwUser SET stwProfileurl = '$location' where stwUser_id = '$user'";
$query=mysqli_query($conn,$sql);

if ($query) {
   echo "<script>window.history.back()</script>";
} else {
    echo "Error: " ;
}
}

?>
