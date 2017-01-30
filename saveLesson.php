<?php
include('connect.php');
if (isset($_POST['addinfo'])) {
	
	$title =$_POST['title'];
	$content=$_POST['content'];
	$lesson=$_POST['lesson'];
if ($file=$_FILES['image']['tmp_name'] == NULL) {

	$location ="";
} else {

	


$file=$_FILES['image']['tmp_name'];
$image= addslashes(file_get_contents($_FILES['image']['tmp_name']));
$image_name= addslashes($_FILES['image']['name']);
			
move_uploaded_file($_FILES["image"]["tmp_name"],"Infophoto/" . $_FILES["image"]["name"]);

			
$location="Infophoto/".$_FILES["image"]["name"];

} if ($_POST['video']==null) {
	$Vdo ="";
} else{

	$Vdo = $_POST['video'];
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