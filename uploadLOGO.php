<?php

include("connect.php");
session_start();



if (!isset($_FILES['image']['tmp_name'])) {
echo "";
}else{
$file=$_FILES['image']['tmp_name'];
$image= addslashes(file_get_contents($_FILES['image']['tmp_name']));
$image_name= addslashes($_FILES['image']['name']);
			
move_uploaded_file($_FILES["image"]["tmp_name"],"Images/Logo" . $_FILES["image"]["name"]);

			
$location="Images/Logo".$_FILES["image"]["name"];




$sql = "INSERT INTO stwUrllogo VALUES ('','$location')";
$query=mysqli_query($conn,$sql);

if ($query) {
    echo "<script>alert('Success!!')</script>";
     echo "<script>window.location='Logo'</script>";
} else {
    echo "Error: " ;
}
}

?>
